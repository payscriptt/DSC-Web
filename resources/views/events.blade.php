@extends('layouts.app')

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
        <div class="btn-group p-1 bg-light rounded-pill">
            <button class="btn btn-white rounded-pill shadow-sm px-4">Upcoming</button>
            <button class="btn text-muted px-4">Past</button>
        </div>
        <div class="d-flex gap-2">
            <span class="badge rounded-pill bg-dark px-3 py-2">All Events</span>
            <span class="badge rounded-pill border text-dark px-3 py-2">● The Vectors</span>
            <span class="badge rounded-pill border text-dark px-3 py-2">● The Pixels</span>
            <span class="badge rounded-pill border text-dark px-3 py-2">● The Cyphers</span>
        </div>
    </div>

    <div class="featured-card mb-5 position-relative text-white overflow-hidden rounded-4">
        <img src="featured-event.jpg" class="w-100" style="height: 450px; object-fit: cover;">
        <div class="featured-overlay p-4 p-md-5">
            <div class="mb-3">
                <span class="badge bg-success me-2">The Vectors</span>
                <span class="badge bg-secondary">Machine Learning</span>
            </div>
            <h2 class="display-6 fw-bold">NgabuburIT: Building Your First AI Chatbot</h2>
            <p class="mb-0"><i class="bi bi-calendar"></i> Oct 24, 2024 • 10:00 AM WIB • Main Auditorium</p>
        </div>
    </div>

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
</section>
    

@endsection