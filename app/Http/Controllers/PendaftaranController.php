<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('Pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nisn' => 'required|numeric',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'jurusan' => 'required',
            'alamat' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:150',
        ]);

        // nanti bagian ini akan disambungkan ke database
        return back()->with('success', 'Pendaftaran berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
