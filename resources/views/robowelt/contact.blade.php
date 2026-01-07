@extends('layouts.robowelt')

@section('title', 'Contact RoboWelt Systems | Industrial Automation & Robotics Enquiry')

@section('meta_description', 'Contact RoboWelt Systems for industrial robotics integration, PLC programming, BIW &
    Non-BIW automation, simulation and commissioning services. Get expert guidance and fast response.')

@section('meta_keywords', 'contact RoboWelt Systems, robotics automation contact, PLC programming enquiry, industrial
    automation services contact, BIW automation enquiry, robot programming services India')

@section('meta_robots', 'index, follow')

@section('content')

{{-- Page CSS (keep this file in public/css) --}}
<link rel="stylesheet" href="{{ asset('css/robowelt-contact.css') }}">

{{-- HERO --}}
<section class="rw-contact-hero" id="top">
    <div class="rw-contact-hero-media">
        {{-- If you already have a hero background image in RoboWelt assets, use that.
                 Otherwise keep the gradient fallback from CSS. --}}
        <img src="{{ asset('images/contact-hero.jpg') }}" onerror="this.style.display='none'" alt="RoboWelt Robotics"
            class="rw-contact-hero-img" />
    </div>

    <div class="rw-contact-hero-overlay"></div>
    <div class="rw-contact-hero-glow rw-glow-blue"></div>
    <div class="rw-contact-hero-glow rw-glow-amber"></div>

    <div class="rw-container rw-contact-hero-inner">
        <div class="rw-contact-hero-left">
            <span class="rw-badge">Contact RoboWelt Systems</span>

            <h1 class="rw-hero-title">
                Let’s Build Your Next Automation System
            </h1>

            <p class="rw-hero-subtitle">
                Share your scope — BIW / Non-BIW, robot programming, PLC programming, simulation or commissioning.
                We’ll respond with the right approach, timeline and next steps.
            </p>

            <div class="rw-contact-hero-actions">
                <a href="#enquiry" class="rw-btn rw-btn-primary">Send an Enquiry</a>
                {{-- <a href="tel:+919689521121" class="rw-btn rw-btn-outline">Call Now</a> --}}
            </div>

            <div class="rw-contact-metrics">
                <div class="rw-metric">
                    <div class="rw-metric-top">Pune</div>
                    <div class="rw-metric-bottom">Operations Base</div>
                </div>
                <div class="rw-metric">
                    <div class="rw-metric-top">Mon–Sat</div>
                    <div class="rw-metric-bottom">9:00 AM – 6:00 PM</div>
                </div>
                <div class="rw-metric">
                    <div class="rw-metric-top">&lt; 24 hrs</div>
                    <div class="rw-metric-bottom">Avg. Response</div>
                </div>
            </div>
        </div>

        <div class="rw-contact-hero-right">
            <div class="rw-glass-card rw-hero-glass">
                <div class="rw-glass-header">
                    <h3>Quick inquiry checklist</h3>
                    <p>To reply faster, share these 4 points:</p>
                </div>

                <ul class="rw-checklist">
                    <li>Robot / PLC brand + line type</li>
                    <li>Scope: programming / simulation / commissioning</li>
                    <li>Plant location + timeline</li>
                    <li>Any existing documents (layout, IO list, cycle time)</li>
                </ul>

                <div class="rw-glass-cta">
                    <a href="#enquiry" class="rw-btn rw-btn-primary rw-btn-wide">Request a quote</a>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- MAIN --}}
<section class="rw-contact-main">
    <div class="rw-container">
        <div class="rw-section-head">
            <div>
                <p class="rw-kicker">CONTACT</p>
                <h2>Reach Us Easily</h2>
                <p class="rw-subtext">
                    Call, email, or submit the form. We’ll get back with the right person for your scope.
                </p>
            </div>

            <a href="#enquiry" class="rw-btn rw-btn-outline rw-hide-sm">Get a proposal</a>
        </div>

        <div class="rw-contact-grid">

            {{-- LEFT: contact + directors --}}
            <div class="rw-glass-card">
                <h3 class="rw-card-title">Contact Details</h3>

                <ul class="rw-info-list">
                    <li>
                        <span>Email: </span>
                        <span>info@roboweltsystems.com</span>
                    </li>
                    <li>
                        <span>HQ: </span>
                        <span>Pune, India</span>
                    </li>
                </ul>

                <div class="rw-divider"></div>

                <h3 class="rw-card-title">Directors</h3>
                <div class="rw-director-list">
                    <div class="rw-director">
                        <div class="rw-director-name">Mr. Pandurang Maske</div>
                        <div class="rw-director-meta">
                            <a href="mailto:pandurang@roboweltsystems.com">pandurang@roboweltsystems.com</a><br>
                            <a href="tel:+919689521121">+91 96895 21121</a>
                        </div>
                    </div>

                    <div class="rw-director">
                        <div class="rw-director-name">Mr. Vijaysinh Desai</div>
                        <div class="rw-director-meta">
                            <a href="mailto:vijaysinh@roboweltsystems.com">vijaysinh@roboweltsystems.com</a><br>
                            <a href="tel:+9197647308347">+91 97647 30834</a>
                        </div>
                    </div>

                    <div class="rw-director">
                        <div class="rw-director-name">Mr. Rahul Patil</div>
                        <div class="rw-director-meta">
                            <a href="mailto:rahul@roboweltsystems.com">rahul@roboweltsystems.com</a><br>
                            <a href="tel:+918087270319">+91 80872 70319</a>
                        </div>
                    </div>
                </div>

                <div class="rw-divider"></div>

                <div class="rw-meta">
                    <p><strong>Office hours:</strong> Monday – Saturday, 9:00 AM – 6:00 PM</p>
                    <p><strong>Sunday:</strong> By appointment (site visits / commissioning support)</p>
                </div>
            </div>

            {{-- CENTER: form --}}
            <div class="rw-glass-card rw-form-card" id="enquiry">
                <h3 class="rw-card-title">Quick Enquiry Form</h3>
                <p class="rw-card-subtitle">
                    Share your requirement and we’ll respond with next steps.
                </p>

                @if (session('success'))
                    <div id="successMessage" class="rw-alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="rw-form">
                    @csrf

                    <div class="rw-field">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}"
                            class="@error('fullname') rw-invalid @enderror" placeholder="Enter your full name">
                        @error('fullname')
                            <small class="rw-err">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="rw-field">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}"
                            class="@error('mobile') rw-invalid @enderror" placeholder="10-digit mobile number">
                        @error('mobile')
                            <small class="rw-err">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="rw-field">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="@error('email') rw-invalid @enderror" placeholder="you@example.com">
                        @error('email')
                            <small class="rw-err">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="rw-field">
                        <label for="message">How can we help?</label>
                        <textarea name="message" id="message" rows="4" placeholder="Scope, robot/PLC brand, timeline, location...">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="rw-btn rw-btn-primary rw-btn-wide">
                        Send Enquiry
                    </button>

                    <p class="rw-form-footnote">
                        By submitting, you agree to be contacted by RoboWelt regarding your enquiry.
                    </p>
                </form>
            </div>

            {{-- RIGHT: map --}}
            {{-- <div class="rw-glass-card rw-map-card" id="map">
                    <h3 class="rw-card-title">Find Us</h3>
                    <p class="rw-card-subtitle">
                        Pune, Maharashtra. Site visits available for commissioning & integration.
                    </p>

                    <div class="rw-map-wrap">
                        <iframe
                            src="https://www.google.com/maps?q=Pune,+Maharashtra&output=embed"
                            frameborder="0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>

                    <ul class="rw-bullets">
                        <li>On-site support for commissioning & troubleshooting</li>
                        <li>Remote support for simulation / logic reviews</li>
                        <li>Fast response for production-critical issues</li>
                    </ul>
                </div> --}}

        </div>
    </div>
</section>

{{-- success auto-hide --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = document.getElementById("successMessage");
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = "opacity 0.5s ease";
                successMessage.style.opacity = "0";
                setTimeout(() => successMessage.remove(), 500);
            }, 5000);
        }
    });
</script>

@endsection
