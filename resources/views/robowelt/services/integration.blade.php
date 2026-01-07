@extends('layouts.robowelt')

@section('title', 'Systems Integration – RoboWelt Systems')

@section('meta_description', 'Turnkey systems integration for industrial automation: robotics, PLC/HMI, safety, commissioning and documentation-first handover for BIW & Non-BIW manufacturing lines.')
@section('meta_keywords', 'systems integration, industrial automation integration, turnkey automation, robotics integration, PLC HMI integration, safety systems, commissioning, BIW automation')
@section('meta_robots', 'index, follow')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/robowelt-service-single.css') }}">

    <div class="rw-svc rw-svc--integration">

        <section class="rw-svc-hero" id="top">
            <div class="rw-svc-hero-media">
                <img src="{{ asset('images/service-hero.jpg') }}" class="rw-svc-hero-img" alt="Systems Integration"
                    onerror="this.style.display='none'">
            </div>
            <div class="rw-svc-hero-overlay"></div>
            <div class="rw-svc-hero-glow left"></div>
            <div class="rw-svc-hero-glow right"></div>

            <div class="rw-container rw-svc-hero-inner">
                <div>
                    <div class="rw-crumb">
                        <span>Systems Integration</span>
                    </div>

                    <div class="rw-svc-badge">Integration • Turnkey cells • Ramp-up</div>

                    <h1 class="rw-svc-title">Turnkey automation cells with safe, stable ramp-up</h1>
                    <p class="rw-svc-sub">
                        Complete integration of robots, conveyors, fixtures, sensors, vision and safety — including
                        installation, commissioning and production stabilization.
                    </p>

                    <div class="rw-svc-actions">
                        <a class="rw-btn rw-btn-primary" href="#enquiry">Request Integration proposal</a>
                        <a class="rw-btn rw-btn-outline" href="#scope">View scope</a>
                        <a class="rw-btn rw-btn-dark" href="{{ url('/robowelt/contact') }}">Talk to us</a>
                    </div>

                    <div class="rw-kpis">
                        <div class="rw-kpi">
                            <div class="t">Turnkey</div>
                            <div class="s">Cells • stations • lines</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Safety-first</div>
                            <div class="s">Zones • interlocks • devices</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Ramp-up</div>
                            <div class="s">Stable recovery + training</div>
                        </div>
                    </div>
                </div>

                <div class="rw-hero-glass">
                    <div class="top">
                        <div>
                            <div class="title">Quick inquiry checklist</div>
                            <div class="sub">Share these for a faster & accurate proposal.</div>
                        </div>
                        <div class="pill">INTEGRATION</div>
                    </div>

                    <ul>
                        <li><span class="dot"></span>Line type + throughput goal</li>
                        <li><span class="dot"></span>Scope: EOAT / safety / vision / install</li>
                        <li><span class="dot"></span>Plant location + timeline</li>
                        <li><span class="dot"></span>Docs: layout, IO list, cycle target</li>
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
                        <h2 class="rw-h2">Integration that feels “owned” — not stitched together</h2>
                        <p class="rw-p">Turnkey delivery with safety, documentation and ramp-up support.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">Elements</span>
                            <div class="rw-ic">🧰</div>
                        </div>
                        <h3>Integration elements</h3>
                        <p>EOAT, fixtures, conveyors, safety zones, sensors, vision systems and PLC↔Robot handshakes.</p>
                        <div class="link">Cell-ready build <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">Handover</span>
                            <div class="rw-ic">📦</div>
                        </div>
                        <h3>Handover package</h3>
                        <p>As-built docs, backups, commissioning checklist, training, operating notes, ramp-up support.</p>
                        <div class="link">Clean handover <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">Ideal for</span>
                            <div class="rw-ic">🏁</div>
                        </div>
                        <h3>Ideal when you need</h3>
                        <p>Turnkey ownership, faster commissioning, stable recovery & safety, documentation-first handover.
                        </p>
                        <div class="link">Lower downtime <span>→</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rw-section rw-sec-soft" id="details">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DETAILS</div>
                        <h2 class="rw-h2">From install to stabilization</h2>
                        <p class="rw-p">We integrate, commission and support ramp-up until it’s stable.</p>
                    </div>
                </div>

                <div class="rw-detail">
                    <div>
                        <h4>Turnkey automation cells with safe, stable ramp-up</h4>
                        <div class="desc">
                            Complete integration of robots, conveyors, fixtures, sensors, vision and safety — including
                            installation, commissioning and production stabilization.
                        </div>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini--blue">
                                <div class="t">Integration elements</div>
                                <ul>
                                    <li>EOAT, fixtures, conveyors</li>
                                    <li>Safety (zones, interlocks, devices)</li>
                                    <li>Vision systems + sensors</li>
                                    <li>PLC ↔ Robot handshakes</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini--amber">
                                <div class="t">Handover package</div>
                                <ul>
                                    <li>As-built docs + backups</li>
                                    <li>Commissioning checklist</li>
                                    <li>Training + operating notes</li>
                                    <li>Support during ramp-up</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="rw-side rw-side--blue">
                        <div class="st">Ideal when you need</div>
                        <ul class="rw-check">
                            <li>Turnkey ownership</li>
                            <li>Faster commissioning</li>
                            <li>Stable recovery & safety</li>
                            <li>Documentation-first handover</li>
                        </ul>
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request Integration proposal</a>
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
                        <p class="rw-p">Clear stages, measurable outcomes, stable ramp-up.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">01</span>
                            <div class="rw-ic">🧩</div>
                        </div>
                        <h3>Design & planning</h3>
                        <p>Layout, safety concept, IO/handshake, BOM readiness and timeline plan.</p>
                        <div class="link">Right foundation <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">02</span>
                            <div class="rw-ic">🏗️</div>
                        </div>
                        <h3>Integration & install</h3>
                        <p>Build, wire, integrate sensors/vision/safety and prepare commissioning.</p>
                        <div class="link">Turnkey build <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">03</span>
                            <div class="rw-ic">🚀</div>
                        </div>
                        <h3>Commission & stabilize</h3>
                        <p>Commission, validate recovery, train team, deliver docs, support ramp-up.</p>
                        <div class="link">Stable ramp-up <span>→</span></div>
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
                        <summary>Do you provide onsite commissioning? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — installation, commissioning and stabilization support are part of turnkey
                            integration.</div>
                    </details>
                    <details>
                        <summary>Do you include safety integration? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — zones, interlocks, devices and recovery behavior aligned to safety
                            requirements.</div>
                    </details>
                    <details>
                        <summary>What do you need to start? <span class="chev">⌄</span></summary>
                        <div class="ans">Line type, throughput goal, layout, IO/handshake, timeline and location.</div>
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
