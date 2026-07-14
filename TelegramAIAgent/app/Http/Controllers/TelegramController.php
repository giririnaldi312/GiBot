<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class TelegramController extends Controller
{
    public function webhook(Request $request)
    {
        // Simpan request Telegram ke log
        Log::info('===== TELEGRAM MASUK =====');
        Log::info($request->all());

        // Ambil chat id dan pesan
        $chatId = $request->input('message.chat.id');
        $message = strtolower(trim($request->input('message.text')));

        // Jika pesan kosong
        if (!$chatId || !$message) {
            return response()->json([
                'status' => 'ignored'
            ]);
        }

        // Cari command di database
        $mahasiswa = Mahasiswa::where('command', $message)->first();

        if ($mahasiswa) {

            $reply = "📚 DATA MAHASISWA\n\n";
            $reply .= "NIM  : " . $mahasiswa->nim . "\n";
            $reply .= "Nama : " . $mahasiswa->nama;
        } else {

            $reply = "❌ Data mahasiswa tidak ditemukan.\n\n";
            $reply .= "Silakan gunakan salah satu command berikut:\n\n";

            $commands = Mahasiswa::orderBy('nama')->pluck('command');

            foreach ($commands as $command) {
                $reply .= $command . "\n";
            }
        }

        // Kirim balasan ke Telegram
        Http::post(
            "https://api.telegram.org/bot" . config('services.telegram.token') . "/sendMessage",
            [
                'chat_id' => $chatId,
                'text' => $reply,
            ]
        );

        return response()->json([
            'status' => 'success'
        ]);
    }
}
