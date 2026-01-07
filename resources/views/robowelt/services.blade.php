@extends('layouts.robowelt')

@section('title', 'RoboWelt Services | PLC Programming, Robotics, Simulation & System Integration')

@section('meta_description', 'Explore RoboWelt Systems services: PLC programming, robot programming, robot simulation,
    and turnkey systems integration for BIW & Non-BIW industrial automation. Documentation-first delivery with commissioning
    support.')

@section('meta_keywords', 'RoboWelt services, PLC programming services, robot programming services, robot simulation,
    offline programming, systems integration, industrial automation services, BIW automation, non BIW automation')

@section('meta_robots', 'index, follow')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/robowelt-services.css') }}">

    {{-- HERO (Subpage style like About/Contact) --}}
    {{-- HERO (Services) --}}
    {{-- <section class="rw-services-hero" id="top">
        <div class="rw-services-hero-media">
            <img src="{{ asset('images/hero-robo.jpg') }}" alt="RoboWelt Services" class="rw-services-hero-img">
        </div>

        <div class="rw-services-hero-overlay"></div>
        <div class="rw-services-hero-glow rw-glow-blue"></div>
        <div class="rw-services-hero-glow rw-glow-amber"></div>

        <div class="rw-container rw-services-hero-inner">
            <div class="rw-services-hero-left">
                <span class="rw-badge rw-badge-light">Our Services</span>

                <h1 class="rw-hero-title rw-hero-title-dark">
                    PLC, Robotics, Simulation & Integration
                </h1>

                <p class="rw-hero-subtitle rw-hero-subtitle-dark">
                    Engineering for BIW & Non-BIW automation — cycle-time optimization, stable commissioning,
                    and clean documentation for smooth handover.
                </p>

                <div class="rw-services-hero-actions">
                    <a href="#services" class="rw-btn rw-btn-primary">Explore Services</a>
                    <a href="#contact" class="rw-btn rw-btn-outline-dark">Request a Quote</a>
                </div>

                <div class="rw-services-metrics">
                    <div class="rw-metric rw-metric-light">
                        <div class="rw-metric-top">BIW & Non-BIW</div>
                        <div class="rw-metric-bottom">Automotive focused delivery</div>
                    </div>
                    <div class="rw-metric rw-metric-light">
                        <div class="rw-metric-top>Offline + Onsite</div>
                    <div class="rw-metric-bottom">
                            Simulation + commissioning</div>
                    </div>
                    <div class="rw-metric rw-metric-light">
                        <div class="rw-metric-top">&lt; 24 hrs</div>
                        <div class="rw-metric-bottom">Average response</div>
                    </div>
                </div>
            </div>

            <div class="rw-services-hero-right">
                <div class="rw-glass-card rw-hero-glass-light">
                    <div class="rw-glass-header">
                        <h3>Quick checklist</h3>
                        <p>Share these to get an accurate proposal:</p>
                    </div>

                    <ul class="rw-checklist rw-checklist-dark">
                        <li>Robot / PLC brand + line type</li>
                        <li>Scope: programming / simulation / commissioning</li>
                        <li>Plant location + timeline</li>
                        <li>Any docs (layout, IO list, cycle time)</li>
                    </ul>

                    <div class="rw-glass-cta">
                        <a href="#contact" class="rw-btn rw-btn-primary rw-btn-wide">Request a quote</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="rw-hero-sep"></div>
    </section> --}}



    <section class="rw-contact-hero" id="top">
        <div class="rw-contact-hero-media">

            <img src="{{ asset('images/service-hero.jpg') }}" onerror="this.style.display='none'" alt="RoboWelt Robotics"
                class="rw-contact-hero-img" />
        </div>

        <div class="rw-contact-hero-overlay"></div>
        <div class="rw-contact-hero-glow rw-glow-blue"></div>
        <div class="rw-contact-hero-glow rw-glow-amber"></div>

        <div class="rw-container rw-contact-hero-inner">
            <div class="rw-contact-hero-left">
                <span class="rw-badge">Our Services</span>

                <h1 class="rw-hero-title">
                    PLC, Robotics, Simulation & Integration
                </h1>

                <p class="rw-hero-subtitle">
                    Engineering for BIW & Non-BIW automation — cycle-time optimization, stable commissioning,
                    and clean documentation for smooth handover.
                </p>

                <div class="rw-contact-hero-actions">
                    <a href="#services" class="rw-btn rw-btn-primary-hero">Explore Services</a>
                    <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-outline">Request a Quote</a>
                </div>

                <div class="rw-contact-metrics">
                    <div class="rw-metric">
                        <div class="rw-metric-top">BIW & Non-BIW</div>
                        <div class="rw-metric-bottom">Automotive focused delivery</div>
                    </div>
                    <div class="rw-metric">
                        <div class="rw-metric-top">Simulation + commissioning</div>
                        {{-- <div class="rw-metric-bottom">9:00 AM – 6:00 PM</div> --}}
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
                        <h3>Quick checklist</h3>
                        <p>Share these to get an accurate proposal::</p>
                    </div>

                    <ul class="rw-checklist">
                        <li>Robot / PLC brand + line type</li>
                        <li>Scope: programming / simulation / commissioning</li>
                        <li>Plant location + timeline</li>
                        <li>Any existing documents (layout, IO list, cycle time)</li>
                        <li> </li>
                    </ul>

                    <div class="rw-glass-cta">
                        <a href="#enquiry" class="rw-btn rw-btn-primary-hero rw-btn-wide">Request a quote</a>

                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- WHAT WE DO --}}
    <section id="services" class="rw-section">
        <div class="rw-container">

            <div class="rw-section-head">
                <div>
                    <p class="rw-eyebrow">WHAT WE DO</p>
                    <h2 class="rw-section-title">Services engineered for performance & clean handover</h2>
                    <p class="rw-section-sub">
                        Delivered with documentation-first delivery, safety compliance, cycle-time focus, and stable
                        commissioning.
                    </p>
                </div>

                <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-outline-dark">Talk to an expert</a>
            </div>

            <div class="rw-cards-4">
                <a class="rw-service-card rw-card-amber" href="{{ url('/robowelt/services/plc-programming') }}">
                    <div class="rw-card-top">
                        <span class="rw-tag">Controls</span>
                        <span class="rw-dot"></span>
                    </div>
                    <h3>PLC Programming</h3>
                    <p>Design, logic development, HMI/SCADA integration, networks, testing, commissioning & troubleshooting.
                    </p>
                    <div class="rw-card-link">View details <span>→</span></div>
                </a>

                <a class="rw-service-card rw-card-blue" href="{{ url('/robowelt/services/robot-programming') }}">
                    <div class="rw-card-top">
                        <span class="rw-tag">Robotics</span>
                        <span class="rw-dot"></span>
                    </div>
                    <h3>Robot Programming</h3>
                    <p>Optimized cycle-time, accuracy, and full integration with PLC/vision/safety & peripherals.</p>
                    <div class="rw-card-link">View details <span>→</span></div>
                </a>

                <a class="rw-service-card rw-card-amber" href="{{ url('/robowelt/services/robot-simulation') }}">
                    <div class="rw-card-top">
                        <span class="rw-tag">Simulation</span>
                        <span class="rw-dot"></span>
                    </div>
                    <h3>Robot Simulation</h3>
                    <p>Validate reachability, trajectory, cycle-time and collisions before commissioning.</p>
                    <div class="rw-card-link">View details <span>→</span></div>
                </a>

                <a class="rw-service-card rw-card-blue" href="{{ url('/robowelt/services/systems-integration') }}">
                    <div class="rw-card-top">
                        <span class="rw-tag">Integration</span>
                        <span class="rw-dot"></span>
                    </div>
                    <h3>Systems Integration</h3>
                    <p>Turnkey cells: EOAT, safety, conveyors, sensors, vision, install & production ramp-up.</p>
                    <div class="rw-card-link">View details <span>→</span></div>
                </a>
            </div>

        </div>
    </section>



    {{-- DETAILS + TECH (Accordion) --}}
    <section id="service-details" class="rw-section rw-section-light-2">
        <div class="rw-container">
            <div class="rw-bg-glows">
                <div class="rw-glow rw-glow-blue"></div>
                <div class="rw-glow rw-glow-amber"></div>
            </div>

            <div class="reveal rw-section-head">
                <div>
                    <p class="rw-eyebrow">DETAILS</p>
                    <h2 class="rw-h2">Supported platforms, brands & applications</h2>
                    <p class="rw-p">Expand each section to see supported PLC platforms, robot brands, and typical
                        applications.</p>
                </div>

                <div class="rw-brand-row">
                    @foreach (['siemens', 'rockwell', 'mitsubishi', 'abb', 'fanuc', 'kuka', 'yaskawa', 'kawasaki', 'ur', 'comau', 'delta'] as $logo)
                        <div class="rw-brand-pill">
                            <img src="{{ asset('images/brands/' . $logo . '.png') }}" alt="{{ $logo }}"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';"
                                class="rw-brand-img">
                            <span class="rw-brand-fallback" style="display:none;">{{ strtoupper($logo) }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="rw-acc-grid">
                
                <details class="reveal rw-acc rw-acc-amber" open>
                    <summary class="rw-acc-sum">
                        <div>
                            <div class="rw-acc-title">PLC Programming</div>
                            <div class="rw-acc-sub">Design • Logic • HMI/SCADA • Networks • Testing • Commissioning •
                                Troubleshooting</div>
                        </div>
                        <span class="rw-acc-chevron">⌄</span>
                    </summary>

                    <div class="rw-acc-body">
                        <p class="rw-body">
                            We provide PLC programming and automation solutions across major industrial platforms,
                            engineered for reliability, maintainability and seamless plant integration.
                        </p>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini-amber">
                                <div class="rw-mini-title">PLC Platforms Supported</div>
                                <ul class="rw-list">
                                    <li>Siemens (S7-1200, S7-1500, S7-300/400, TIA Portal)</li>
                                    <li>Allen-Bradley / Rockwell Automation</li>
                                    <li>Mitsubishi Electric</li>
                                    <li>Delta</li>
                                    <li>ABB PLCs</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini-amber">
                                <div class="rw-mini-title">Scope Covered</div>
                                <ul class="rw-list">
                                    <li>System design & architecture</li>
                                    <li>Logic development & standards</li>
                                    <li>HMI/SCADA integration</li>
                                    <li>Communication networks</li>
                                    <li>Testing, commissioning, troubleshooting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </details>

                
                <details class="reveal rw-acc rw-acc-blue">
                    <summary class="rw-acc-sum">
                        <div>
                            <div class="rw-acc-title">Robot Programming</div>
                            <div class="rw-acc-sub">Accuracy • Efficiency • Optimized cycle-times • Full cell integration
                            </div>
                        </div>
                        <span class="rw-acc-chevron">⌄</span>
                    </summary>

                    <div class="rw-acc-body">
                        <p class="rw-body">
                            Advanced robot programming across industrial brands — integrated with PLC, vision and safety
                            systems
                            to achieve stable cycle-time and repeatable quality.
                        </p>

                        <div class="rw-mini-grid">
                            <div class="rw-mini rw-mini-blue">
                                <div class="rw-mini-title">Robot Brands Supported</div>
                                <ul class="rw-list">
                                    <li>FANUC</li>
                                    <li>ABB</li>
                                    <li>KUKA</li>
                                    <li>YASKAWA / Motoman</li>
                                    <li>Kawasaki</li>
                                    <li>Universal Robots (UR)</li>
                                    <li>Comau</li>
                                </ul>
                            </div>

                            <div class="rw-mini rw-mini-blue">
                                <div class="rw-mini-title">Robot Applications Covered</div>
                                <ul class="rw-list">
                                    <li>Material Handling</li>
                                    <li>Welding (Spot & Arc)</li>
                                    <li>Pick and Place</li>
                                    <li>Assembly Operations</li>
                                    <li>Palletizing & Depalletizing</li>
                                    <li>Laser Brazing / Welding</li>
                                    <li>Inspection & Vision-Guided Robotics</li>
                                    <li>Gluing</li>
                                    <li>Deburring / Polishing / Finishing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </details>

                
                <details class="reveal rw-acc rw-acc-amber">
                    <summary class="rw-acc-sum">
                        <div>
                            <div class="rw-acc-title">Robot Simulation</div>
                            <div class="rw-acc-sub">Layout • Trajectory • Reachability • Cycle-time • Collision elimination
                            </div>
                        </div>
                        <span class="rw-acc-chevron">⌄</span>
                    </summary>

                    <div class="rw-acc-body">
                        <p class="rw-body">
                            Simulation & virtual commissioning to validate reachability, remove collision risks,
                            and optimize cycle time before on-floor commissioning.
                        </p>
                    </div>
                </details>

                
                <details class="reveal rw-acc rw-acc-blue">
                    <summary class="rw-acc-sum">
                        <div>
                            <div class="rw-acc-title">Robotics Systems Integration</div>
                            <div class="rw-acc-sub">Turnkey cells • EOAT • Safety • Vision • Install • Commissioning</div>
                        </div>
                        <span class="rw-acc-chevron">⌄</span>
                    </summary>

                    <div class="rw-acc-body">
                        <p class="rw-body">
                            Turnkey integration from system design to ramp-up — EOAT, safety, conveyors, sensors,
                            PLC/robot programming, vision integration and production stabilization.
                        </p>
                    </div>
                </details>
            </div> --}}

            <div class="reveal rw-cta-dark">
                <div>
                    <div class="small">Need a quick estimate?</div>
                    <div class="big">Share your scope and timeline.</div>
                </div>
                <div class="cta-actions">
                    <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-amber">Request estimate</a>
                    {{-- <a href="{{ url('/robowelt/contact') }}" class="rw-btn rw-btn-ghost">Book a call</a> --}}
                </div>
            </div>

        </div>
    </section>

    {{-- <section class="rw-section rw-details" id="service-details">
        <div class="rw-container">

            
            <article class="rw-service-block" id="svc-plc">
                <div class="rw-service-block-left">
                    <span class="rw-pill rw-pill-amber">PLC Programming</span>
                    <h3>Controls engineering that’s stable, maintainable, and commissioning-ready</h3>
                    <p>
                        From architecture to commissioning support — structured logic, clean tags, alarms, and documentation
                        aligned
                        to plant standards for fast handover and low downtime.
                    </p>

                    <div class="rw-two">
                        <div class="rw-mini rw-mini-amber">
                            <div class="rw-mini-title">Platforms</div>
                            <ul>
                                <li>Siemens (TIA Portal, S7-1200/1500/300/400)</li>
                                <li>Rockwell / Allen-Bradley</li>
                                <li>Mitsubishi Electric</li>
                                <li>Delta / ABB PLCs</li>
                            </ul>
                        </div>

                        <div class="rw-mini rw-mini-amber">
                            <div class="rw-mini-title">Deliverables</div>
                            <ul>
                                <li>I/O mapping, tag structure, alarm philosophy</li>
                                <li>Reusable code blocks + standards</li>
                                <li>HMI screens + interlocks</li>
                                <li>SAT/FAT checklists + handover docs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="rw-service-block-right rw-block-glass-amber">
                    <div class="rw-block-title">Typical scope</div>
                    <ul class="rw-check">
                        <li>Sequence logic & safety interlocks</li>
                        <li>Networks (Profinet / Ethernet IP / OPC)</li>
                        <li>HMI/SCADA integration</li>
                        <li>Onsite commissioning + stabilization</li>
                    </ul>
                    <a class="rw-btn rw-btn-primary rw-btn-wide" href="{{ url('/robowelt/contact') }}">Request PLC proposal</a>
                </div>
            </article>

            
            <article class="rw-service-block" id="svc-robot">
                <div class="rw-service-block-left">
                    <span class="rw-pill rw-pill-blue">Robot Programming</span>
                    <h3>Optimized robot motion with clean integration to PLC, vision & safety</h3>
                    <p>
                        Cycle-time optimization, accurate tooling frames, robust error handling, and repeatable recovery
                        routines —
                        designed for stable production.
                    </p>

                    <div class="rw-two">
                        <div class="rw-mini rw-mini-blue">
                            <div class="rw-mini-title">Brands</div>
                            <ul>
                                <li>FANUC, ABB, KUKA</li>
                                <li>Yaskawa / Motoman</li>
                                <li>Kawasaki, UR, Comau</li>
                            </ul>
                        </div>

                        <div class="rw-mini rw-mini-blue">
                            <div class="rw-mini-title">Applications</div>
                            <ul>
                                <li>Material handling, spot/arc welding</li>
                                <li>Sealing/gluing, fastening</li>
                                <li>Inspection / vision guidance</li>
                                <li>Deburr/polish/finish</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="rw-service-block-right rw-block-glass-blue">
                    <div class="rw-block-title">What we focus on</div>
                    <ul class="rw-check">
                        <li>Cycle-time + path smoothing</li>
                        <li>Interlocks, handshakes, recovery</li>
                        <li>Tool data & accuracy tuning</li>
                        <li>Production-ready documentation</li>
                    </ul>
                    <a class="rw-btn rw-btn-primary rw-btn-wide" href="{{ url('/robowelt/contact') }}">Request Robot proposal</a>
                </div>
            </article>

            
            <article class="rw-service-block" id="svc-sim">
                <div class="rw-service-block-left">
                    <span class="rw-pill rw-pill-amber">Robot Simulation</span>
                    <h3>Validate layout, reachability and cycle-time before commissioning</h3>
                    <p>
                        Reduce onsite risk by catching collisions, reach issues, and timing problems early — then hand over
                        a validated plan
                        for offline programming and commissioning.
                    </p>

                    <div class="rw-two">
                        <div class="rw-mini rw-mini-amber">
                            <div class="rw-mini-title">What we validate</div>
                            <ul>
                                <li>Reachability + joint limits</li>
                                <li>Collision checks + clearance</li>
                                <li>Cycle-time estimation</li>
                                <li>Line balancing suggestions</li>
                            </ul>
                        </div>

                        <div class="rw-mini rw-mini-amber">
                            <div class="rw-mini-title">Outputs</div>
                            <ul>
                                <li>Simulation report + videos</li>
                                <li>Risk list + mitigation notes</li>
                                <li>Offline program baseline (optional)</li>
                                <li>Updated layout recommendations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="rw-service-block-right rw-block-glass-amber">
                    <div class="rw-block-title">Best for</div>
                    <ul class="rw-check">
                        <li>New cell commissioning</li>
                        <li>Cycle-time improvement projects</li>
                        <li>Layout changes / tooling updates</li>
                        <li>Multi-robot coordination</li>
                    </ul>
                    <a class="rw-btn rw-btn-primary rw-btn-wide" href="{{ url('/robowelt/contact') }}">Request Simulation proposal</a>
                </div>
            </article>

            
            <article class="rw-service-block" id="svc-integration">
                <div class="rw-service-block-left">
                    <span class="rw-pill rw-pill-blue">Systems Integration</span>
                    <h3>Turnkey automation cells with safe, stable ramp-up</h3>
                    <p>
                        Complete integration of robots, conveyors, fixtures, sensors, vision and safety — including
                        installation,
                        commissioning and production stabilization.
                    </p>

                    <div class="rw-two">
                        <div class="rw-mini rw-mini-blue">
                            <div class="rw-mini-title">Integration elements</div>
                            <ul>
                                <li>EOAT, fixtures, conveyors</li>
                                <li>Safety (zones, interlocks, devices)</li>
                                <li>Vision systems + sensors</li>
                                <li>PLC ↔ Robot handshakes</li>
                            </ul>
                        </div>

                        <div class="rw-mini rw-mini-blue">
                            <div class="rw-mini-title">Handover package</div>
                            <ul>
                                <li>As-built docs + backups</li>
                                <li>Commissioning checklist</li>
                                <li>Training + operating notes</li>
                                <li>Support during ramp-up</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="rw-service-block-right rw-block-glass-blue">
                    <div class="rw-block-title">Ideal when you need</div>
                    <ul class="rw-check">
                        <li>Turnkey ownership</li>
                        <li>Faster commissioning</li>
                        <li>Stable recovery & safety</li>
                        <li>Documentation-first handover</li>
                    </ul>
                    <a class="rw-btn rw-btn-primary rw-btn-wide" href="{{ url('/robowelt/contact') }}">Request Integration proposal</a>
                </div>
            </article>

        </div>
    </section> --}}


    {{-- CONTACT --}}
    @includeIf('robowelt.partials.contact')

@endsection


@push('scripts')
    <script>
        document.documentElement.classList.add('rw-js');
        (function() {
            const items = document.querySelectorAll('.reveal');
            if (!items.length) return;

            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) e.target.classList.add('is-visible');
                });
            }, {
                threshold: 0.12,
                rootMargin: "0px 0px -10% 0px"
            });

            items.forEach(el => io.observe(el));
        })();
    </script>
@endpush

@push('scripts')
    <script>
        // Smooth scroll for internal anchors
        document.addEventListener('click', function(e) {
            const a = e.target.closest('a[href^="#"]');
            if (!a) return;

            const id = a.getAttribute('href');
            if (!id || id === '#') return;

            const target = document.querySelector(id);
            if (!target) return;

            e.preventDefault();

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            // Optional: add a temporary highlight effect
            target.classList.add('rw-focus');
            setTimeout(() => target.classList.remove('rw-focus'), 900);

            history.replaceState(null, '', id);
        });
    </script>
@endpush
