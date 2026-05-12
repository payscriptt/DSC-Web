@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="gallery-header-card shadow-sm">
        <img src="{{ asset('images/CC.png') }}" class="main-poster" alt="Event Poster">
        <div class="header-content">
            <h1 class="event-title-detail">Crash Course UI/UX Design</h1>
            <p class="text-muted"><i class="bi bi-calendar"></i> 30 May 2025</p>
            <div class="description mt-4">
                <p>Event Crash Course UI/UX Design ini sukses diselenggarakan untuk membantu kreator digital memahami fundamental desain berbasis pengguna (User-Centered Design). Sorotan utama dari kegiatan ini meliputi:</p>
                <ul>
                    <li>Fundamental UI/UX: Memahami perbedaan UI dan UX serta mengapa empati terhadap pengguna sangat penting.</li>
                    <li>Problem Solving: Langkah-langkah strategis desainer dalam memetakan masalah pengguna.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="team-section">
        <h2 class="fw-bold">Meet the team</h2>
        <p class="text-muted">Orang-orang terbaik dibalik suksesnya BKP Mandiri</p>
        
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/CC1.png') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC2.png') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC3.webp') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC4.webp') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC5.webp') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC6.webp') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC7.webp') }}" alt="Gallery">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/CC8.webp') }}" alt="Gallery">
            </div>
            </div>
    </div>
</div>
@endsection