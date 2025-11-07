@extends('layouts.main')

@section('title', 'Tentang Kami - Harapan Kesehatan Indonesia 3')

@section('content')
<!-- Hero Section -->
<section class="hero-about text-white text-center py-5" style="background: linear-gradient(to right, #0066cc, #0099ff);">
  <div class="container">
    <h1 class="fw-bold">Tentang Kami</h1>
    <p>Kenali lebih dekat Sekolah Harapan Kesehatan Indonesia 3</p>
  </div>
</section>

<!-- Profil Sekolah -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">Profil Sekolah</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ asset('images/sekolah.jpg') }}" alt="Profil Sekolah" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <p>
          <strong>Harapan Kesehatan Indonesia 3</strong> adalah lembaga pendidikan menengah kejuruan
          yang berfokus pada bidang kesehatan. Sekolah ini memiliki tujuan untuk mencetak lulusan
          yang tidak hanya cerdas secara akademis, tetapi juga memiliki karakter, empati, dan
          profesionalisme tinggi di dunia kerja.
        </p>
        <p>
          Kami terus berinovasi untuk memberikan pendidikan terbaik dengan fasilitas lengkap,
          tenaga pendidik berkualitas, serta lingkungan belajar yang nyaman dan aman bagi siswa.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sejarah Sekolah -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center text-primary mb-4">Sejarah Sekolah</h2>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <p>
          Didirikan pada tahun <strong>2010</strong>, Sekolah Harapan Kesehatan Indonesia 3 berawal dari
          cita-cita untuk mencetak tenaga kerja profesional di bidang kesehatan. Berawal dari hanya
          satu jurusan keperawatan, kini sekolah ini memiliki beberapa program unggulan seperti
          <em>Farmasi, Analis Kesehatan, dan Rekam Medis</em>.
        </p>
        <p>
          Selama lebih dari satu dekade, sekolah kami telah melahirkan ratusan alumni yang telah
          berkontribusi di berbagai rumah sakit, klinik, dan instansi kesehatan di seluruh Indonesia.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Fasilitas Sekolah -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center text-primary mb-5">Fasilitas Sekolah</h2>
    <div class="row g-4 text-center">
      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow-sm">
          <h1>🧪</h1>
          <h5>Laboratorium Kesehatan</h5>
          <p>Fasilitas praktik lengkap sesuai standar industri.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow-sm">
          <h1>📚</h1>
          <h5>Perpustakaan Modern</h5>
          <p>Koleksi buku medis dan jurnal kesehatan lengkap.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow-sm">
          <h1>🏫</h1>
          <h5>Ruang Kelas Nyaman</h5>
          <p>Lingkungan belajar kondusif dan ber-AC.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow-sm">
          <h1>💉</h1>
          <h5>Klinik Mini</h5>
          <p>Tempat praktik simulasi pelayanan kesehatan.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Struktur Organisasi -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2 class="text-primary mb-5">Struktur Organisasi</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
          <img src="{{ asset('images/kepala-sekolah.jpg') }}" class="card-img-top" alt="Kepala Sekolah">
          <div class="card-body">
            <h5 class="card-title mb-0">dr. Hj. Sri Wahyuni, M.Kes</h5>
            <p class="text-muted">Kepala Sekolah</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
          <img src="{{ asset('images/waka-kurikulum.jpg') }}" class="card-img-top" alt="Waka Kurikulum">
          <div class="card-body">
            <h5 class="card-title mb-0">Ibu Rina Marlina, S.Pd</h5>
            <p class="text-muted">Waka Kurikulum</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
          <img src="{{ asset('images/waka-kesiswaan.jpg') }}" class="card-img-top" alt="Waka Kesiswaan">
          <div class="card-body">
            <h5 class="card-title mb-0">Bapak Fajar Hidayat, S.Kep</h5>
            <p class="text-muted">Waka Kesiswaan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
