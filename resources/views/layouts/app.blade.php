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
    min-height: 100vh;
    
}

.card-custom {
    border-radius: 20px;
    padding: 30px;
}

    /* ----------------- NAVBAR ----------------- */
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

        /* Default (belum scroll) */
        #navbar {
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.9); /* bisa kamu ubah */
        }

        /* Saat scroll */
        #navbar.scrolled {
        background-color: transparent;
        box-shadow: none;
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

    /* -----------------CONTAINER ACTIVE MEMBER, EVENTS HELD DAN ESTABLISHED----------------- */
        .card {
    width: 300px;
    padding: 25px;
    border-radius: 20px;
    background-color: var(--bg-light);
    border: 1px solid var(--border-color);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    position: relative;
    overflow: hidden;
    }

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

    .number {
    font-size: 32px;
    color: var(--main-color-card);
    margin: 0;
    transition: color 0.3s ease;
    }

    .label {
    color: var(--main-color-card);
    font-weight: 500;
    margin: 5px 0 0 0;
    transition: color 0.3s ease;
    }

    /* Hover */
    .card:hover {
    background-color: var(--main-color-card);
    transform: translateY(-5px);
    }

    .card:hover .number,
    .card:hover .label {
    color: white;
    }

    .card:hover .icon-box {
    transform: scale(1.1);
    }

        /* 🔴 MERAH */
    .card-red {
    --main-color-card: #d32f2f;
    --bg-light: #fff1f1;
    --border-color: #ffdbdb;
    }

    /* 🟢 HIJAU */
    .card-green {
    --main-color-card: #4cb04f;
    --bg-light: #f1fff3;
    --border-color: #c8e6c9;
    }

    /* 🟡 KUNING */
    .card-yellow {
    --main-color-card: #ffc108;
    --bg-light: #fffde7;
    --border-color: #fff9c4;
    }


/* --- EFEK SAAT TERTOUCH / HOVER --- */


/* Mengubah warna teks menjadi putih saat hover */
.card:hover .number,
.card:hover .label {
  color: white;
}

/* Menggerakkan ikon saat hover */
.card:hover .icon-box {
  transform: scale(1.1);
}

/* CSS untuk Background Grid */
.hero1 {
  background-image: url('instagram.png');
  background-size: cover;
  position: relative;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}

.overlay1 {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0, 0, 0, 0.6); /* Gelapkan background */
}

.content {
  z-index: 1; /* Pastikan teks di atas overlay */
}

/* -----------------MEET OUR TEAM----------------- */
    /* Pengaturan Dasar */


.team-header h1 {
    font-size: 42px;
    margin-bottom: 10px;
}

.team-header p {
    color: #666;
    max-width: 700px;
    margin: 0 auto 50px;
    line-height: 1.6;
}

/* Container Anggota */
.team-container {
    display: flex;
    justify-content: center;
    align-items: flex-end; /* Supaya bagian bawah sejajar */
    gap: 15px;
    flex-wrap: wrap;
}

/* Kartu Anggota */
.member-card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 220px;
}

/* Membuat Balon Teks (Speech Bubble) */
.speech-bubble {
    background: #fff;
    border-radius: 15px;
    padding: 10px 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    position: relative;
    z-index: 2;
}

/* Segitiga di bawah Balon Teks */
.speech-bubble::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 8px solid #fff;
}

.speech-bubble strong {
    display: block;
    font-size: 14px;
}

.speech-bubble span {
    font-size: 12px;
    color: #888;
}

/* Foto Lingkaran */
.photo-circle {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #fff;
}

.photo-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Variasi Warna Background Foto (sesuai gambar) */
.purple-bg { background-color: #9b59b6; }
.grey-bg { background-color: #bdc3c7; }
.red-bg { background-color: #e74c3c; }
.dark-red-bg { background-color: #7b0000; }

/* Highlight untuk Leader agar lebih besar sedikit */
.member-card.leader .photo-circle {
    width: 300px;
    height: 300px;
    z-index: 10;
}

/* -----------------STYLING KARTU UPCOMING ACTIVITIES--------------------------------------- */
/* Styling Kartu */
.custom-card {
    border-radius: 20px !important;
    overflow: hidden; /* Penting: agar gambar yang membesar tidak keluar jalur */
    border: 1px solid #e0e0e0 !important;
    transition: box-shadow 0.3s ease;
    padding: 10px;
    margin: 10px;
}

.custom-card:hover {
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Container Gambar */
.img-wrapper {
    overflow: hidden; /* Mengunci gambar di dalam box */
    height: 200px;    /* Sesuaikan tinggi gambar */
    margin: 10px;     /* Memberikan jarak putih di pinggir seperti desain kamu */
    border-radius: 15px;
}

/* Animasi Gambar */
.img-wrapper img {
    transition: transform 0.5s ease; /* Durasi animasi pembesaran */
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Saat Kartu di-hover, Gambar membesar */
.custom-card:hover .img-wrapper img {
    transform: scale(1.1); /* Gambar membesar 10% */
}

.footer-section {
  background-color: #f8f9fa; /* Warna background sedikit keabu-abuan */
  font-family: 'Google Sans', sans-serif;
}

.footer-section h4 {
  font-size: 1.5rem;
  letter-spacing: -0.5px;
}

.footer-section p {
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Hover effect untuk link sosial */
.footer-section ul li a:hover {
  color: #4285f4 !important; /* Biru Google */
}

.footer-section .border-top {
  border-color: rgba(0,0,0,0.05) !important;
}

/* Untuk ikon di bawah (pastikan pakai Bootstrap Icons) */
.footer-section .bi {
  color: #adb5bd;
  transition: color 0.3s;
}

.footer-section .bi:hover {
  color: #212529;
}

    
  </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<!-- 🔝 Navbar -->
<nav class="navbar navbar-expand-lg sticky-top" id="navbar">
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

<footer class="footer-section pt-5 pb-3">
  <div class="container">
    <hr class="mb-5 text-muted opacity-25">

    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="d-flex align-items-center mb-3">
          <img src="logo-uhamka.png" alt="Uhamka" class="me-2" style="height: 40px;">
          <img src="logo-gdsc.png" alt="GDSC" style="height: 40px;">
        </div>
        <h4 class="fw-bold text-secondary mb-1">Developer Student Clubs</h4>
        <p class="text-muted small mb-3">Universitas Muhammadiyah Prof. Dr. HAMKA</p>
        <p class="text-muted w-75">
          Empowering students to bridge the gap between theory and practice through 
          technology. Part of the global Google Developers network.
        </p>
        <p class="mt-4"><a href="mailto:gdscuhamka@gmail.com" class="text-decoration-none text-muted">gdscuhamka@gmail.com</a></p>
      </div>

      <div class="col-lg-4 text-lg-end">
        <p class="text-muted small mb-3">Social</p>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-dark fw-bold text-decoration-none">LinkedIn</a></li>
          <li class="mb-2"><a href="#" class="text-dark fw-bold text-decoration-none">GitHub</a></li>
          <li class="mb-2"><a href="#" class="text-dark fw-bold text-decoration-none">Instagram</a></li>
          <li class="mb-2"><a href="#" class="text-dark fw-bold text-decoration-none">Discord</a></li>
        </ul>
      </div>
    </div>

    <div class="row mt-5 pt-4 border-top align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <p class="text-muted small mb-0">© 2026 All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
        <a href="#" class="text-muted me-3 fs-5"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-muted me-3 fs-5"><i class="bi bi-github"></i></a>
        <a href="#" class="text-muted fs-5"><i class="bi bi-discord"></i></a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>