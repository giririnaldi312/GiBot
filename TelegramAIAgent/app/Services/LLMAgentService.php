<?php

namespace App\Services;

use App\Models\Mahasiswa;

class LLMAgentService
{
    public function process($message)
    {
        // Hilangkan spasi & ubah ke huruf kecil
        $message = strtolower(trim($message));

        // Cari command di database
        $mahasiswa = Mahasiswa::where('command', $message)->first();

        if ($mahasiswa) {

            return "🎓 DATA MAHASISWA\n\n"
                . "NIM : " . $mahasiswa->nim . "\n"
                . "Nama : " . $mahasiswa->nama;
        }

        // AI sederhana
        return match ($message) {

            "halo" => "Halo 👋 Ada yang bisa saya bantu?",

            "hai" => "Hai, selamat datang di Telegram AI Agent.",

            "siapa kamu" => "Saya adalah Telegram AI Agent berbasis Laravel.",

            "apa itu laravel" => "Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web.",

            default => "❌ Command tidak ditemukan."
        };
    }
}
