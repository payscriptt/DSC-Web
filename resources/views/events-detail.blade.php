@extends('layouts.app')

<style>
    .main-banner {
    /* Gunakan asset() jika di dalam Blade, atau path relatif jika di .css */
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%), 
                      url('../images/BtS.png');
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
                        <span class="tag">The Cyphers</span>
                    <span class="tag">Web Application</span>
                    <span class="tag">Penetration Testing</span>
                    </div>
                    <h1 class="event-title">Beyond the Surface: Bypassing Defenses & Gaining Persistence</h1>
                </div>
            </div>

            <div class="info-card main-content-card">
                <h4 class="section-title blue-line">About the Event</h4>
                <div class="description-text mt-4">
                    <p>Amidst the current trend of web application development, many developers focus on stunning UI/UX aesthetics, but often neglect fundamental security aspects. This creates a fatal risk where websites become easy targets for threats such as SQL Injection, File Upload manipulation, and Web Shell exploits. </p>
                    <p>In conjunction with The Cyphers division in a special Study Jam on Web Application Penetration Testing! In this session, we will break these vulnerability patterns by developing a Red Team mindset. You will not only learn the theory of cyber threat analysis, but also be challenged to practice directly detecting gaps, bypassing protection systems, and mitigating increasingly complex cybersecurity vulnerabilities in the real world.</p>
                </div>

               <h5 class="sub-title mt-4 d-inline-flex align-items-center">
    <img src="{{ asset('images/Prerequisites.svg')}}"  width="20" height="20" class="me-2" alt="icon">
    Prerequisites
</h5>

                <div class="row g-3 mt-1">
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span >Understand the Attacker Mindset: Learn the hacking process from reconnaissance to exploitation.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                             <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span>Master Bypassing Techniques: Practice bypassing blacklists using character variations, coding, and case-sensitivity manipulation.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span>Hands-on with Burp Suite: Use professional tools to modify requests and analyze server responses in depth.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prereq-item">
                            <img src="{{ asset('images/ceklis.svg')}}"  width="20" height="20" class="me-2" alt="icon">
                            <span>Implement Secure Coding: Learn data protection strategies through whitelisting and parameterized query methods.</span>
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
        <h5 class="mb-1 fw-bold ">Saturday, 23 May 2026</h5>
        <p class="mb-0">13:00 - 16:00 WIB</p>
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

    
    <button class="btn-register-now text-center " onclick="window.open('https://forms.gle/Tyba9eQ8Kei3Hqo86', '_blank')">
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
                            <img src="{{ asset('images/Yuman.webp') }}">
                        </div>
                        <div class="speaker-info">
                            <h5 class="fw-bold">Yumansyah Nurnindar</h5>
                            <p class="desc">KOORDINATOR ACT REGION BEKASI</p>
                            <div class="speaker-tags">
                  <span class="s-tag">Cyber Security Expert</span>
                  <span class="s-tag">Web Application Penetration Testing</span>
                </div>
                        </div>
                    </div>
                </div>
                <div class="speaker-list">
                    <div class="speaker-item">
                        <div class="avatar-wrapper orange-border">
                            <img src="{{ asset('images/Regisa.webp') }}">
                        </div>
                        <div class="speaker-info">
                            <h5 class="fw-bold">Regisya. A</h5>
                            <p class="desc">MODERATOR</p>
                            <div class="speaker-tags">
                  <span class="s-tag">Core Team DSC Uhamka</span>
                  <span class="s-tag">The Cyphers</span>
                </div>
                        </div>
                        
                    </div>
                    <div class="notify-card mt-4">
    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Beyond+the+Surface:+Bypassing+Defenses+%26+Gaining+Persistence&dates=20260523T060000Z/20260523T090000Z&details=Jangan+lupa+hadir+di+event+DSC+Uhamka!+Membahas+tuntas+tentang+Cyber+Security.&location=FTII+Uhamka" 
       target="_blank" 
       class="btn-notify text-decoration-none">
        <div class="notify-icon">
            <img src="{{ asset('images/cal2.png')}}" alt="calendar-icon" width="24">
        </div>
        <span class="fw-bold">Notify Me</span>
    </a>
    <p class="notify-text">Receive a reminder before the event starts</p>
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
                        <span class="time text-blue">12:30 PM</span>
                        <h6 class="title">Check-in</h6>
                        <p class="desc">Registration</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-green">13:00 PM</span>
                        <h6 class="title">Check-in & Opening</h6>
                        <p class="desc">Registrasi dan Pembukaan</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-cyan">13:20 PM</span>
                        <h6 class="title">Teori & Konsep</h6>
                        <p class="desc">Pengenalan Penetration Testing</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-orange">14:00 PM</span>
                        <h6 class="title">Praktikum(Hands-on)</h6>
                        <p class="desc">Workshop Penetration Testing</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="node">
                        <div class="inner-dot"></div>
                    </div>
                    <div class="content">
                        <span class="time text-red">15:15 - 15:35 PM</span>
                        <h6 class="title">Showcase, Tell & QnA</h6>
                        <p class="desc">Presentasi, tanya jawab</p>
                    </div>
                </div>
            </div> </div> </div> </div>

        

    </div> {{-- Penutup row --}}
</div> {{-- Penutup container --}}
@endsection