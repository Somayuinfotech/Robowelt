@extends('layouts.robowelt')

@section('title', 'PLC Programming – RoboWelt Systems')

@section('meta_description', 'PLC programming services for industrial automation: Siemens, Rockwell, Mitsubishi and
    more. Commissioning-ready logic, clean tags, alarms, documentation and onsite support.')
@section('meta_keywords', 'PLC programming, Siemens TIA Portal, S7-1500, Rockwell Allen Bradley, HMI SCADA integration,
    industrial automation')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/robowelt-service-single.css') }}">

    <div class="rw-svc rw-svc--plc">

        {{-- HERO --}}
        <section class="rw-svc-hero" id="top">
            <div class="rw-svc-hero-media">
                <img src="{{ asset('images/sub-services-hero.jpg') }}" class="rw-svc-hero-img" alt="PLC Programming"
                    onerror="this.style.display='none'">
            </div>
            <div class="rw-svc-hero-overlay"></div>
            <div class="rw-svc-hero-glow left"></div>
            <div class="rw-svc-hero-glow right"></div>

            <div class="rw-container rw-svc-hero-inner">
                <div>
                    <div class="rw-crumb">
                        <span>PLC Programming</span>
                    </div>

                    <div class="rw-svc-badge">Controls • Commissioning-ready delivery</div>

                    <h1 class="rw-svc-title">PLC Programming that’s stable, maintainable, and commissioning-ready</h1>
                    <p class="rw-svc-sub">
                        From architecture to onsite support — structured logic, clean tags, alarms and documentation aligned
                        to plant standards for fast handover and low downtime.
                    </p>

                    <div class="rw-svc-actions">
                        <a class="rw-btn rw-btn-primary" href="#enquiry">Request PLC proposal</a>
                        <a class="rw-btn rw-btn-outline" href="#scope">View scope</a>
                        <a class="rw-btn rw-btn-dark" href="{{ url('contact') }}">Talk to us</a>
                    </div>

                    <div class="rw-kpis">
                        <div class="rw-kpi">
                            <div class="t">Plant-ready</div>
                            <div class="s">Standards • alarms • safety</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Clean handover</div>
                            <div class="s">As-built docs + backups</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">&lt; 24 hrs</div>
                            <div class="s">Avg. response time</div>
                        </div>
                    </div>
                </div>

                <div class="rw-hero-glass">
                    <div class="top">
                        <div>
                            <div class="title">Quick inquiry checklist</div>
                            <div class="sub">Share these for a faster & accurate proposal.</div>
                        </div>
                        <div class="pill">PLC</div>
                    </div>

                    <ul>
                        <li><span class="dot"></span>Platform + network (Profinet / EthIP / OPC)</li>
                        <li><span class="dot"></span>Scope: logic / HMI / commissioning / upgrades</li>
                        <li><span class="dot"></span>Plant location + timeline</li>
                        <li><span class="dot"></span>Docs: IO list, layout, standards (if any)</li>
                    </ul>

                    <div class="actions">
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request quote</a>
                        {{-- <a class="rw-btn rw-btn-outline rw-wide" href="{{ url('/robowelt/contact') }}">Book a call</a> --}}
                    </div>
                </div>
            </div>

            <div class="rw-hero-bottom"></div>
        </section>

        {{-- PREMIUM CARDS --}}
        <section class="rw-section rw-sec-tint" id="scope">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">WHAT YOU GET</div>
                        <h2 class="rw-h2">Controls delivery that survives real production</h2>
                        <p class="rw-p">Documentation-first logic, clean diagnostics, and commissioning-ready structure.
                        </p>
                    </div>
                    <a class="rw-btn rw-btn-dark" href="{{ url('/robowelt/contact') }}">Talk to an expert</a>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top">
                            <span class="rw-pill">Platforms</span>
                            <div class="rw-ic">⚙️</div>
                        </div>
                        <h3>Platforms supported</h3>
                        <p>Siemens (TIA, S7-1200/1500/300/400), Rockwell/AB, Mitsubishi, Delta, ABB PLCs.</p>
                        <div class="link">Ready for plant standards</div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top">
                            <span class="rw-pill">Deliverables</span>
                            <div class="rw-ic">📦</div>
                        </div>
                        <h3>Typical deliverables</h3>
                        <p>I/O mapping, tag structure, alarm philosophy, reusable blocks, HMI screens, SAT/FAT checklists.
                        </p>
                        <div class="link">Clean handover package </div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top">
                            <span class="rw-pill">Outcome</span>
                            <div class="rw-ic">✅</div>
                        </div>
                        <h3>What success looks like</h3>
                        <p>Stable sequences, safe interlocks, fast troubleshooting, repeatable recovery, predictable
                            cycle-time.</p>
                        <div class="link">Production stability </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- DETAIL BLOCK --}}
        <section class="rw-section rw-sec-soft" id="details">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DETAILS</div>
                        <h2 class="rw-h2">Engineering structure + commissioning support</h2>
                        <p class="rw-p">Built for maintainability and uptime — not just “it runs once”.</p>
                    </div>
                </div>

                <div class="rw-detail">
                    <div>
                        <h4>Controls engineering built for fast handover</h4>
                        <div class="desc">
                            From architecture to commissioning support — structured logic, clean tags, alarms, and
                            documentation aligned to plant standards for low downtime.
                        </div>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini--amber">
                                <div class="t">Platforms</div>
                                <ul>
                                    <li>Siemens (TIA Portal, S7 family)</li>
                                    <li>Rockwell / Allen-Bradley</li>
                                    <li>Mitsubishi Electric</li>
                                    <li>Delta / ABB PLCs</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini--blue">
                                <div class="t">Handover package</div>
                                <ul>
                                    <li>Alarm philosophy + diagnostics</li>
                                    <li>Standards + reusable blocks</li>
                                    <li>Backups + as-built docs</li>
                                    <li>Training notes + checklists</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="rw-side rw-side--amber">
                        <div class="st">Typical scope</div>
                        <ul class="rw-check">
                            <li>Sequence logic & safety interlocks</li>
                            <li>Networks (Profinet / EthIP / OPC)</li>
                            <li>HMI/SCADA integration</li>
                            <li>Onsite commissioning + stabilization</li>
                        </ul>
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request PLC proposal</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- WORKFLOW (cards) --}}
        <section class="rw-section rw-sec-tint" id="workflow">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DELIVERY</div>
                        <h2 class="rw-h2">Simple delivery workflow</h2>
                        <p class="rw-p">Clear steps, predictable outputs, and documentation-first handover.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">01</span>
                            <div class="rw-ic">🧾</div>
                        </div>
                        <h3>Scope & standards</h3>
                        <p>Collect IO list, standards, alarms, network map, safety notes and timeline.</p>
                        <div class="link">Lock requirements</div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">02</span>
                            <div class="rw-ic">🧠</div>
                        </div>
                        <h3>Build & review</h3>
                        <p>Structured logic, tags, blocks, HMI screens + internal review checkpoints.</p>
                        <div class="link">Quality-first></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">03</span>
                            <div class="rw-ic">🛠️</div>
                        </div>
                        <h3>Commission & handover</h3>
                        <p>SAT/FAT support, tuning, recovery testing, backups, and final documentation.</p>
                        <div class="link">Plant-ready delivery</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
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
                        <summary>Do you support HMI/SCADA? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — we can build screens, alarms and interlocks aligned to the PLC
                            architecture and your standards.</div>
                    </details>
                    <details>
                        <summary>Can you work with existing plant standards? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — we prefer aligning to your naming conventions, alarm philosophy, and code
                            structure to ensure maintainability.</div>
                    </details>
                    <details>
                        <summary>What do you need to start? <span class="chev">⌄</span></summary>
                        <div class="ans">Platform, network type, IO list (if available), scope, location, timeline, and
                            any existing docs.</div>
                    </details>
                </div>
            </div>
        </section>

        {{-- DARK CTA --}}
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

        {{-- CONTACT PARTIAL --}}
        @includeIf('robowelt.partials.contact')

    </div>
@endsection
