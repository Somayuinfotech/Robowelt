@extends('layouts.robowelt')

@section('title', 'Robot Simulation – RoboWelt Systems')

@section('meta_description', 'Robot simulation and offline validation for industrial automation. Cycle-time checks, reach and collision validation, layout feasibility, and commissioning-ready handover for BIW & Non-BIW lines.')
@section('meta_keywords', 'robot simulation, offline simulation, cycle time study, collision detection, reach study, process simulation, digital commissioning, BIW simulation')
@section('meta_robots', 'index, follow')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/robowelt-service-single.css') }}">

    <div class="rw-svc rw-svc--sim">

        <section class="rw-svc-hero" id="top">
            <div class="rw-svc-hero-media">
                <img src="{{ asset('images/service-hero.jpg') }}" class="rw-svc-hero-img" alt="Robot Simulation"
                    onerror="this.style.display='none'">
            </div>
            <div class="rw-svc-hero-overlay"></div>
            <div class="rw-svc-hero-glow left"></div>
            <div class="rw-svc-hero-glow right"></div>

            <div class="rw-container rw-svc-hero-inner">
                <div>
                    <div class="rw-crumb">
                        <span>Robot Simulation</span>
                    </div>

                    <div class="rw-svc-badge">Simulation • Risk reduction • Cycle-time</div>

                    <h1 class="rw-svc-title">Validate layout, reachability & cycle-time before commissioning</h1>
                    <p class="rw-svc-sub">
                        Reduce onsite risk by catching collisions, reach issues and timing problems early — then hand over a
                        validated plan for offline programming and commissioning.
                    </p>

                    <div class="rw-svc-actions">
                        <a class="rw-btn rw-btn-primary" href="#enquiry">Request Simulation proposal</a>
                        <a class="rw-btn rw-btn-outline" href="#scope">View scope</a>
                        <a class="rw-btn rw-btn-dark" href="{{ url('/robowelt/contact') }}">Talk to us</a>
                    </div>

                    <div class="rw-kpis">
                        <div class="rw-kpi">
                            <div class="t">Collision checks</div>
                            <div class="s">Clearance + risk list</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Cycle-time</div>
                            <div class="s">Estimate + improvements</div>
                        </div>
                        <div class="rw-kpi">
                            <div class="t">Handover</div>
                            <div class="s">Reports + videos</div>
                        </div>
                    </div>
                </div>

                <div class="rw-hero-glass">
                    <div class="top">
                        <div>
                            <div class="title">Quick inquiry checklist</div>
                            <div class="sub">Share these for a faster & accurate proposal.</div>
                        </div>
                        <div class="pill">SIM</div>
                    </div>

                    <ul>
                        <li><span class="dot"></span>Robot brand + station/cell type</li>
                        <li><span class="dot"></span>Scope: reach/collision/cycle-time validation</li>
                        <li><span class="dot"></span>Timeline + plant location</li>
                        <li><span class="dot"></span>Docs: layout, tools, cycle targets</li>
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
                        <h2 class="rw-h2">Simulation outputs that reduce onsite surprises</h2>
                        <p class="rw-p">Validate before you commit time and cost to the floor.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">Validate</span>
                            <div class="rw-ic">📏</div>
                        </div>
                        <h3>What we validate</h3>
                        <p>Reachability, joint limits, collision checks, clearance and cycle-time estimation.</p>
                        <div class="link">Find issues early <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">Outputs</span>
                            <div class="rw-ic">🎥</div>
                        </div>
                        <h3>Outputs</h3>
                        <p>Simulation report + videos, risk list, mitigation notes, layout recommendations.</p>
                        <div class="link">Clear decisions <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">Best for</span>
                            <div class="rw-ic">🎯</div>
                        </div>
                        <h3>Best for</h3>
                        <p>New cell commissioning, cycle-time improvement, layout/tooling updates, multi-robot coordination.
                        </p>
                        <div class="link">Lower risk <span>→</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rw-section rw-sec-soft" id="details">
            <div class="rw-container">
                <div class="rw-head">
                    <div>
                        <div class="rw-eyebrow">DETAILS</div>
                        <h2 class="rw-h2">Virtual validation + actionable recommendations</h2>
                        <p class="rw-p">We deliver clear findings and a practical path to commissioning.</p>
                    </div>
                </div>

                <div class="rw-detail">
                    <div>
                        <h4>Simulation to de-risk commissioning</h4>
                        <div class="desc">
                            Catch collisions, reach issues and timing problems early — then hand over a validated plan for
                            offline programming and commissioning.
                        </div>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini--amber">
                                <div class="t">What we validate</div>
                                <ul>
                                    <li>Reachability + joint limits</li>
                                    <li>Collision checks + clearance</li>
                                    <li>Cycle-time estimation</li>
                                    <li>Line balancing suggestions</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini--blue">
                                <div class="t">Outputs</div>
                                <ul>
                                    <li>Simulation report + videos</li>
                                    <li>Risk list + mitigation notes</li>
                                    <li>Offline program baseline (optional)</li>
                                    <li>Updated layout recommendations</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="rw-side rw-side--amber">
                        <div class="st">Best for</div>
                        <ul class="rw-check">
                            <li>New cell commissioning</li>
                            <li>Cycle-time improvement projects</li>
                            <li>Layout changes / tooling updates</li>
                            <li>Multi-robot coordination</li>
                        </ul>
                        <a class="rw-btn rw-btn-primary rw-wide" href="#enquiry">Request Simulation proposal</a>
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
                        <p class="rw-p">Fast validation + clear handover artifacts.</p>
                    </div>
                </div>

                <div class="rw-grid-3">
                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">01</span>
                            <div class="rw-ic">🗺️</div>
                        </div>
                        <h3>Inputs</h3>
                        <p>Layout, robot/tooling, process steps, cycle targets and constraints.</p>
                        <div class="link">Gather basics <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--amber">
                        <div class="rw-card-top"><span class="rw-pill">02</span>
                            <div class="rw-ic">🧊</div>
                        </div>
                        <h3>Model & validate</h3>
                        <p>Reach, collisions, clearance, timing, sequence feasibility.</p>
                        <div class="link">Expose risks <span>→</span></div>
                    </div>

                    <div class="rw-card rw-card--blue">
                        <div class="rw-card-top"><span class="rw-pill">03</span>
                            <div class="rw-ic">📄</div>
                        </div>
                        <h3>Report & recommendations</h3>
                        <p>Videos, report, risk list, and a validated plan for commissioning.</p>
                        <div class="link">Actionable output <span>→</span></div>
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
                        <summary>Do you provide simulation videos? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — videos and a short report highlighting collisions, risks and cycle-time
                            insights.</div>
                    </details>
                    <details>
                        <summary>Can this reduce onsite commissioning time? <span class="chev">⌄</span></summary>
                        <div class="ans">Yes — validating reach, collisions and timing early typically reduces onsite
                            iterations significantly.</div>
                    </details>
                    <details>
                        <summary>What do you need to start? <span class="chev">⌄</span></summary>
                        <div class="ans">Layout, robot/tooling details, process steps, constraints, and cycle targets.
                        </div>
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
