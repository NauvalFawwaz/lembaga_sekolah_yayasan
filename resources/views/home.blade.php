@extends('layouts.main')

@section('title', 'Beranda - Harapan Kesehatan Indonesia 3')

@section('content')
  <!-- Hero / Banner -->
  <section class="hero py-5 text-center text-white" style="background: linear-gradient(to right, #0056b3, #007bff);">
    <div class="container">
      <h1 class="fw-bold">Selamat Datang di SMK Harapan Kesehatan Indonesia 3</h1>
      <p>Sekolah unggulan bidang kesehatan dengan semangat profesional dan berkarakter.</p>
    </div>
  </section>

  <!-- Visi & Misi -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4 text-primary">Visi & Misi</h2>
      <div class="row">
        <div class="col-md-6">
          <h4>Visi</h4>
          <p>Membangun dan mengembangkan insan cendekia tenaga kesehatan yang memiliki wawasan masa depan dan menjunjung tinggi etika profesi serta ikut serta meningkatkan derajat kesehatan berlandaskan ketakwaan kepada Tuhan Yang Maha Esa.</p>
        </div>
        <div class="col-md-6">
          <h4>Misi</h4>
          <ul>
            <li>Mendidik calon tenaga kesehatan secara profesional, mandiri dan berkelanjutan.</li>
            <li>Memiliki keterampilan yang memadai secara teknis.</li>
            <li>Mengembangkan etika analis dan integritas moral sesuai dengan tuntutan dan kebutuhan masyarakat di bidang kesehatan.</li>
            <li>Mengembangkan dan mengoptimalkan sarana dan prasarana agar terbentuk kompetensi dasar yang kuat</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Profil Singkat -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center text-primary mb-4">Profil Singkat Sekolah</h2>
      <p class="text-center">
        Harapan Kesehatan Indonesia 3 adalah lembaga pendidikan yang berfokus pada pengembangan kompetensi siswa di bidang kesehatan,
        seperti keperawatan, farmasi, dan analis kesehatan. Dengan tenaga pendidik berpengalaman, kami berkomitmen mencetak lulusan yang siap kerja dan beretika tinggi.
      </p>
    </div>
  </section>

  <!-- Statistik -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center text-primary mb-5">Statistik Sekolah</h2>
      <div class="row g-4">
        <div class="col-md-3"><div class="stat-box bg-white rounded shadow p-4 text-center"><h3>350+</h3><p>Siswa Aktif</p></div></div>
        <div class="col-md-3"><div class="stat-box bg-white rounded shadow p-4 text-center"><h3>45</h3><p>Guru & Staff</p></div></div>
        <div class="col-md-3"><div class="stat-box bg-white rounded shadow p-4 text-center"><h3>3</h3><p>Jurusan</p></div></div>
        <div class="col-md-3"><div class="stat-box bg-white rounded shadow p-4 text-center"><h3>25+</h3><p>Prestasi</p></div></div>
      </div>
    </div>
  </section>

    <!-- Berita Terbaru -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center text-primary mb-5">Berita Terbaru</h2>

      <div class="row g-4">
        <!-- Contoh Card Berita -->
        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="" class="card-img-top" alt="Berita 1">
            <div class="card-body">
              <h5 class="card-title">Kegiatan Bakti Sosial di Puskesmas</h5>
              <p class="card-text text-muted">Siswa jurusan Keperawatan HKI 3 mengadakan kegiatan bakti sosial di Puskesmas sekitar sebagai bentuk pengabdian masyarakat.</p>
              <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="" class="card-img-top" alt="Berita 2">
            <div class="card-body">
              <h5 class="card-title">Pelatihan Farmasi Modern</h5>
              <p class="card-text text-muted">Jurusan Farmasi HKI 3 mengikuti pelatihan teknologi obat terbaru yang diselenggarakan oleh Kemenkes.</p>
              <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="" class="card-img-top" alt="Berita 3">
            <div class="card-body">
              <h5 class="card-title">Prestasi Siswa di Olimpiade Kesehatan</h5>
              <p class="card-text text-muted">Tim HKI 3 berhasil meraih juara 1 dalam Olimpiade Kesehatan Nasional tingkat SMA/SMK se-Indonesia.</p>
              <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
