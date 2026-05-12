@extends('layouts.app')

@section('content')
    <!-- 🚀 Hero Section -->
<section class="hero"><BR></BR>
    <div class="v-wrapper">
        <img src="{{ asset('images/V.svg') }}" class="decoration">
    </div>
    <div class="v-wrapper2">
        <img src="{{ asset('images/V2.svg') }}" class="decoration2">
    </div>
    <div class="d-wrapper">
        <img src="{{ asset('images/Dekor1.svg') }}" class="decoration3">
    </div>
    <div class="d-wrapper2">
        <img src="{{ asset('images/Dekor2.svg') }}" class="decoration4">
    </div>
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
                <img src="{{ asset('images/Active.svg') }}">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h2 class="number">20</h2>
                <p class="label-1">Active Members</p>
            </div>
        </div>

        <div class="card card-green">
            <div class="icon-box">
                <img src="{{ asset('images/Events.svg') }}">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h2 class="number">2</h2>
                <p class="label">Events Held</p>
            </div>
        </div>

        <div class="card card-yellow">
            <div class="icon-box">
                <img src="{{ asset('images/Estabalished.svg') }}">
                <i class="fas fa-calendar-alt"></i> </div>
            <div class="content">
                <h3 class="number-2">2023</h3>
                <p class="label">Established</p>
            </div>
        </div>

    </div>
</div>
</section>



<section class="hero-section">
    <div class="marquee-container">
    <div class="marquee-content">
        <span class="marquee-item">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
        </span>
        <span class="marquee-item">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
            Developer Student Clubs <img src="{{ asset('images/LogoDsc.svg') }}" class="logo-spacer" alt="icon">
        </span>
    </div>
</div>

    <div class="photo-grid-container">
    <div class="photo-column move-left">
        <img src="{{ asset('images/Run1.svg') }}" class="svg-long"><img src="{{ asset('images/Run1.svg') }}" class="svg-long">
    </div>
    <div class="photo-column move-right">
        <img src="{{ asset('images/Run2.svg') }}" class="svg-long"><img src="{{ asset('images/Run2.svg') }}" class="svg-long"><img src="{{ asset('images/Run2.svg') }}" class="svg-long">
    </div>
    <div class="photo-column move-left2">
        <img src="{{ asset('images/Run3.svg') }}" class="svg-long"><img src="{{ asset('images/Run3.svg') }}" class="svg-long"><img src="{{ asset('images/Run3.svg') }}" class="svg-long">
    </div>
    <div class="photo-column move-right2">
        <img src="{{ asset('images/Run4.svg') }}" class="svg-long">
        <img src="{{ asset('images/Run4.svg') }}" class="svg-long">
        <img src="{{ asset('images/Run4.svg') }}" class="svg-long">
    </div>

    <div class="photo-column move-left3">
        <img src="{{ asset('images/Run5.svg') }}" class="svg-long">
        <img src="{{ asset('images/Run5.svg') }}" class="svg-long">
        <img src="{{ asset('images/Run5.svg') }}" class="svg-long">
    </div>
</div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Who We Are</h1>
        <p>We are a community-driven group empowering students to bridge the gap between theory and practice through technology.</p>
        <div class="hero-buttons">
            <button class="btn-hero">Learn</button>
            <button class="btn-hero">Connect</button>
            <button class="btn-hero">Grow</button>
        </div>
    </div>
</section>

<!-- -----------------MEET OUR TEAM----------------- -->
<section class="hero">
<div class="team-header">
    <h1 class="fw-bold">Meet Our Team</h1>
        <p class="text-muted">
            The brilliant minds behind DSC UHAMKA. We are a group of dedicated students passionate about building a thriving developer ecosystem on campus.
        </p>
</div>

<div class="member-wrapper">
    <div class="member-card member-1">
    <div class="speech-bubble" style="--rotation: -5deg;">
        <strong>Adinda Wulandari</strong>
        <span>PIC Secretary</span>
    </div>
    <div class="photo-circle purple-bg">
        <img src="images/Adinda.webp">
    </div>
</div>

<div class="member-card member-2">
    <div class="speech-bubble" style="--rotation: 10deg;">
        <strong>Salvalynda Riana p.</strong>
        <span>PIC The Vector</span>
    </div>
    <div class="photo-circle red-bg">
        <img src="images/Salva.webp">
    </div>
</div>

<div class="member-card member-3">
    <div class="speech-bubble" style="--rotation: 4deg;">
        <strong>Tiananmen Setyo N.</strong>
        <span>Leader</span>
    </div>
    <div class="photo-circle grey-bg">
        <img src="images/Tiananmen.webp">
    </div>
</div>

<div class="member-card member-4">
    <div class="speech-bubble" style="--rotation: -6deg;">
        <strong>Firdaus Firmansyah</strong>
        <span>PIC The Pixel</span>
    </div>
    <div class="photo-circle dark-red-bg">
        <img src="images/Daus.webp">
    </div>
</div>

<div class="member-card member-5">
    <div class="speech-bubble" style="--rotation: 9deg;">
        <strong>Rafi Diandra</strong>
        <span>PIC The Cypher</span>
    </div>
    <div class="photo-circle red-bg">
        <img src="images/Rafi.webp">
    </div>
</div>
</div>
</section>

<section class="container my-5">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
            <img src="images/Pixels.png" class="img-fluid" alt="The Pixels">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Pixels</h2>
            <hr class="my-3">
            <p class="lead text-muted">A home for visual visionaries. Here, we learn to translate complex ideas into intuitive interfaces through UI/UX, Illustration, and 3D Motion, making technology user-friendly.</p>
        </div>
    </div>

    <div class="row align-items-center flex-md-row-reverse mb-5">
        <div class="col-md-6 text-center">
            <img src="images/Vectors.png" class="img-fluid" alt="The Vectors">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Vectors</h2>
            <hr class="my-3">
            <p class="lead text-muted">The coders of the future. The Vectors is the place to delve deeply into software engineering, build scalable applications on web and mobile platforms, and leverage artificial intelligence.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
            <img src="images/Cyphers.png" class="img-fluid" alt="The Pixels">
        </div>
        <div class="col-md-6">
            <h2 class="display-4 fw-bold">The Cyphers</h2>
            <hr class="my-3">
            <p class="lead text-muted">Security and connectivity explorers. The Cyphers focus on protecting data from cyberattacks, building robust network architectures, and connecting the physical world to the internet (IoT).</p>
        </div>
    </div>

</section>
<h2 class="container my-5 fw-bold mb-4">Upcoming activities</h2>
<div class="mt-5 d-flex flex-column align-items-center">
<div class="empty-event-card w-100">
            <img src="{{ asset('images/Icon-Dino.svg') }}" class="icon-circle-img" alt="No Event">
            <h2 class="empty-title">No more events found</h2>
            <p class="empty-desc">
                Our dino is resting. Stay tuned for new announcements!
            </p>
            <button class="btn-notify">Notify Me</button>
        </div>
    </div>
{{--
<section class="container my-5">
    
    
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
</section>
--}}
<section>
<div class="team-header"> <br>
    <h1 class="fw-bold" style="text-align: center;">Our Partners</h1>
        <p class="text-muted" style="text-align: center;">
            We're grateful for the organizations, sponsors and partners that support our mission to build a thriving developer community at DSC Uhamka.
        </p>
</div>

<div class="container-card">
    <div class="row">
            <div class="card  custom-card">
                <div class="img-wrapper">
                    <img src="{{ asset('images/Media-Sponsor-GSA.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="card  custom-card">
                <div class="img-wrapper2">
                    <img src="{{ asset('images/Shinjisho.png') }}" class="card-img-top">
                </div>
            </div>
    </div>
</div>
</section>



@endsection