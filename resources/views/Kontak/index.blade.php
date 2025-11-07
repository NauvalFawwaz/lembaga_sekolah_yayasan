@extends('layouts.main')
@section('title', 'Kontak & Lokasi - Harapan Kesehatan Indonesia 3')

@section('content')
<section class="py-5 text-center" style="background: linear-gradient(to right, #1E3A8A, #2563EB); color: white;">
  <div class="container">
    <h1 class="fw-bold">Kontak & Lokasi Sekolah</h1>
    <p>Hubungi kami atau kunjungi lokasi sekolah untuk informasi lebih lanjut.</p>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-5">
      <!-- Form Kontak -->
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="fw-bold text-primary mb-4 text-center">Hubungi Kami</h4>

            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            @endif

            <form action="{{ route('kontak.kirim') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama anda" value="{{ old('nama') }}">
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@gmail.com" value="{{ old('email') }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Pesan</label>
                <textarea name="pesan" rows="4" class="form-control @error('pesan') is-invalid @enderror" placeholder="Tulis pesan anda">{{ old('pesan') }}</textarea>
                @error('pesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 fw-semibold">Kirim Pesan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Lokasi Sekolah -->
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <div class="card-body p-0">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.299524168527!2d106.7008484!3d-6.2287922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb3f97170ed5%3A0x5eeadbff484bc217!2sSMK%20KESEHATAN%20HARAPAN%20INDONESIA%203!5e0!3m2!1sid!2sid!4v1700000000000"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>
        </div>

        <div class="mt-4 text-center">
          <h5 class="fw-bold text-primary mb-2">Alamat Sekolah</h5>
          <p class="mb-1"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Jln, Anggaran RT.002/003 KEC. Karang tengah, Kota Tangerang, Provinsi Banten 15157</p>
          <p class="mb-1"><i class="bi bi-telephone-fill text-success me-2"></i>0856 9272 0278</p>
          <p><i class="bi bi-envelope-fill text-warning me-2"></i>smkkesehatan811@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
