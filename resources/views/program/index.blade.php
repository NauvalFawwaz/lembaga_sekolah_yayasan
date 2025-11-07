@extends('layouts.main')

@section('title', 'Program Keahlian - Harapan Kesehatan Indonesia 3')

@section('content')
<section class="hero text-white text-center py-5" style="background: linear-gradient(to right, #0056b3, #007bff);">
  <div class="container">
    <h1 class="fw-bold">Program Keahlian</h1>
    <p>Jurusan unggulan di bidang kesehatan untuk masa depan yang profesional</p>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      @foreach($programs as $program)
      <div class="col-md-4">
        <div class="card shadow border-0 h-100">
          <img src="{{ asset('images/'.$program['gambar']) }}" class="card-img-top" alt="{{ $program['nama'] }}">
          <div class="card-body">
            <h5 class="card-title text-primary">{{ $program['nama'] }}</h5>
            <p class="card-text">{{ $program['deskripsi'] }}</p>
            <a href="{{ url('/program/'.$program['slug']) }}" class="btn btn-primary w-100 mt-2">Lihat Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
