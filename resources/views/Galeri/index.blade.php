@extends('layouts.main')
@section('title', 'Galeri - Harapan Kesehatan Indonesia 3')

@section('content')
<section class="py-5 text-center" style="background: linear-gradient(to right, #007bff, #00aaff); color: white;">
  <div class="container">
    <h1 class="fw-bold">Galeri Sekolah</h1>
    <p>Kumpulan foto kegiatan, prestasi, dan suasana belajar di Harapan Kesehatan Indonesia 3.</p>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      @foreach($galeri as $item)
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
          <img src="{{ asset('images/'.$item['gambar']) }}" class="card-img-top" alt="{{ $item['judul'] }}">
          <div class="card-body text-center">
            <h5 class="fw-semibold text-primary">{{ $item['judul'] }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
