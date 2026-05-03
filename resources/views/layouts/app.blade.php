<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Developer Student Clubs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body class="bg-white">

<!-- 🔝 Navbar -->
<nav class="navbar navbar-expand-lg sticky-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/Logo-Uhamka-HD.png') }}" alt="Logo1">
            <img src="{{asset ('images/Logo-Dsc-Uhamka-HD.png')}}" alt="Logo2">
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
           <img src="{{ asset('images/Logo-Uhamka-HD.png') }}" alt="Uhamka" class="me-2" style="height: 40px";>
            <img src="{{asset ('images/Logo-Dsc-Uhamka-HD.png')}}" alt="GDSC" style="height: 40px;">
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
          <li class="mb-2"><a href="https://www.linkedin.com/company/dsc-uhamka" class="text-dark fw-bold text-decoration-none">LinkedIn</a></li>
          <li class="mb-2"><a href="#" class="text-dark fw-bold text-decoration-none">GitHub</a></li>
          <li class="mb-2"><a href="https://www.instagram.com/dsc.uhamka?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-dark fw-bold text-decoration-none">Instagram</a></li>
          <li class="mb-2"><a href="https://discord.com/invite/ew8JcEjr6D" class="text-dark fw-bold text-decoration-none">Discord</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom mt-5">
    <div class="container">
        <div class="row py-3 align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 copyright-text">© 2026 All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <img src="{{ asset('images/Linkedin.svg') }}" class="Linkedin-foot" alt="Linkedin">
                <img src="{{ asset('images/Github.svg') }}" class="Github-foot" alt="Github">
                <img src="{{ asset('images/Discord.svg') }}" class="Discord-foot" alt="Discord">
            </div>
        </div>
    </div>
</div>
  </div>
</footer>

</body>
</html>