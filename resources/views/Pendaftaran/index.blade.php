@extends('layouts.main')
@section('title', 'Pendaftaran Online - Harapan Kesehatan Indonesia 3')

@section('content')
<section class="py-5 text-center" style="background: linear-gradient(to right, #00aaff, #007bff); color: white;">
  <div class="container">
    <h1 class="fw-bold">Pendaftaran Online</h1>
    <p>Isi formulir berikut untuk mendaftar sebagai calon siswa Harapan Kesehatan Indonesia 3.</p>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="text-center mb-4 fw-bold text-primary">Formulir Calon Siswa Baru</h4>
            
            <form action="{{ route('pendaftaran.store') }}" method="POST">
              @csrf
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Nama Lengkap</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama lengkap">
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">NISN</label>
                  <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukkan NISN">
                  @error('nisn') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Email</label>
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@gmail.com">
                  @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">No. HP</label>
                  <input type="text" name="no_hp" value="{{ old('no_hp') }}" class="form-control @error('no_hp') is-invalid @enderror" placeholder="08xxxxxxxxxx">
                  @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Jurusan Pilihan</label>
                  <select name="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Keperawatan" {{ old('jurusan') == 'Keperawatan' ? 'selected' : '' }}>Keperawatan</option>
                    <option value="Farmasi" {{ old('jurusan') == 'Farmasi' ? 'selected' : '' }}>Farmasi</option>
                    <option value="Analis Kesehatan" {{ old('jurusan') == 'Analis Kesehatan' ? 'selected' : '' }}>Analis Kesehatan</option>
                  </select>
                  @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Asal Sekolah</label>
                  <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="SMP asal">
                  @error('asal_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Alamat Lengkap</label>
                  <textarea name="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                  @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-12 text-center mt-4">
                  <button type="submit" class="btn btn-primary px-5 py-2 rounded-3 fw-semibold">Kirim Pendaftaran</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
