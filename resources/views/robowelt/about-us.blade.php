@extends('layouts.robowelt')

@section('title', 'About RoboWelt Systems | Robotics Integration, PLC & Automation Expertise')

@section('meta_description',
    'Learn about RoboWelt Systems Pvt. Ltd. — our journey from PRevail Robotics, our mission
    and vision, multi-brand robot expertise, and leadership team delivering BIW & industrial automation solutions.')

@section('meta_keywords',
    'About RoboWelt Systems, RoboWelt Systems Pvt Ltd, PRevail Robotics, industrial automation
    company, robotics integration, robot programming, PLC programming, BIW automation, FANUC, KUKA, ABB, NACHI, YASKAWA')

@section('meta_robots', 'index, follow')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/robowelt-about.css') }}">

    <div class="rw-about">

        {{-- =========================
    ABOUT HERO (KEEP SAME SIZE)
  ========================= --}}
        <section class="rw-about-hero">

            <div class="rw-about-hero-media">
                <img src="{{ asset('images/about-hero.jpeg') }}" alt="RoboWelt Robotics" class="rw-about-hero-img" />
            </div>
            <div class="rw-about-hero-overlay" aria-hidden="true"></div>

            <div class="rw-wrap rw-about-hero-grid">

                {{-- LEFT --}}
                <div class="rw-reveal">
                    <span class="rw-badge">About RoboWelt Systems</span>

                    <h1 class="rw-hero-title">
                        Building intelligent robotics &amp; automation solutions for a smarter future.
                    </h1>

                    <div class="rw-highlights">
                        <div class="rw-hi rw-hi-blue">
                            <div class="rw-hi-title">What we do</div>
                            <div class="rw-hi-text">Robotic integration, offline programming, PLC &amp; controls, and
                                lifecycle support.</div>
                        </div>

                        <div class="rw-hi rw-hi-orange">
                            <div class="rw-hi-title">Where we serve</div>
                            <div class="rw-hi-text">Automotive &amp; manufacturing (BIW, component lines, flexible
                                production).</div>
                        </div>

                        <div class="rw-hi rw-hi-blue">
                            <div class="rw-hi-title">How we support</div>
                            <div class="rw-hi-text">Rapid deployment + 24/7 technical service readiness.</div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT --}}
                <div class="rw-reveal rw-hero-right">

                    {{-- ✅ sub image removed, only the glass card stays --}}
                    <div class="rw-hero-media-glass rw-hero-media-glass--solo">
                        <div class="rw-hero-badge">RoboWelt Systems Pvt. Ltd.</div>

                        <div class="rw-hero-meta">
                            <div class="rw-meta-item rw-meta-blue">
                                <div class="rw-meta-num">5+</div>
                                <div class="rw-meta-label">Robot Brands</div>
                            </div>
                            <div class="rw-meta-item rw-meta-orange">
                                <div class="rw-meta-num">7+</div>
                                <div class="rw-meta-label">Applications</div>
                            </div>
                            <div class="rw-meta-item rw-meta-blue">
                                <div class="rw-meta-num">24/7</div>
                                <div class="rw-meta-label">Support</div>
                            </div>
                        </div>

                        <p class="rw-hero-note">
                            Engineered for accuracy, repeatability, and cycle-time optimization in demanding production
                            environments.
                        </p>
                    </div>

                    {{-- ✅ buttons moved below the card (right side) --}}
                    <div class="rw-cta-row rw-cta-row-right">
                        <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-primary">
                            Discuss a Project <span>→</span>
                        </a>
                        <a href="{{ url('/robowelt/services') }}" class="rw-btn rw-btn-ghost">
                            Explore Services
                        </a>
                    </div>

                </div>

            </div>
        </section>

        {{-- =========================
    OUR STORY + MISSION/VISION (NEW)
========================= --}}
        <section class="rw-section rw-story-merge">
            <div class="rw-wrap">

                {{-- Story + Director photo row --}}
                <div class="rw-story-hero-grid rw-reveal">

                    {{-- Director Photo (LEFT) --}}
                    <div class="rw-prevail-director">
                        <div class="rw-prevail-director-card">
                            <img src="{{ asset('images/directors/prevail-director.jpg') }}"
                                alt="Director - PRevail Robotics" onerror="this.style.display='none'">

                            <div class="rw-prevail-director-fallback">
                                <div class="rw-prevail-director-initials">PR</div>
                                <div class="rw-prevail-director-fallback-sub">
                                    Director — PRevail Robotics
                                </div>
                            </div>

                            <div class="rw-prevail-director-overlay"></div>

                            <div class="rw-prevail-director-caption">
                                <div class="rw-prevail-director-kicker">PRevail Robotics</div>
                                <div class="rw-prevail-director-title">Director</div>
                            </div>
                        </div>
                    </div>

                    {{-- Main Story Card (RIGHT) --}}
                    <div class="mail-story-card mail-story-card--left">
                        <p>
                            RoboWelt is built on a strong foundation of experience and innovation. Our journey began as
                            <strong>PRevail Robotics</strong>, delivering robotics solutions, hands-on training programs,
                            and
                            technology services across domains. As our vision expanded and our capabilities grew, we unified
                            our expertise, team, and mission under a single, stronger identity —
                            <strong>RoboWelt Systems Pvt. Ltd.</strong>
                            We deliver innovative, reliable, and scalable robotics and automation systems that help
                            manufacturers improve efficiency, productivity, and performance.
                        </p>
                    </div>

                

            </div>

            {{-- Mission & Vision (below story, unchanged) --}}
            <div class="rw-reveal rw-mv-wrap">
                <div class="rw-mv-head">
                    <h2 class="rw-h2">Our Mission &amp; Vision</h2>
                    <p class="rw-p rw-muted">Built for manufacturing performance, uptime, and repeatability.</p>
                </div>

                <div class="rw-mv-grid">
                    {{-- Mission --}}
                    <div class="rw-mv-card rw-mv-mission">
                        <div class="rw-mv-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3>Mission</h3>
                        <p>
                            Enable manufacturers worldwide through reliable, efficient robotics solutions backed by
                            rapid deployment and 24/7 technical support.
                        </p>
                    </div>

                    {{-- Vision (center highlight) --}}
                    <div class="rw-mv-card rw-mv-vision">
                        <div class="rw-mv-icon rw-mv-icon-lg">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3>Vision</h3>
                        <p>
                            Be a globally trusted leader in intelligent automation and robotics engineering — setting
                            benchmarks in quality, safety, and manufacturing performance.
                        </p>
                    </div>

                    {{-- Goals --}}
                    <div class="rw-mv-card rw-mv-goals">
                        <div class="rw-mv-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                        </div>
                        <h3>Goals</h3>
                        <p>
                            Deliver scalable automation systems that improve efficiency, productivity, and long-term
                            plant performance.
                        </p>
                    </div>
                </div>
            </div>

    </div>
    </section>

    {{-- =========================
    FROM PREVAIL TO ROBOWELT (TIMELINE MOVED HERE)
========================= --}}
    <section class="rw-section rw-soft" id="rw-evolution">
        <div class="rw-wrap rw-evolution-grid">

            <!-- LEFT COLUMN (title + image card together) -->
            <div class="rw-reveal rw-evolution-left">
                <h2 class="rw-h2">From PRevail to RoboWelt</h2>
                <p class="rw-p rw-muted">A clear timeline of growth, capability, and long-term manufacturing focus.</p>

                <div class="rw-evolution-card">
                    <img src="{{ asset('images/prevail-to-robowelt.png') }}"
                        alt="From Prevail Robotics to RoboWelt Systems" onerror="this.style.display='none'" />
                    <div class="rw-evolution-overlay"></div>
                </div>
            </div>

            <!-- RIGHT COLUMN (timeline) -->
            <div class="rw-reveal rw-evolution-right">
                <div class="rw-card rw-timeline rw-timeline-colored">
                    <div class="rw-t-item">
                        <div class="rw-dot rw-dot-blue"></div>
                        <div>
                            <div class="rw-t-title">PRevail Robotics</div>
                            <div class="rw-t-text">Robotics delivery + training + technology services.</div>
                        </div>
                    </div>

                    <div class="rw-t-item">
                        <div class="rw-dot rw-dot-orange"></div>
                        <div>
                            <div class="rw-t-title">Growth &amp; Focus</div>
                            <div class="rw-t-text">Expanded engineering depth and manufacturing delivery standards.
                            </div>
                        </div>
                    </div>

                    <div class="rw-t-item">
                        <div class="rw-dot rw-dot-blue"></div>
                        <div>
                            <div class="rw-t-title">RoboWelt Systems Pvt. Ltd.</div>
                            <div class="rw-t-text">Unified identity for intelligent automation &amp; long-term
                                partnerships.</div>
                        </div>
                    </div>

                    <div class="rw-t-footer">
                        <div class="rw-t-footer-title">Built for long-term manufacturing partnerships</div>
                        <div class="rw-t-footer-text">From single cells to complete lines — engineered for uptime,
                            safety, and speed.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- =========================
    CORE CAPABILITIES (add colorful, brand-feel cards)
  ========================= --}}
    <section class="rw-section">
        <div class="rw-wrap">
            <div class="rw-reveal rw-head">
                <h2 class="rw-h2">Core Capabilities</h2>
                <p class="rw-p rw-muted">End-to-end automation delivery — from concept to commissioning and lifecycle
                    support.</p>
            </div>

            <div class="rw-reveal rw-caps">
                <div class="rw-cap rw-cap-blue">
                    <div class="rw-cap-icon rw-icon-blue">⚙️</div>
                    <div class="rw-cap-title">Robotic System Integration</div>
                    <div class="rw-cap-text">Design, simulation, integration, commissioning, and optimization of
                        robotic
                        cells.</div>
                </div>

                <div class="rw-cap rw-cap-orange">
                    <div class="rw-cap-icon rw-icon-orange">🧩</div>
                    <div class="rw-cap-title">Custom Robotics Development</div>
                    <div class="rw-cap-text">Application-specific cells, EOAT, fixtures, and vision-based systems.
                    </div>
                </div>

                <div class="rw-cap rw-cap-blue">
                    <div class="rw-cap-icon rw-icon-blue">🛠️</div>
                    <div class="rw-cap-title">Maintenance, Repair &amp; Support</div>
                    <div class="rw-cap-text">Preventive &amp; breakdown maintenance, retrofits, upgrades, AMCs with
                        24/7 availability.</div>
                </div>

                <div class="rw-cap rw-cap-orange">
                    <div class="rw-cap-icon rw-icon-orange">📈</div>
                    <div class="rw-cap-title">Automation Consulting</div>
                    <div class="rw-cap-text">Feasibility, automation strategy, ROI analysis, and process optimization.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
                                                                                  ROBOTIC PLATFORMS + APPLICATION EXPERTISE (Airocode-style)
                                                                                ========================= -->
    <section class="rw-wwd" id="rw-platforms-apps">
        <div class="rw-wrap">

            <div class="rw-reveal rw-wwd-head">
                <h2 class="rw-wwd-h2">Robotic Platforms &amp; Application Expertise</h2>
                <p class="rw-wwd-sub">Built for accuracy, repeatability, and cycle-time optimization.</p>
            </div>

            <div class="rw-wwd-grid">

                <!-- LEFT: Robotic Platforms (replaces the image block) -->
                <div class="rw-reveal rw-wwd-left">
                    <div class="rw-wwd-media">
                        <div class="rw-wwd-mediaOverlay"></div>

                        <div class="rw-wwd-mediaContent">
                            <div class="rw-wwd-kicker">Robotic Platforms</div>
                            <div class="rw-wwd-title">Multi-brand expertise across leading global robot brands.</div>

                            <div class="rw-wwd-tags">
                                <span class="rw-wwd-tag rw-wwd-tag-blue">FANUC</span>
                                <span class="rw-wwd-tag rw-wwd-tag-amber">KUKA</span>
                                <span class="rw-wwd-tag rw-wwd-tag-blue">ABB</span>
                                <span class="rw-wwd-tag rw-wwd-tag-amber">NACHI</span>
                                <span class="rw-wwd-tag rw-wwd-tag-blue">YASKAWA (Motoman)</span>
                            </div>

                            <div class="rw-wwd-mini">
                                <div class="rw-wwd-miniItem">
                                    <span class="rw-wwd-miniNum">5+</span>
                                    <span class="rw-wwd-miniLbl">Brands</span>
                                </div>
                                <div class="rw-wwd-miniItem">
                                    <span class="rw-wwd-miniNum">7+</span>
                                    <span class="rw-wwd-miniLbl">Applications</span>
                                </div>
                                <div class="rw-wwd-miniItem">
                                    <span class="rw-wwd-miniNum">24/7</span>
                                    <span class="rw-wwd-miniLbl">Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Application Expertise (like Airocode cards) -->
                <div class="rw-reveal rw-wwd-right">
                    <div class="rw-wwd-cards">

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-amber">
                                <!-- welding -->
                                <svg class="rw-wwd-ico" fill="none" stroke="#0b1220" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M12 2v6"></path>
                                    <path d="M9 8h6"></path>
                                    <path d="M7 12l5 10 5-10"></path>
                                </svg>
                            </div>
                            <div>
                                <h3>Spot Welding</h3>
                                <p>High repeatability and stable cycle-times for BIW production.</p>
                            </div>
                        </div>

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-blue">
                                <!-- mig/mag -->
                                <svg class="rw-wwd-ico" fill="none" stroke="white" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <!-- torch body -->
                                    <path d="M4 20l6-6"></path>
                                    <path d="M6 22l8-8"></path>

                                    <!-- welding arc -->
                                    <path d="M14 6c1.5 0 3 .5 4 1.5"></path>
                                    <path d="M13 9c1 .2 2 .6 3 1.4"></path>
                                    <path d="M12 12c.8.2 1.6.6 2.2 1.2"></path>

                                    <!-- spark -->
                                    <line x1="18" y1="4" x2="20" y2="2"></line>
                                </svg>

                            </div>
                            <div>
                                <h3>MIG / MAG Welding</h3>
                                <p>Clean process control with optimized torch paths and approach angles.</p>
                            </div>
                        </div>

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-amber">
                                <!-- laser -->
                                <svg class="rw-wwd-ico" fill="none" stroke="#0b1220" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M12 2v6"></path>
                                    <path d="M5 12h14"></path>
                                    <path d="M7 19l10-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3>Laser Welding</h3>
                                <p>Precision seams with repeatable focusing, speed and path consistency.</p>
                            </div>
                        </div>

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-blue">
                                <!-- handling -->
                                <svg class="rw-wwd-ico" fill="none" stroke="white" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M3 7h18"></path>
                                    <path d="M6 7v13h12V7"></path>
                                    <path d="M9 7V4h6v3"></path>
                                </svg>
                            </div>
                            <div>
                                <h3>Material Handling</h3>
                                <p>Palletizing, machine tending and material flow optimization.</p>
                            </div>
                        </div>

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-amber">
                                <!-- sealing -->
                                <svg class="rw-wwd-ico" fill="none" stroke="#0b1220" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M7 3h10v4H7z"></path>
                                    <path d="M9 7v14"></path>
                                    <path d="M15 7v14"></path>
                                    <path d="M9 14h6"></path>
                                </svg>
                            </div>
                            <div>
                                <h3>Gluing &amp; Sealing</h3>
                                <p>Consistent bead quality with stable speed and corner handling.</p>
                            </div>
                        </div>

                        <div class="rw-wwd-card">
                            <div class="rw-wwd-icon rw-wwd-icon-blue">
                                <!-- hemming -->
                                <svg class="rw-wwd-ico" fill="none" stroke="white" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M4 6h16"></path>
                                    <path d="M6 10h12"></path>
                                    <path d="M8 14h8"></path>
                                    <path d="M10 18h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3>Hemming Applications</h3>
                                <p>Robust sequences for panel joining with repeatable force paths.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- =========================
    INDUSTRIES + USP (colorize plain areas)
  ========================= --}}
    <section class="rw-section rw-choose">
        <div class="rw-wrap rw-choose-grid">

            <!-- LEFT: Industries (big media card like the 2nd image) -->
            <div class="rw-reveal">
                <h2 class="rw-h2">Industries Served</h2>

                <div class="rw-featureStack">

                    <div class="rw-featureCard rw-feature-blue">
                        <div class="rw-featureIcon">🚗</div>
                        <div>
                            <div class="rw-featureTitle">Automotive OEMs & Tier-1 Suppliers</div>
                            <div class="rw-featureText">
                                BIW welding lines, robotic handling cells, hemming systems, and high-volume production
                                automation.
                            </div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-amber">
                        <div class="rw-featureIcon">🏭</div>
                        <div>
                            <div class="rw-featureTitle">Manufacturing & Industrial Automation</div>
                            <div class="rw-featureText">
                                Component manufacturing, flexible assembly lines, and productivity-driven automation
                                systems.
                            </div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-blue">
                        <div class="rw-featureIcon">⚙️</div>
                        <div>
                            <div class="rw-featureTitle">Process & Heavy Industries</div>
                            <div class="rw-featureText">
                                Automation solutions for demanding environments with focus on uptime, safety, and
                                repeatability.
                            </div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-amber">
                        <div class="rw-featureIcon">📦</div>
                        <div>
                            <div class="rw-featureTitle">Material Handling & Logistics</div>
                            <div class="rw-featureText">
                                Robotic palletizing, machine tending, and material flow optimization across production
                                facilities.
                            </div>
                        </div>
                    </div>



                </div>
            </div>


            <!-- RIGHT: Why RoboWelt (stacked cards like 2nd image) -->
            <div class="rw-reveal">
                <h2 class="rw-h2">Why RoboWelt</h2>

                <div class="rw-featureStack">
                    <div class="rw-featureCard rw-feature-amber">
                        <div class="rw-featureIcon">✓</div>
                        <div>
                            <div class="rw-featureTitle">Specialized multi-brand robotics expertise</div>
                            <div class="rw-featureText">Experienced across leading robot platforms and plant
                                integrations.</div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-blue">
                        <div class="rw-featureIcon">🚀</div>
                        <div>
                            <div class="rw-featureTitle">Rapid project execution and deployment</div>
                            <div class="rw-featureText">Structured delivery with clear timelines and faster
                                commissioning.</div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-amber">
                        <div class="rw-featureIcon">🛠️</div>
                        <div>
                            <div class="rw-featureTitle">24/7 technical and service support</div>
                            <div class="rw-featureText">Support readiness for uptime-critical production environments.
                            </div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-blue">
                        <div class="rw-featureIcon">⚙️</div>
                        <div>
                            <div class="rw-featureTitle">Proprietary engineering methodologies</div>
                            <div class="rw-featureText">Standardized approach for quality, safety, and repeatability.
                            </div>
                        </div>
                    </div>

                    <div class="rw-featureCard rw-feature-amber">
                        <div class="rw-featureIcon">🛡️</div>
                        <div>
                            <div class="rw-featureTitle">Globally aligned quality and safety standards</div>
                            <div class="rw-featureText">Built to match manufacturing benchmarks and compliance needs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- keep your banner as-is -->
        <div class="rw-wrap rw-reveal" style="margin-top:18px;">
            <div class="rw-banner">
                <div>
                    <div class="rw-banner-title">Ready to automate your next production line?</div>
                    <div class="rw-banner-text">Share scope, timeline, and robot/PLC stack — we’ll respond quickly with
                        the right approach.</div>
                </div>
                <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-primary rw-btn-small">Request a Quote
                    <span>→</span></a>
            </div>
        </div>
    </section>


    {{-- =========================
    LEADERSHIP CONTACT (make cards less plain)
  ========================= --}}
    <section class="rw-section rw-leadership-glass" id="rw-contact">
        <div class="rw-leadership-bg">

        </div>

        <div class="rw-wrap">
            <div class="rw-reveal rw-head">
                <h2 class="rw-h2">Leadership &amp; Contact</h2>
                <p class="rw-p rw-muted">Connect directly with our directors.</p>
            </div>

            <div class="rw-reveal rw-leads rw-leads-standout">

                <!-- 1 -->
                <div class="rw-lead-card rw-lead-blue">

                    <div class="rw-lead-header">
                        <div class="rw-lead-name">Mr. Pandurang Maske</div>
                        <div class="rw-lead-role">Director</div>
                    </div>

                    <div class="rw-lead-photo">
                        <img src="{{ asset('images/directors/pandurang.jpg') }}" alt="Pandurang Maske"
                            onerror="this.style.display='none'">
                        <span class="rw-lead-placeholder">PM</span>
                    </div>

                    <div class="rw-lead-contacts">
                        <a class="rw-link" href="mailto:pandurang@roboweltsystems.com">
                            pandurang@roboweltsystems.com
                        </a>
                        <a class="rw-link" href="tel:+919689521121">
                            +91 96895 21121
                        </a>
                    </div>

                </div>

                <!-- 2 -->
                <div class="rw-lead-card rw-lead-blue">

                    <div class="rw-lead-header">
                        <div class="rw-lead-name">Mr. Vijaysinh Desai</div>
                        <div class="rw-lead-role">Director</div>
                    </div>

                    <div class="rw-lead-photo">
                        <img src="{{ asset('images/directors/Vijaysinh.jpg') }}" alt="Vijaysinh Desai"
                            onerror="this.style.display='none'">
                        <span class="rw-lead-placeholder">VD</span>
                    </div>

                    <div class="rw-lead-contacts">
                        <a class="rw-link" href="mailto:vijaysinh@roboweltsystems.com">
                            vijaysinh@roboweltsystems.com
                        </a>
                        <a class="rw-link" href="tel:+91 97647 30834">
                            +91 97647 30834
                        </a>
                    </div>

                </div>

                <!-- 3 -->
                <div class="rw-lead-card rw-lead-blue">

                    <div class="rw-lead-header">
                        <div class="rw-lead-name">Mr. Rahul Patil</div>
                        <div class="rw-lead-role">Director</div>
                    </div>

                    <div class="rw-lead-photo">
                        <img src="{{ asset('images/directors/Rahul.jpg') }}" alt="Rahul Patil"
                            onerror="this.style.display='none'">
                        <span class="rw-lead-placeholder">RP</span>
                    </div>

                    <div class="rw-lead-contacts">
                        <a class="rw-link" href="mailto:rahul@roboweltsystems.com">
                            rahul@roboweltsystems.com
                        </a>
                        <a class="rw-link" href="tel:+91 80872 70319">
                            +91 80872 70319
                        </a>
                    </div>

                </div>


            </div>

        </div>
        </div>
    </section>

    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.rw-reveal');
            if (!items.length) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('is-visible');
                });
            }, {
                threshold: 0.12,
                rootMargin: "0px 0px -10% 0px"
            });

            items.forEach(el => observer.observe(el));
        });
    </script>

@endsection
