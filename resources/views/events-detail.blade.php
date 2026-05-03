@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/event_style.css') }}">

@section('content')
<div class="container py-5">
    <div class="row g-4">
      
        {{-- AREA KIRI --}}
        <div class="col-lg-8">
            <div class="main-banner mb-4">
                <div class="banner-content">
                    <span class="badge-status">
                        <span class="dot"></span> OPEN REGISTRATION
                    </span>
                    <div class="category-tags">
                        <span class="tag">The Vectors</span>
                        <span class="tag">Machine Learning</span>
                        <span class="tag">Web Development</span>
                        <span class="tag">Artificial Intelligence</span>
                    </div>
                    <h1 class="event-title">NgabuburIT: Building Your First AI Chatbot</h1>
                    <p class="event-subtitle">Integration of AI Models in Website Development for Portfolio</p>
                </div>
            </div>

            <div class="info-card main-content-card">
                <h4 class="section-title blue-line">About the Event</h4>
                <div class="description-text mt-4">
                    <p>Join The Vectors division for a productive "NgabuburIT" session! In this workshop, we'll not only learn theory but also practice creating your own chatbot website.</p>
                    <p>You'll learn the basics of HTML, CSS, and JavaScript, understand how AI models and Google Colab work, and how to integrate these models into your website.</p>
                </div>

               <h5 class="sub-title mt-4 d-inline-flex align-items-center">
    <img src="{{ asset('images/Prerequisites.svg')}}"  width="20" height="20" class="me-2" alt="icon">
    Prerequisites
</h5>

                <div class="row g-3 mt-1">
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span>Understand basic concepts of websites and AI models.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                             <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span>Create and train models using Google Colab.</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> {{-- Penutup col-lg-8 --}}

        {{-- AREA KANAN (Sidebar) --}}
        <div class="col-lg-4 d-flex flex-column gap-3">
            
            <div class="info-card d-flex align-items-center gap-3">
    <div class="icon-box blue-light">
        <i class="far fa-calendar-alt"></i>
         <img src="{{ asset('images/date.svg') }}">
    </div>

    <div class="info-text">
        <label class="d-block mb-1">Date & Time</label>
        <h5 class="mb-1">Sunday, 22 February 2026</h5>
        <p class="mb-0">14:00 - 17:00 WIB</p>
    </div>
</div>

            <div class="info-card location-card-overlay p-0 overflow-hidden">
    <div class="map-bg">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7337775936357!2d106.86576857475133!3d-6.301323393687834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed9d90390311%3A0x67396a84f326164f!2sFTII%20UHAMKA%20Kampus%20F!5e0!3m2!1sid!2sid!4v1711512345678!5m2!1sid!2sid" 
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>


    <div class="location-text-content">
        <div class="d-flex align-items-center gap-2 mb-1">
             <img src="{{ asset('images/location.png')}}"  width="20" height="20" class="me-2" alt="icon">
            <label class="m-0 fw-bold text-white uppercase-label">LOCATION</label>
        </div>
        <h5 class="fw-bold text-white mb-1">FTII UHAMKA Campus F</h5>
        <p class="small text-white-50 mb-0">Jl. Tanah Merdeka, Ciracas, Jakarta Timur</p>
    </div>
</div>

            <div class="info-card new-feature-card d-flex align-items-center justify-content-between gap-3">
    <div class="info-text">
        <label class="d-block mb-1 fs-6 fw-light text-muted">Entry Fee</label>
        <h5 class="mb-1 fs-4 fw-bold">Free</h5>
    </div>

    <div class="icon-circle2 green-light">
        <i class=""></i>
        <img src="{{ asset('images/tiket.svg') }}">
    </div>
</div>

            <div class="registration-bar">
    <div class="price-section">
        <label class="price-label">TOTAL PRICE</label>
        <div class="price-group">
            <h5 class="price-value">Free</h5>
            <span class="badge-limit">Limited Spots</span>
        </div>
    </div>
    
    <button class="btn-register-now">
        Register Now <i class="fas fa-arrow-right ms-2"></i>
    </button>
</div>

            <div class="info-card speakers-card">
                <div class="card-header-flex">
                    <h4 class="section-title red-line">Speakers</h4>
                </div>
                <div class="speaker-list">
                    <div class="speaker-item">
                        <div class="avatar-wrapper blue-border">
                            <img src="{{ asset('images/haykal.png') }}">
                        </div>
                        <div class="speaker-info">
                            <h5>Heykal Sayid</h5>
                            <p class="role">EX- GDSC BATCH 1</p>
                            <div class="speaker-tags">
                  <span class="s-tag">Data Science</span>
                  <span class="s-tag">Data Analysis</span>
                  <span class="s-tag">Machine Learning</span>
                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> {{-- Penutup col-lg-4 --}}

       <div class="info-card agenda-card mt-4">
    <h4 class="section-title green-line">Agenda</h4>

    <div class="timeline-container mt-5">
        <div class="timeline-scroll-wrapper"> 
            
            <div class="timeline-line"></div>

            <div class="timeline-items">
                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-blue">10:00 AM</span>
                        <h6 class="title">Check-in</h6>
                        <p class="desc">Registration & Coffee</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-green">10:30 AM</span>
                        <h6 class="title">Opening Keynote</h6>
                        <p class="desc">Welcome to DSC</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-cyan">11:00 AM</span>
                        <h6 class="title">Session 1</h6>
                        <p class="desc">Flutter Architecture Basics</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-orange">12:30 PM</span>
                        <h6 class="title">Break</h6>
                        <p class="desc">Lunch & Networking</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-red">01:30 PM</span>
                        <h6 class="title">Workshop</h6>
                        <p class="desc">Building a Movie App</p>
                    </div>
                </div>
            </div> </div> </div> </div>

        

    </div> {{-- Penutup row --}}
</div> {{-- Penutup container --}}
@endsection