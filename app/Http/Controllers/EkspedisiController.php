<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekspedisi;

class EkspedisiController extends Controller
{
    // Menampilkan form dan daftar ekspedisi
    public function create()
    {
        $ekspedisis = Ekspedisi::all();
        return view('ekspedisi.create', compact('ekspedisis'));
    }

    // Menyimpan ekspedisi baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        // Simpan data ekspedisi ke database
        Ekspedisi::create([
            'nama' => $request->nama,
        ]);

        // Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->route('createEkspedisi')->with('success', 'Ekspedisi berhasil ditambahkan.');

    }
}

