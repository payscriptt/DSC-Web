@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/event_style.css') }}">
@section('content')
<section class="container my-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="fw-bold">Events & Study Jams</h1>
            <p class="text-muted">Level up your skills with our community-led sessions. From coding bootcamps to design sprints.</p>
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <input type="text" class="form-control rounded-pill shadow-sm" placeholder="🔍 Search">
        </div>
    </div>

  <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap gap-3"> 
    
    <div class="btn-group p-1 bg-light rounded-pill" id="event-toggle"> 
        <button class="btn btn-white rounded-pill shadow-sm px-4 active-toggle">Upcoming</button> 
        <button class="btn text-muted px-4">Past</button> 
    </div> 

    <div class="d-flex align-items-center gap-2 flex-wrap">
        <span class="badge rounded-pill bg-dark px-3 py-2">
            All Events
        </span>
        <button class="btn-vector">
            <span class="dot"></span> The Vectors
        </button>
        <button class="btn-vector2">
            <span class="dot2"></span> The Vectors
        </button>
        <button class="btn-vector3">
            <span class="dot3"></span> The Vectors
        </button>
    </div>
    
</div>
        
    </div>

    <a href="{{ url('/event/ngabuburIT') }}" class="text-decoration-none event-link">
    <div class="featured-card mb-5 position-relative text-white overflow-hidden rounded-4 shadow-hover">
        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=1000" 
     class="w-100 featured-img" 
     style="height: 450px; object-fit: cover; border-radius: 24px;">
        <div class="featured-overlay p-4 p-md-5 d-flex flex-column justify-content-end">
            <div class="category-tags">
                <span class="tag">The Vectors</span>
                <span class="tag">Machine Learning</span>
            </div>
            <h2 class="display-6 fw-bold">NgabuburIT: Building Your First AI Chatbot</h2>
            <div class="event-info-list mt-3">
    
    <span class="info-group"><img src="images/cal.png"> Oct 24, 2024</span>
    <span class="info-group"><img src="images/clok.png"> 10:00 AM WIB</span>
    <span class="info-group"><img src="images/loc.png"> Main Auditorium</span>

</div>
        </div>
    </div>
</a>
{{--
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="event1.jpg" class="card-img-top" height="200">
                    <span class="position-absolute top-50 start-50 translate-middle badge bg-dark opacity-75 px-3 py-2">ENDED</span>
                </div>
                <div class="card-body">
                    <small class="text-primary fw-bold">The Pixels</small>
                    <h5 class="card-title fw-bold mt-2">React Hooks Deep Dive</h5>
                    <p class="text-muted small"><i class="bi bi-play-circle"></i> Watch Recording</p>
                </div>
            </div>
        </div>
        
        </div>

--}}
    <div class="mt-5 d-flex flex-column align-items-center">
        
        <div class="empty-event-card w-100">
            <img src="{{ asset('images/Icon-Dino.svg') }}" class="icon-circle-img" alt="No Event">
            <h2 class="empty-title">No more events found</h2>
            <p class="empty-desc">
                Our dino is resting. Stay tuned for new announcements!
            </p>
            <button class="btn-notify">Notify Me</button>
        </div>
        <div class="pagination-section d-flex flex-column align-items-center">
    <button class="btn-load-more d-flex justify-content-between align-items-center col-12 col-md-4">
        <span>Load More Events</span>
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 4L6 8L10 4" stroke="#4a5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    
    <p class="status-text mt-3 text-muted">Showing 0 of 0 events</p>
</div>

    </div>  
</section>
<script>
    const container = document.getElementById('event-toggle');
const buttons = container.querySelectorAll('.btn');

buttons.forEach(btn => {
    btn.addEventListener('click', function() {
        // 1. Hapus class aktif dan shadow dari semua tombol
        buttons.forEach(b => {
            b.classList.remove('btn-white', 'shadow-sm', 'active-toggle');
            b.classList.add('text-muted');
        });

        // 2. Tambahkan class aktif ke tombol yang diklik
        this.classList.add('btn-white', 'shadow-sm', 'active-toggle');
        this.classList.remove('text-muted');
    });
});
</script>

@endsection