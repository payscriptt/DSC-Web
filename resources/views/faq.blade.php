@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@section('content')
    <!-- 🚀 Hero Section -->
<section class="hero">
    <div class="container py-5 faq-wrapper">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Frequently Asked Questions</h1>
        <p class="text-muted">Everything you need to know about joining and growing with the DSC Uhamka community.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="faq-card shadow-sm">
                
                <details class="faq-item">
                    <summary class="faq-header">
                        Can non-IT students or those from outside the Faculty of Engineering join?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Yes, DSC Uhamka is open to all students from all faculties who have an interest in technology.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        Is there a registration fee to become a member?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Registration and membership for DSC Uhamka are completely free of charge.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        I cannot code at all yet, can I still join?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Absolutely! We provide learning paths for beginners to help you start your coding journey.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        What are the benefits of joining DSC UHAMKA?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">You will gain technical skills, networking opportunities, and access to Google developer resources.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        What learning divisions are available?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">We have divisions like Web Development, Mobile Development (Android/Flutter), UI/UX, and Cloud Computing.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        What is the difference between a Member and the Core Team?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Members participate in events, while Core Team members are responsible for organizing and managing the community.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        Will DSC activities interfere with my college schedule?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">We try to schedule our activities during spare time or weekends to avoid clashing with academic hours.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        How do I get an event certificate?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Certificates are usually distributed to participants who attend the workshops and complete the required tasks.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-header">
                        Is the certificate from DSC UHAMKA recognized?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">Our certificates acknowledge your participation in events backed by a Google-supported community, which is great for your portfolio.</p>
                    </div>
                </details>

                <details class="faq-item no-border">
                    <summary class="faq-header">
                        How can I partner or collaborate with DSC UHAMKA?
                        <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                    </summary>
                    <div class="faq-body">
                        <p class="text-muted">You can reach out to us through our social media or email for partnership inquiries.</p>
                    </div>
                </details>

            </div>
        </div>
    </div>
</div>
</section>

@endsection