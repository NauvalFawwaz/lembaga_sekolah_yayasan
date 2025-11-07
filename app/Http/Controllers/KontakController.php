<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('Kontak.index');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:500',
        ]);

        // nanti bisa dikirim ke email / disimpan ke DB
        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menanggapinya.');
    }
}
