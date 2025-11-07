<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = [
            ['judul' => 'Kegiatan Praktikum Keperawatan', 'gambar' => 'galeri1.jpg'],
            ['judul' => 'Upacara Hari Kesehatan Nasional', 'gambar' => 'galeri2.jpg'],
            ['judul' => 'Lomba Cerdas Cermat Farmasi', 'gambar' => 'galeri3.jpg'],
            ['judul' => 'Pelatihan Laboratorium Analis', 'gambar' => 'galeri4.jpg'],
            ['judul' => 'Sosialisasi Kesehatan di Masyarakat', 'gambar' => 'galeri5.jpg'],
            ['judul' => 'Kegiatan Donor Darah', 'gambar' => 'galeri6.jpg'],
        ];

        return view('Galeri.index', compact('galeri'));
    }
}
