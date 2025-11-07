<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = [
            [
                'judul' => 'Kegiatan Donor Darah Sekolah',
                'slug' => 'kegiatan-donor-darah-sekolah',
                'gambar' => 'donor.jpg',
                'tanggal' => '2025-11-04',
                'deskripsi' => 'Sekolah Harapan Kesehatan Indonesia 3 mengadakan kegiatan donor darah bekerja sama dengan PMI...',
            ],
            [
                'judul' => 'Lomba Kebersihan Antar Kelas',
                'slug' => 'lomba-kebersihan-antar-kelas',
                'gambar' => 'kebersihan.jpg',
                'tanggal' => '2025-11-01',
                'deskripsi' => 'Dalam rangka memperingati Hari Lingkungan Hidup, diadakan lomba kebersihan antar kelas...',
            ],
        ];

        return view('Berita.index', compact('berita'));
    }

    public function show($slug)
    {
        $berita = [
            'kegiatan-donor-darah-sekolah' => [
                'judul' => 'Kegiatan Donor Darah Sekolah',
                'gambar' => 'donor.jpg',
                'tanggal' => '2025-11-04',
                'isi' => 'Sekolah Harapan Kesehatan Indonesia 3 bersama PMI menggelar kegiatan donor darah untuk meningkatkan kesadaran pentingnya berbagi dan menjaga kesehatan masyarakat.'
            ],
            'lomba-kebersihan-antar-kelas' => [
                'judul' => 'Lomba Kebersihan Antar Kelas',
                'gambar' => 'kebersihan.jpg',
                'tanggal' => '2025-11-01',
                'isi' => 'Dalam rangka Hari Lingkungan Hidup, sekolah mengadakan lomba kebersihan antar kelas dengan penilaian kebersihan, kerapian, dan kreativitas dekorasi.'
            ]
        ];

        if (!isset($berita[$slug])) {
            abort(404);
        }

        return view('Berita.show', ['berita' => $berita[$slug]]);
    }
}
