@extends('layouts.app')

@section('content')
<!-- 🚀 Hero Section -->
<section class="team-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5">Meet our team</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                Get to know the students driving the community. From coding wizards to design gurus, we are here to help you grow.
            </p>
        </div>

        <div class="lead-card mb-5">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="images/Tiananmen.webp" class="img-fluid lead-img" alt="Lead">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-4 p-lg-5">
                        <span class="badge-lead mb-3">THE LEAD</span>
                        <h2 class="fw-bold mb-1">Tiananmen Setyo Nugroho</h2>
                        <p class="text-secondary fw-bold mb-10">DSC UHAMKA Lead</p>
                        <p class="text-muted fst-italic mb-4">
                            "Committed to building a sustainable tech ecosystem at UHAMKA. Bridging the gap between academic theory and industry practices for all members."
                        </p>
                        <div class="social-links">
                            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
                            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                             <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
                            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
           <div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-3 col-md-6">
            <div class="member-card" style="text-align: left !important; align-items: flex-start !important;">
                <img src="images/Adinda.webp" class="img-fluid rounded-4 mb-3" alt="Member">
                <h5 class="fw-bold mb-1">Adinda Wulandari</h5>
                <p class="text-primary small mb-1">PIC - Secretary</p>
                <p class="text-muted small mb-3">Managing administration & community records.</p>
                <div class="social-links-small">
                    <a href="https://www.linkedin.com/in/adinda-wulandari-anggraini-6254152b4?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://g.dev/adindawulandarianggraini" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                   <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://github.com/adindawulandari" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="member-card" style="text-align: left !important; align-items: flex-start !important;">
                <img src="images/Firdaus.webp" class="img-fluid rounded-4 mb-3" alt="Member">
                <h5 class="fw-bold mb-1">Firdaus Firmansyah</h5>
                <p class="text-primary small mb-1">PIC - The Pixels</p>
                <p class="text-muted small mb-3">Crafting intuitive & beautiful user experiences.</p>
                <div class="social-links-small">
                    <a href="https://www.linkedin.com/in/firdaus-firmansyah-2027352a1/" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://g.dev/daussaurus" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/daussfh/" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://github.com/Firdaus-Firmansyah" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="member-card" style="text-align: left !important; align-items: flex-start !important;">
                <img src="images/Salva.webp" class="img-fluid rounded-4 mb-3" alt="Member">
                <h5 class="fw-bold mb-1">Salvalynda Riana</h5>
                <p class="text-primary small mb-1">PIC - The Vectors</p>
                <p class="text-muted small mb-3">Building web and mobile solutions.</p>
                <div class="social-links-small">
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="member-card" style="text-align: left !important; align-items: flex-start !important;">
                <img src="images/Rafi.webp" class="img-fluid rounded-4 mb-3" alt="Member">
                <h5 class="fw-bold mb-1">Rafi Diandra</h5>
                <p class="text-primary small mb-1">PIC - The Cyphers</p>
                <p class="text-muted small mb-3">Exploring IoT and system security.</p>
                <div class="social-links-small">
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/bingah.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Bingah Mahcha Hanifa</h5><p class="text-primary small mb-1">Social Media Specialist</p><p class="text-muted small mb-3">Engaging the community through digital presence.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/ardi.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Ardi Setiawan</h5><p class="text-primary small mb-1">The Pixels</p><p class="text-muted small mb-3">Crafting intuitive & beautiful user experiences.</p><div class="social-links-small"><a href="https://id.linkedin.com/in/ardi-setiawan1" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="https://g.dev/ardisetiawan1" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/ziyah.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Fauziyah Salsabila</h5><p class="text-primary small mb-1">The Vectors</p><p class="text-muted small mb-3">Building scalable web & mobile solutions.</p><div class="social-links-small"><a href="https://www.linkedin.com/in/fauziyah-salsabila-64434331a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://g.dev/fauziyah" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/ziyahslsa/?utm_source=ig_web_button_share_sheet" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a><a href="https://github.com/ziyasalsa" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/deta.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Regissya Anfieldasari F. A.</h5><p class="text-primary small mb-1">The Cyphers</p><p class="text-muted small mb-3">Securing systems & exploring IoT connectivity.</p><div class="social-links-small"><a href="http://www.linkedin.com/in/regissya-anfieldasari-1b4a0b348" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://developers.google.com/profile/u/RegissyaAnfieldasari" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/anfld__?igsh=MWV1am12NzIyMWk1Zg==" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
             <a href="https://github.com/gyuuniversee" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>

        <div class="col-lg-3 col-md-6">
            <div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/dany.webp" class="img-fluid rounded-4 mb-3"> 
            <h5 class="fw-bold mb-1">Ahmad Dany</h5>
            <p class="text-primary small mb-1">Secretary</p><p class="text-muted small mb-3">Managing administration & community records.
            </p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/bimbi.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Bimbi Elsabathi</h5><p class="text-primary small mb-1">The Pixels</p><p class="text-muted small mb-3">Crafting intuitive & beautiful user experiences.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/indah.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Adisyah Indah Nurkusuma</h5><p class="text-primary small mb-1">The Vectors</p><p class="text-muted small mb-3">Building scalable web & mobile solutions.</p><div class="social-links-small"><a href="https://www.linkedin.com/in/adisyah-indah-nurkusuma-297b172b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://g.dev/Adisyah65" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/dsyh.ndh?igsh=MTNzanR2ejF2aW1pdw==" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://github.com/Adisyah65" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/aura.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Aura Shyifa Aulia</h5><p class="text-primary small mb-1">The Cyphers</p><p class="text-muted small mb-3">Securing systems & exploring IoT connectivity.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>

        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/ega.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Ega Firmawati</h5><p class="text-primary small mb-1">Documentation</p><p class="text-muted small mb-3">Capturing every memorable moment & milestone..</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/rifqi.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Rifqi Hakim</h5><p class="text-primary small mb-1">The Vectors</p><p class="text-muted small mb-3">Building scalable web & mobile solutions.</p><div class="social-links-small"><a href="https://www.linkedin.com/in/rifqi-hakim875094285/" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="https://g.dev/rfqiih" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/rfqiih?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://github.com/payscriptt" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/regis.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Regissya Anfieldasari F.A.</h5><p class="text-primary small mb-1">The Cyphers</p><p class="text-muted small mb-3">Securing systems & exploring IoT connectivity.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/fayza.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Fayza Nadya Aulya</h5><p class="text-primary small mb-1">The Vectors</p><p class="text-muted small mb-3">Building scalable web & mobile solutions.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>

        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/jelita.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Jelita Eka Putri Rahmadhani </h5><p class="text-primary small mb-1">Content Writer</p><p class="text-muted small mb-3">Storytelling the journey of our community.</p><div class="social-links-small"><a href="https://www.linkedin.com/in/lita-lita" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a>
            <a href="https://developers.google.com/profile/u/104676974325743817914/edit" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="https://www.instagram.com/putriouz_?igsh=NWxqd3FoZ3A5MnV1" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
             <a href="https://github.com/settings/profile" class="d-inline-block">
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/rakha.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Rakha Arrayyan Ramdhan</h5><p class="text-primary small mb-1">Graphic Design</p><p class="text-muted small mb-3">Visualizing ideas into stunning creative assets..</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/wiki.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Azdwiki Saenli </h5><p class="text-primary small mb-1">The Cyphers</p><p class="text-muted small mb-3">Securing systems & exploring IoT connectivity.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="member-card" style="text-align: left !important; align-items: flex-start !important;"><img src="images/wandy.webp" class="img-fluid rounded-4 mb-3"> <h5 class="fw-bold mb-1">Muhammad Purwandy</h5><p class="text-primary small mb-1">The Cyphers</p><p class="text-muted small mb-3">Securing systems & exploring IoT connectivity.</p><div class="social-links-small"><a href="#" class="d-inline-block">
            <img src="{{ asset('images/linkedin2.svg') }}" style="width: 20px; height: auto;">
        </a><a href="#" class="d-inline-block">
            <a href="#" class="d-inline-block">
            <img src="{{ asset('images/code.svg') }}" style="width: 20px; height: auto;">
        </a>
                    <a href="#" class="d-inline-block">
            <img src="{{ asset('images/ig.svg') }}" style="width: 20px; height: auto;">
        </a>
            <img src="{{ asset('images/github.svg') }}" style="width: 20px; height: auto;">
        </a></div></div></div>

    </div>
</div>
            </div>
    </div>
</section>

@endsection