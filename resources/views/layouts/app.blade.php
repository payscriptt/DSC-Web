<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Developer Student Clubs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    background: linear-gradient(to right, #f5f7fa, #e4e8f0);
    font-family: 'Open Sans', sans-serif;
}

.hero {
    padding: 100px 0;
    text-align: center;
}

.card-custom {
    border-radius: 20px;
    padding: 30px;
}

.navbar {
    background-color: #fff;
    padding: 15px 0;
    border-bottom: 1px solid #f1f1f1;
}

.navbar-brand img {
    height: 40px;
    /* Sesuaikan tinggi logo */
    margin-right: 10px;
}

.brand-text {
    color: #5f6368;
    font-weight: 600;
    font-size: 20px;
    line-height: 1.2;
}

.sub-brand-text {
    display: block;
    font-size: 12px;
    color: #70757a;
    font-weight: 400;
}

.nav-link {
    color: #5f6368 !important;
    font-weight: 500;
    margin-right: 15px;
}

.nav-link.active {
    color: #4285f4 !important;
    /* Biru khas Google */
}

.btn-join {
    background-color: #4285f4;
    color: white;
    border-radius: 8px;
    padding: 8px 24px;
    font-weight: 600;
    border: none;
    transition: 0.3s;
}

.btn-join:hover {
    background-color: #3367d6;
    color: white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}

  /* Style Dasar */
  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border: 2px solid black; 
    border-radius: 50%;
    font-size: 24px;
    color: black;
    text-decoration: none;
    transition: all 0.3s ease; /* Membuat transisi warna jadi halus */
    margin-right: 10px;
  }

  /* Efek Hover LinkedIn (Biru) */
  .linkedin:hover {
    border-color: #0077b5;
    color: #0077b5;
    background-color: rgba(0, 119, 181, 0.1); /* Opsional: background biru transparan */
  }

  /* Efek Hover Instagram (Pink) */
  .instagram:hover {
    border-color: #e4405f;
    color: #e4405f;
    background-color: rgba(228, 64, 95, 0.1); /* Opsional: background pink transparan */
  }

  .instagram .png-logo {
        display: block;
        width: 28px; / Ukuran gambar PNG. Sedikit lebih besar dari font-size agar proporsional /
        height: 28px;
        object-fit: contain; / Memastikan gambar tidak gepeng /
        / Opsional: Jika PNG aslinya berwarna hitam, kita bisa ubah jadi pink saat hover menggunakan CSS filter */
        transition: filter 0.3s ease;
    }

    .linkedin .png-logo {
        display: block;
        width: 28px; / Ukuran gambar PNG. Sedikit lebih besar dari font-size agar proporsional /
        height: 28px;
        object-fit: contain; / Memastikan gambar tidak gepeng /
        / Opsional: Jika PNG aslinya berwarna hitam, kita bisa ubah jadi pink saat hover menggunakan CSS filter */
        transition: filter 0.3s ease;
    }

    /* Container utama kartu */
.card {
  width: 300px;
  padding: 25px;
  border-radius: 20px;
  background-color: #fff1f1; /* Warna pink muda awal */
  border: 1px solid #ffdbdb;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Efek membal */
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

/* Kotak Ikon */
.icon-box {
  width: 45px;
  height: 45px;
  background: white;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 40px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
  transition: transform 0.3s ease;
}

/* Angka dan Label */
.number {
  font-size: 32px;
  color: #d32f2f; /* Warna merah */
  margin: 0;
  transition: color 0.3s ease;
}

.label {
  color: #d32f2f;
  font-weight: 500;
  margin: 5px 0 0 0;
  transition: color 0.3s ease;
}

/* --- EFEK SAAT TERTOUCH / HOVER --- */

.card:hover {
  background-color: #e57373; /* Warna merah saat aktif */
  transform: translateY(-5px); /* Kartu sedikit naik */
}

/* Mengubah warna teks menjadi putih saat hover */
.card:hover .number,
.card:hover .label {
  color: white;
}

/* Menggerakkan ikon saat hover */
.card:hover .icon-box {
  transform: scale(1.1);
}

    
  </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<!-- 🔝 Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://www.gstatic.com/devrel-devsite/prod/v7733230a47321e06466f28681190479708688439df606992d9d1502f61e46955/developers/images/touchicon-180.png" alt="Logo">
            <div>
                <span class="brand-text">Developer Student Clubs</span>
                <span class="sub-brand-text">Universitas Muhammadiyah Prof. DR. HAMKA</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @php
                    $active = 'nav-link active';
                    $inactive = 'nav-link';
                @endphp
                <li class="nav-item">
                    <a  href="{{ route('home') }}" class="{{ request()->routeIs('home') ? $active : $inactive }}">Home</a>
                </li>
                <li class="nav-item">
                    <a  href="{{ route('events') }}" class="{{ request()->routeIs('events') ? $active : $inactive }}">Events</a>
                </li>
                <li class="nav-item">
                    <a  href="{{ route('team') }}" class="{{ request()->routeIs('team') ? $active : $inactive }}">Team</a>
                </li>
                <li class="nav-item">
                    <a  href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? $active : $inactive }}">FAQ</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-join" href="https://discord.com/invite/ew8JcEjr6D">Join Community</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>