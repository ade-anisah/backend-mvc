<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswa = [
            ['nim' => '12345', 'nama' => 'Andi', 'jurusan' => 'Teknik Informatika'],
            ['nim' => '12346', 'nama' => 'Budi', 'jurusan' => 'Sistem Informasi'],
            ['nim' => '12347', 'nama' => 'Citra', 'jurusan' => 'Teknik Komputer'],
        ];

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    // Menampilkan detail mahasiswa berdasarkan NIM
    public function show(string $nim)
    {
        return "Detail mahasiswa dengan NIM: {$nim}";
    }

    // Menampilkan form
    public function create()
    {
        return view('mahasiswa.create');
    }
}