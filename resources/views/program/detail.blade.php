@extends('layouts.main')

@section('title', $program['judul'].' - Harapan Kesehatan Indonesia 3')

@section('content')
<section class="hero text-white text-center py-5" style="background: linear-gradient(to right, #007bff, #00aaff);">
  <div class="container">
    <h1 class="fw-bold">{{ $program['judul'] }}</h1>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ asset('images/'.$program['gambar']) }}" alt="{{ $program['judul'] }}" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <h3 class="text-primary mb-3">Tentang Jurusan</h3>
        <p>{{ $program['deskripsi'] }}</p>
        <ul class="mt-3">
          <li>Praktik laboratorium kesehatan</li>
          <li>Kerjasama dengan instansi medis dan rumah sakit</li>
          <li>Program magang profesional</li>
          <li>Sertifikasi kompetensi nasional</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container text-center">
    <h3 class="text-primary mb-4">Kenapa Memilih Jurusan Ini?</h3>
    <p class="lead">
      Program {{ strtolower($program['judul']) }} memberikan peluang besar bagi siswa untuk terjun langsung ke dunia kerja di bidang kesehatan dengan bekal keterampilan, etika, dan pengetahuan yang komprehensif.
    </p>
  </div>
</section>
@endsection
