<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        // Data jurusan (sementara hardcoded, nanti bisa dari DB)
        $programs = [
            [
                'slug' => 'keperawatan',
                'nama' => 'Jurusan Keperawatan',
                'deskripsi' => 'Membentuk tenaga perawat profesional yang berkompeten dan beretika.',
                'gambar' => 'keperawatan.jpg'
            ],
            [
                'slug' => 'farmasi',
                'nama' => 'Jurusan Farmasi',
                'deskripsi' => 'Mempelajari cara meracik, mengelola, dan memahami obat secara ilmiah.',
                'gambar' => 'farmasi.jpg'
            ],
            [
                'slug' => 'analis-kesehatan',
                'nama' => 'Jurusan Analis Kesehatan',
                'deskripsi' => 'Fokus pada analisis laboratorium dan pemeriksaan medis.',
                'gambar' => 'analis.jpg'
            ],
        ];

        return view('program.index', compact('programs'));
    }

    public function show($slug)
    {
        $details = [
            'keperawatan' => [
                'judul' => 'Jurusan Keperawatan',
                'deskripsi' => 'Program keperawatan berfokus pada pembentukan tenaga kesehatan profesional yang memiliki kompetensi dalam memberikan asuhan keperawatan kepada pasien secara holistik, etis, dan berlandaskan ilmu pengetahuan modern.',
                'gambar' => 'keperawatan.jpg'
            ],
            'farmasi' => [
                'judul' => 'Jurusan Farmasi',
                'deskripsi' => 'Program ini mengajarkan siswa untuk memahami dasar-dasar ilmu farmasi, pembuatan dan pengelolaan obat, serta etika profesi farmasis dalam pelayanan kesehatan.',
                'gambar' => 'farmasi.jpg'
            ],
            'analis-kesehatan' => [
                'judul' => 'Jurusan Analis Kesehatan',
                'deskripsi' => 'Jurusan ini mendidik siswa menjadi tenaga ahli laboratorium yang mampu melakukan pemeriksaan biologis, kimia, dan medis dengan ketelitian tinggi.',
                'gambar' => 'analis.jpg'
            ],
        ];

        if (!isset($details[$slug])) {
            abort(404);
        }

        $program = $details[$slug];
        return view('program.detail', compact('program'));
    }
}
