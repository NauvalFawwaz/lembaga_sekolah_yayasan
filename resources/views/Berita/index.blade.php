@extends('layouts.main')

@section('title', 'Berita Sekolah')

@section('content')
<div class="container py-5">
  <h2 class="text-center mb-4 text-primary">Berita & Pengumuman</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="{{ asset('images/berita1.jpg') }}" class="card-img-top" alt="Berita">
        <div class="card-body">
          <h5 class="card-title">Kegiatan Donor Darah</h5>
          <p class="card-text">SMK Harapan Kesehatan Indonesia 3 mengadakan kegiatan donor darah rutin...</p>
          <a href="{{ route('berita.show', 1) }}" class="btn btn-outline-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
