@extends('layouts.app')

@section('content')
    <!-- 🚀 Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold">Developer Student Clubs</h1>
        <p class="text-muted">
            Connect, learn, and grow with a community of student developers.
        </p>
        <p class="text-muted" style="margin-bottom: 0.5rem; line-height: 0.01;">
            Bridge the gap between theory and practice.
        </p>

        <!-- Social Icon -->
        <div class="mt-3"> <br>
            <a href="https://www.linkedin.com/company/developer-student-club-uhamka/" class="icon-circle linkedin">
                <img src="{{ asset('images/linkedin.png') }}" alt="Linkedin" class="png-logo">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/dsc.uhamka/" class="icon-circle instagram">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="png-logo">
            <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</section>

<!-- 📊 Statistik -->
<div class="container mb-5">
    <div class="row text-center">

        <<div class="card">
  <div class="icon-box">
    <i class="fas fa-calendar-alt"></i> </div>
  <div class="content">
    <h2 class="number">1+</h2>
    <p class="label">Events Held</p>
  </div>
</div>

        <div class="col-md-4">
            <div class="card card-custom bg-danger-subtle">
                <h3>1+</h3>
                <p>Events Held</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-custom bg-warning-subtle">
                <h3>1</h3>
                <p>Established</p>
            </div>
        </div>

    </div>
</div>
@endsection