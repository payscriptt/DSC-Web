@extends('layouts.app')

@section('content')
    <!-- 🚀 Hero Section -->
<section class="hero"><BR></BR>
    <div class="container"><BR></BR>
        <h1 class="fw-bold">Developer Student Clubs</h1> <BR></BR>
        <p class="text-muted">
            Connect, learn, and grow with a community of student developers.
        </p>
        <p class="text-muted" style="margin-bottom: 0.5rem; line-height: 0.01;">
            Bridge the gap between theory and practice.
        </p> <BR></BR>

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
    </div><BR></BR><BR></BR><BR></BR>

    <!-- 📊 Statistik -->
<div class="container mb-5">
    <div class="row justify-content-center text-center gap-3" center>

        <div class="card card-red">
            <div class="icon-box">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h2 class="number">1+</h2>
                <p class="label">Active Members</p>
            </div>
        </div>

        <div class="card card-green">
            <div class="icon-box">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h2 class="number">1+</h2>
                <p class="label">Events Held</p>
            </div>
        </div>

        <div class="card card-yellow">
            <div class="icon-box">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h3>1+</h3>
                <p>Established</p>
            </div>
        </div>

    </div>
</div>
</section>



<section class="hero1">
  <div class="overlay1"></div>
  <div class="content">
    <h1>Who We Are</h1>
    <p>We are a community-driven group empowering students...</p>
    <div class="buttons">
      <button>Learn</button>
      <button>Connect</button>
      <button>Grow</button>
    </div>
  </div>
</section>

<!-- -----------------MEET OUR TEAM----------------- -->
<section class="hero">
<div class="team-header">
    <h1 class="fw-bold">Meet Our Team</h1>
        <p class="text-muted">
            Get to know the passionate students behind Developer Student Clubs UHAMKA.Get to know the passionate students behind Developer Student Clubs UHAMKA.
        </p>
</div>

<div class="team-container">
    <!-- 1. Leader (Paling Besar) -->
    <div class="member-card ">
        <div class="speech-bubble">
            <strong>Rizky Ramadhan</strong>
            <span>Club Lead</span>
        </div>
        <div class="photo-circle purple-bg">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1a?w=400" alt="Leader">
        </div>
    </div>

    <div class="member-card ">
        <div class="speech-bubble">
            <strong>Budi Santoso</strong>
            <span>Core Team</span>
        </div>
        <div class="photo-circle red-bg">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400" alt="Budi">
        </div>
    </div>
    
    <div class="member-card leader">
        <div class="speech-bubble">
            <strong>Alya Putri</strong>
            <span>Core Team</span>
        </div>
        <div class="photo-circle grey-bg">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400" alt="Alya">
        </div>
    </div>

    <div class="member-card" style="z-index: 5">
        <div class="speech-bubble">
            <strong>Citra Lestari</strong>
            <span>Core Team</span>
        </div>
        <div class="photo-circle dark-red-bg">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400" alt="Citra">
        </div>
    </div>

    <div class="member-card" style="z-index: 1">
        <div class="speech-bubble">
            <strong>Budi Santoso</strong>
            <span>Core Team</span>
        </div>
        <div class="photo-circle red-bg">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400" alt="Budi">
        </div>
    </div>
</div>
</section>

<section class="container my-5">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
            <img src="pixels.png" class="img-fluid" alt="The Pixels">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Pixels</h2>
            <hr class="my-3">
            <p class="lead text-muted">A home for visual visionaries. Here, we learn to translate complex ideas into intuitive interfaces through UI/UX, Illustration, and 3D Motion, making technology user-friendly.</p>
        </div>
    </div>

    <div class="row align-items-center flex-md-row-reverse mb-5">
        <div class="col-md-6 text-center">
            <img src="vectors.png" class="img-fluid" alt="The Vectors">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Vectors</h2>
            <hr class="my-3">
            <p class="lead text-muted">The coders of the future. The Vectors is the place to delve deeply into software engineering, build scalable applications on web and mobile platforms, and leverage artificial intelligence.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
            <img src="pixels.png" class="img-fluid" alt="The Pixels">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Cypers</h2>
            <hr class="my-3">
            <p class="lead text-muted">Security and connectivity explorers. The Cyphers focus on protecting data from cyberattacks, building robust network architectures, and connecting the physical world to the internet (IoT).</p>
        </div>
    </div>

</section>

<section class="container my-5">
    <h2 class="fw-bold mb-4">Upcoming activities</h2>
    
    <div class="row g-4">
            <div class="card custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Intro to Flutter</h5>
                    <p class="card-text text-muted small">Learn the basics of building cross-platform apps with Google's UI toolkit.</p>
                </div>
                <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center pb-3">
                    <small class="text-muted">Offline at campus FTII Uhamka</small>
                    <a href="#" class="text-primary text-decoration-none ">Register &rarr;</a>
                </div>
            </div>

            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Intro to Flutter</h5>
                    <p class="card-text text-muted small">Learn the basics of building cross-platform apps with Google's UI toolkit.</p>
                </div>
                <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center pb-3">
                    <small class="text-muted">Offline at campus FTII Uhamka</small>
                    <a href="#" class="text-primary text-decoration-none ">Register &rarr;</a>
                </div>
            </div>

            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Intro to Flutter</h5>
                    <p class="card-text text-muted small">Learn the basics of building cross-platform apps with Google's UI toolkit.</p>
                </div>
                <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center pb-3">
                    <small class="text-muted">Offline at campus FTII Uhamka</small>
                    <a href="#" class="text-primary text-decoration-none ">Register &rarr;</a>
                </div>
            </div>

    </div>


<div class="team-header"> <br>
    <h1 class="fw-bold" style="text-align: center;">Our Partners</h1>
        <p class="text-muted" style="text-align: center;">
            We're grateful for the organizations, sponsors and partners that support our mission to build a thriving developer community at DSC Uhamka.
        </p>
</div>

<div class="container">
    <div class="row">
            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
            </div>
            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
            </div>
            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
            </div>
            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/instagram.png') }}" class="card-img-top" alt="Intro to Flutter">
                </div>
            </div>
    </div>
</div>
</section>



@endsection