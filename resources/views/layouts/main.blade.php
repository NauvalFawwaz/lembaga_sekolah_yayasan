<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        nav.navbar {
            background-color: #007bff;
        }

        nav.navbar a.nav-link,
        nav.navbar .navbar-brand {
            color: white !important;
        }

        nav.navbar a.nav-link:hover {
            color: #ffeb3b !important;
        }

        footer {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
        }

        .stat-box h3 {
            color: #007bff;
            font-weight: 700;
        }
    </style>
</head>
<body>

    {{-- 🔹 Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">SMK Harapan Kesehatan Indonesia 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/program">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pendaftaran">Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- 🔹 Konten utama --}}
    <main>
        @yield('content')
    </main>

    {{-- 🔹 Footer --}}
<footer class="text-center text-white pt-5" style="background-color: #0056b3;">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Harapan Kesehatan Indonesia 3</h5>
        <p>Menjadi lembaga pendidikan kesehatan unggul, berkarakter, dan berdaya saing global.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Kontak Kami</h5>
        <p>Jln, Anggaran RT.002/003 KEC. Karang tengah, Kota Tangerang, Provinsi Banten 15157</p>
        <p>📞 0856-9272-0278</p>
        <p>✉️ smkkesehatan811@gmail.com</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Ikuti Kami</h5>
        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-youtube fs-4"></i></a>
        <a href="#" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
      </div>
    </div>
    <hr class="border-light">
    <p class="mb-0 pb-3">© 2025 Harapan Kesehatan Indonesia 3. All Rights Reserved.</p>
  </div>
</footer>

<!-- Bootstrap & Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
