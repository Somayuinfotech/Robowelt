@extends('layouts.robowelt')

@section('title', 'Robot Programming – RoboWelt Systems')

@section('meta_description', 'Robot programming services for industrial automation: teach pendant, offline programming and commissioning support across FANUC, ABB, KUKA, Yaskawa and more. Reliable cycles, safe interlocks and clean handover.')
@section('meta_keywords', 'robot programming, FANUC programming, ABB RAPID, KUKA KRL, Yaskawa programming, industrial robot commissioning, teach pendant programming, offline programming')
@section('meta_robots', 'index, follow')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/robowelt-service-single.css') }}">

    <div class="rw-svc rw-svc--robot">

        <section class="rw-svc-hero" id="top">
            <div class="rw-svc-hero-media">
                <img src="{{ asset('images/service-hero.jpg') }}" class="rw-svc-hero-img" alt="Robot Programming"
                    onerror="this.style.display='none'">
            </div>
            <div class="rw-svc-hero-overlay"></div>
            <div class="rw-svc-hero-glow left"></div>
            <div class="rw-svc-hero-glow right"></div>

            <div class="rw-container rw-svc-hero-inner">
                <div>
                    <div class="rw-crumb">
                        <span>Robot Programming</span>
                    </div>

                    <div class="rw-svc-badge">Robotics • Cycle-time • Recovery</div>

                    <h1 class="rw-svc-title">Optimized robot motion with clean integration to PLC, vision & safety</h1>
                    <p class="rw-svc-sub">
                        Cycle-time optimization, accurate tooling frames, robust error handling and repeatable recovery
                        routines — designed for stable production.
                    </p>

                    <div class="rw-svc-actions">
                        <a class="rw-btn rw-btn-primary" href="#enquiry">Request Robot proposal</a>
                        <a class="rw-btn rw-btn-dark" href="#scope">View scope</a>
                        <a class="rw-btn rw-btn-dark" href="{{ url('/robowelt/contact') }}">Talk to us</a>
                    </div>

                    <div class="rw-kpis">
                        <div class="rw-kpi">
                            <div class="t">Cycle-time</div>
                            <div class="s">Path smoothing + tuning</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Integration</div>
                            <div class="s">PLC ↔ robot handshakes</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Recovery</div>
                            <div class="s">Production-ready routines</div>
                        </div>
                    </div>
                </div>

                <div class="rw-hero-glass">
                    <div class="top">
                        <div>
                            <div class="title">Quick inquiry checklist</div>
                            <div class="sub">Share these for a faster & accurate proposal.</div>
                        </div>
                        <div class="pill">ROBOT</div>
                    </div>

                    <ul>
                        <li><span class="dot"></span>Robot brand + application (weld/handling/sealing)</li>
                        <li><span class="dot"></span>Integration scope (PLC/vision/safety/peripherals)</li>
                        <li><span class="dot"></span>Plant location + timeline</li>
                        <li><span class="dot"></span>Docs: layout, cycle-time target, IO/handshake</li>
                    </ul>

                    <div class="actions">
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request quote</a>
                        {{-- <a class="rw-btn rw-btn-outline rw-wide" href="{{ url('/robowelt/contact') }}">Book a call</a> --}}
                    </div>
                </div>
            </div>

            <div class="rw-hero-bottom"></div>
        </section>

        <section class="rw-section rw-sec-tint" id="scope">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">WHAT YOU GET</div>
                        <h2 class="rw-h2">Robot programs built for uptime</h2>
                        <p class="rw-p">Stable sequences, repeatable recovery and clear documentation for operators and
                            maintenance.</p>
                    </div>
                    <a class="rw-btn rw-btn-outline" href="{{ url('/robowelt/contact') }}">Talk to an expert</a>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">Brands</span>
                            <div class="rw-ic">🤖</div>
                        </div>
                        <h3>Robot brands</h3>
                        <p>FANUC, ABB, KUKA, Yaskawa/Motoman, Kawasaki, UR, Comau.</p>
                        <div class="link">Multi-brand support <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">Applications</span>
                            <div class="rw-ic">🧩</div>
                        </div>
                        <h3>Applications</h3>
                        <p>Material handling, spot/arc welding, sealing/gluing, fastening, vision guidance,
                            deburr/polish/finish.</p>
                        <div class="link">Production-ready <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">Focus</span>
                            <div class="rw-ic">⚡</div>
                        </div>
                        <h3>What we focus on</h3>
                        <p>Cycle-time, handshakes, tool data accuracy, error handling and clean recovery.</p>
                        <div class="link">Uptime-first <span>→</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rw-section rw-sec-soft" id="details">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DETAILS</div>
                        <h2 class="rw-h2">Integration with PLC, vision & safety</h2>
                        <p class="rw-p">Programs that work in the real cell — not just in teach mode.</p>
                    </div>
                </div>

                <div class="rw-detail">
                    <div>
                        <h4>Optimized motion + robust cell behavior</h4>
                        <div class="desc">
                            Cycle-time optimization, accurate tooling frames, robust error handling and repeatable recovery
                            routines designed for stable production.
                        </div>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini--blue">
                                <div class="t">Brands</div>
                                <ul>
                                    <li>FANUC, ABB, KUKA</li>
                                    <li>Yaskawa / Motoman</li>
                                    <li>Kawasaki, UR, Comau</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini--amber">
                                <div class="t">Applications</div>
                                <ul>
                                    <li>Material handling, welding</li>
                                    <li>Sealing/gluing, fastening</li>
                                    <li>Inspection / vision guidance</li>
                                    <li>Deburr/polish/finish</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="rw-side rw-side--blue">
                        <div class="st">What we focus on</div>
                        <ul class="rw-check">
                            <li>Cycle-time + path smoothing</li>
                            <li>Interlocks, handshakes, recovery</li>
                            <li>Tool data & accuracy tuning</li>
                            <li>Production-ready documentation</li>
                        </ul>
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request Robot proposal</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="rw-section rw-sec-tint" id="workflow">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DELIVERY</div>
                        <h2 class="rw-h2">Simple delivery workflow</h2>
                        <p class="rw-p">Aligned to safety, handshakes and cycle-time outcomes.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">01</span>
                            <div class="rw-ic">📐</div>
                        </div>
                        <h3>Cell understanding</h3>
                        <p>Layout, application, IO/handshake, safety zones, cycle-time target.</p>
                        <div class="link">Lock assumptions <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">02</span>
                            <div class="rw-ic">🧭</div>
                        </div>
                        <h3>Program & tune</h3>
                        <p>Paths, frames, recovery, error handling, interlocks and handshakes.</p>
                        <div class="link">Uptime-first logic <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">03</span>
                            <div class="rw-ic">🧪</div>
                        </div>
                        <h3>Validate & handover</h3>
                        <p>Run trials, stabilize, document, train and deliver backups.</p>
                        <div class="link">Production stability <span>→</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rw-section" id="faq">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">FAQ</div>
                        <h2 class="rw-h2">Common questions</h2>
                        <p class="rw-p">Quick answers to reduce back-and-forth.</p>
                    </div>
                </div>

                <div class="rw-faq">
                    <details>
                        <summary>Do you handle PLC handshakes & interlocks? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — we define and implement stable PLC↔Robot handshakes, interlocks and
                            recovery behavior.</div>
                    </details>
                    <details>
                        <summary>Can you integrate vision systems? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — vision-guided pick/inspect flows with robust error handling and re-try
                            logic.</div>
                    </details>
                    <details>
                        <summary>What do you need to start? <span class="chev">⌄</span></summary>
                        <div class="ans">Robot brand, application, layout/cycle target, IO/handshake info, timeline and
                            location.</div>
                    </details>
                </div>
            </div>
        </section>

        <section class="rw-section rw-sec-deep" id="enquiry">
            <div class="rw-container">
                <div class="rw-cta">
                    <div>
                        <div class="small">Need a quick estimate?</div>
                        <div class="big">Share your scope and timeline — we’ll respond with next steps.</div>
                    </div>
                    <div class="cta-actions">
                        <a class="rw-btn rw-btn-primary" href="{{ url('/robowelt/contact') }}">Request estimate</a>
                        {{-- <a class="rw-btn rw-btn-outline" href="{{ url('/robowelt/contact') }}">Book a call</a> --}}
                    </div>
                </div>
            </div>
        </section>

        @includeIf('robowelt.partials.contact')

    </div>
@endsection
