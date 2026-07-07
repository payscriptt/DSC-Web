@extends('layouts.app')

<style>
    .main-banner {
    /* Gunakan asset() jika di dalam Blade, atau path relatif jika di .css */
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%), 
                      url('../images/ThePixels.png');
    background-size: cover;
    background-position: center;
    border-radius: 24px;
    min-height: 300px; /* Tinggi banner utama */
    display: flex;
    align-items: flex-end; /* Menaruh konten di bawah */
    padding: 40px;
    position: relative;
    overflow: hidden;
}

.banner-content {
    width: 100%;
}

/* Badge Open Registration */
.badge-status {
    background: #1FADAD;
    backdrop-filter: blur(4px);
    padding: 6px 16px;
    border-radius: 100px;
    font-size: 12px;
    font-weight: 700;
    color: white;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}


/* Kategori Tags */
.category-tags {
    display: flex;
    flex-wrap: wrap; /* Agar tag turun ke bawah kalau tidak muat */
    gap: 10px;
    margin-top; px;
}

.tag {
    background: rgba(255, 255, 255, 0.15);
    color: white;
     padding: 1px 10px !important;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 500;
    backdrop-filter: blur(2px);
}

/* Tipografi */
.event-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: white;
    margin-bottom: 10px;
    line-height: 1.0;
}

.event-subtitle {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 80%; /* Agar teks tidak terlalu lebar sampai ke ujung */
}

.notify-card {
    text-align: center;
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 24px;
    border: 1px solid #eef0f2;
    /* Memberikan efek bayangan lembut agar terlihat melayang (clean look) */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.btn-notify {
    background: white;
    border: 1px solid #e0e4e8;
    padding: 10px 30px;
    border-radius: 100px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.btn-notify:hover {
    background-color: #f8f9fa;
    transform: translateY(-2px);
    border-color: #20b2aa; /* Menggunakan warna teal kamu agar senada */
}

.btn-notify span {
    font-size: 18px;
    color: #333;
}

.notify-icon {
    display: flex;
    align-items: center;
    justify-content: center;
}

.notify-text {
    margin-top: 15px;
    color: #9ca3af; /* Warna abu-abu soft sesuai gambar */
    font-size: 14px;
}
</style>

@section('content')
<div class="container py-5">
    <div class="row g-4">
      
        {{-- AREA KIRI --}}
        <div class="col-lg-8">
            <div class="main-banner mb-4">
                <div class="banner-content">
                    <span class="badge-status">
                        <span class="dot">
                            </span> OPEN REGISTRATION
                                </span>
                    <div class="category-tags">
                        <span class="tag">The Pixels</span>
                    <span class="tag">UI/UX Design</span>
                    </div>
                    <h1 class="event-title">Mastering Figma Workflow & Design System with Kretya Studio</h1>
                </div>
            </div>

            <div class="info-card main-content-card">
                <h4 class="section-title blue-line">About the Event</h4>
                <div class="description-text mt-4">
                    <p> In the UI/UX industry, creating aesthetically pleasing interfaces is no longer enough. Many junior designers experience a "culture shock" when entering professional agencies because they lack an understanding of collaborative workflows and design consistency. Designing dozens of screens without standardization makes developer handoff a nightmare and slows down the entire team.</p>
                    <p> Join GDSC UHAMKA and Kretya Studio to bridge this gap! In this exclusive Tech Talk and hands-on workshop, we will dissect the real-world UI/UX workflow of a professional agency. You will learn the fundamental techniques of building a Design System in Figma—utilizing Local Variables, Components, and Auto Layout—ensuring your designs are not only beautiful but also scalable, functional, and industry-ready.</p>
                </div>

               <h5 class="sub-title mt-4 d-inline-flex align-items-center">
    <img src="{{ asset('images/Prerequisites.svg')}}"  width="20" height="20" class="me-2" alt="icon">
    Prerequisites
</h5>

                <div class="row g-3 mt-1">
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span > Figma Account & Setup: Ensure you have an active Figma account logged in on your PC/Laptop. A stable internet connection and an external mouse are highly recommended.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                             <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span> Figma Fundamentals: Basic familiarity with the Figma interface, including creating Frames, basic shapes, and using text tools, is required to keep up with the pace.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span> Duplicate the Starter Kit: Participants must duplicate the provided "Starter UI Kit / Wireframe" file (link provided D-1) into their Figma drafts before the workshop begins. <span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span> Professional Mindset: Come ready to shift your perspective from just "making UI" to "building scalable design systems" used by professional agencies.</span>
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
        <h5 class="mb-1 fw-bold ">Saturday, 18 Juli 2026</h5>
        <p class="mb-0">09:00 - 11:00 WIB</p>
    </div>
</div>

            <div class="info-card location-card-overlay p-0 overflow-hidden">
    <div class="map-bg">
        {{--  
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7337775936357!2d106.86576857475133!3d-6.301323393687834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed9d90390311%3A0x67396a84f326164f!2sFTII%20UHAMKA%20Kampus%20F!5e0!3m2!1sid!2sid!4v1711512345678!5m2!1sid!2sid" 
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>--}}
    </div>


    <div class="location-text-content">
        
        <div class="d-flex align-items-center gap-2 mb-1">
             <img src="{{ asset('images/location.png')}}"  width="20" height="20" class="me-2" alt="icon">
            <label class="m-0 fw-bold text-black uppercase-label">LOCATION</label>
        </div>
        <h5 class="fw-bold text-black mb-1">Online</h5>
        <p class="small text-black-50 mb-0">Link will be provided upon registration</p>
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
   <div class="d-flex justify-content-end w-100">
    <!-- Ditambahkan kelas me-4 untuk mendorongnya agak ke kiri -->
    <button class="btn-register-now text-center me-5" onclick="window.open('https://forms.gle/XcRx2AhFZpP75L82A')">
        Register Now <i class="fas fa-arrow-right ms-2"></i>
    </button>
</div>
</div>




           <div class="info-card speakers-card">
    <div class="card-header-flex">
        <h4 class="section-title red-line">Speakers</h4>
    </div>

    <div class="speaker-list">

        <!-- Speaker 1 -->
        <div class="speaker-item">
            <div class="avatar-wrapper blue-border">
                <img src="{{ asset('images/Ahmad.png') }}" alt="Speaker">
            </div>

            <div class="speaker-info">
                <h5 class="fw-bold">Ahmad Fauzi</h5>

                <p class="desc">
                   CREATIVE DIRECTOR AT KRETYA STUDIO
                </p>

                <div class="speaker-tags">
                    <span class="s-tag">UI/UX</span>
                    <span class="s-tag">Figma</span>
                </div>
            </div>
        </div>

        <!-- Speaker 2 -->
         <div class="speaker-item">
            <div class="avatar-wrapper blue-border">
                <img src="{{ asset('images/Rizki.png') }}" alt="Speaker">
            </div>

            <div class="speaker-info">
                <h5 class="fw-bold">Rizki Fadhilah Muhammad Habibi</h5>

                <p class="desc">
                   UX DIRECTOR AT KRETYA STUDIO
                </p>

                <div class="speaker-tags">
                    <span class="s-tag">Design System</span>
                    <span class="s-tag">Agency Workflow</span>
                </div>
            </div>
        </div>

        <!-- Speaker 3 -->
        <div class="speaker-item">
            <div class="avatar-wrapper orange-border">
                <img src="{{ asset('images/Bimbiii.png') }}" alt="Moderator">
            </div>

            <div class="speaker-info">
                <h5 class="fw-bold">Bimbi Elsabathi</h5>

                <p class="desc">MODERATOR</p>

                <div class="speaker-tags">
                    <span class="s-tag">Core Team DSC Uhamka</span>
                    <span class="s-tag">The Pixels</span>
                </div>
            </div>
        </div>

    </div>
</div>
                    
                    <div class="notify-card mt-4">
    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Mastering+Figma+Workflow+%26+Design+System&dates=20260718T020000Z/20260718T040000Z&details=Jangan+lupa+hadir+di+event!+Pelajari+workflow+Figma+secara+efektif+serta+cara+membangun+Design+System+yang+konsisten.&location=Google+Meet" 
       target="_blank" 
       class="btn-notify text-decoration-none">
        <div class="notify-icon">
            <img src="{{ asset('images/cal2.png')}}" alt="calendar-icon" width="24">
        </div>
        <span class="fw-bold">Notify Me</span>
    </a>
    <p class="notify-text">Receive a reminder before the event starts</p>
</div>
        

        </div> {{-- Penutup col-lg-4 --}}

       <div class="info-card agenda-card mt-5">
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
                        <span class="time text-blue">09:00 PM</span>
                        <h6 class="title">Join link</h6>
                        <p class="desc">Google Meet</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-green">09:10 PM</span>
                        <h6 class="title">Industry Tech Talk</h6>
                        <p class="desc">Welcoming remarks, rules, and speaker introduction</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-cyan">09:45 PM</span>
                        <h6 class="title">Hands-on Workshop</h6>
                        <p class="desc">Building a Mini Design System: Variables, Auto Layout implementation.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-orange">10:35 PM</span>
                        <h6 class="title">Showcase & QnA</h6>
                        <p class="desc">Interactive design review, troubleshooting, and QnA with the experts.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-red">10:35 - 10:50 PM</span>
                        <h6 class="title">Closing</h6>
                        <p class="desc">Group photo, E-Certificate distribution, and feedback form submission</p>
                    </div>
                </div>
            </div> </div> </div> </div>

        

    </div> {{-- Penutup row --}}
</div> {{-- Penutup container --}}
@endsection