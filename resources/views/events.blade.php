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
            <span class="badge rounded-pill bg-dark px-3 py-2">All Events</span>
            <button class="btn-vector"><span class="dot"></span> The Vectors</button>
            <button class="btn-vector2"><span class="dot2"></span> The Pixels</button>
            <button class="btn-vector3"><span class="dot3"></span> The Cyphers</button>
        </div>
    </div>

    @include('partials.upcoming-events')
@include('partials.past-events')
  
    <div class="pagination-section d-flex flex-column align-items-center mt-5">
        <button class="btn-load-more d-flex justify-content-between align-items-center col-12 col-md-2">
            <span>Load More Events</span>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4L6 8L10 4" stroke="#4a5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <p class="status-text mt-3 text-muted">Showing 1 of 1 events</p>
    </div>
</section>

<script>
    const container = document.getElementById('event-toggle');
    const buttons = container.querySelectorAll('.btn');
    const upcomingContent = document.getElementById('upcoming-content');
    const pastContent = document.getElementById('past-content');

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            // 1. Reset class tombol
            buttons.forEach(b => {
                b.classList.remove('btn-white', 'shadow-sm', 'active-toggle');
                b.classList.add('text-muted');
            });

            // 2. Aktifkan tombol yang diklik
            this.classList.add('btn-white', 'shadow-sm', 'active-toggle');
            this.classList.remove('text-muted');

            // 3. Logika Tampilkan/Sembunyikan
            if (this.innerText.trim() === 'Upcoming') {
                upcomingContent.style.display = 'block';
                pastContent.style.display = 'none';
            } else {
                upcomingContent.style.display = 'none';
                pastContent.style.display = 'block';
            }
        });
    });
</script>
@endsection