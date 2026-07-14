<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('nama')->get();

        return view('dashboard', compact('mahasiswa'));
    }
}
