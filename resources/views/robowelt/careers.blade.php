@extends('layouts.robowelt')

@section('title', 'Careers at RoboWelt Systems | PLC, Robotics & Automation Jobs')

@section('meta_description', 'Explore careers at RoboWelt Systems. Join our team working on industrial robotics integration, PLC/SCADA, commissioning and automation projects with real shopfloor impact.')

@section('meta_keywords', 'RoboWelt careers, automation jobs India, PLC engineer jobs, robotics integration careers, industrial automation hiring, commissioning engineer jobs')

@section('meta_robots', 'index, follow')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/robowelt-contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/robowelt-careers.css') }}">

    {{-- HERO (REUSES CONTACT HERO CLASSES FOR IDENTICAL LOOK) --}}
    <section class="rw-contact-hero" id="top">
        <div class="rw-contact-hero-media">
            <img src="{{ asset('images/careers-hero.png') }}" onerror="this.style.display='none'" alt="Careers at RoboWelt"
                class="rw-contact-hero-img" />
        </div>

        <div class="rw-contact-hero-overlay"></div>
        <div class="rw-contact-hero-glow rw-glow-blue"></div>
        <div class="rw-contact-hero-glow rw-glow-amber"></div>

        <div class="rw-container rw-contact-hero-inner">
            <div class="rw-contact-hero-left">
                <span class="rw-badge">Careers at RoboWelt Systems</span>

                <h1 class="rw-hero-title">
                    Build Automation That Runs on Real Shopfloors
                </h1>

                <p class="rw-career-hero-subtitle">
                    Work on PLC & robotics integration, commissioning, panels, and industrial software — with clean
                    standards,
                    solid documentation, and real deployments.
                </p>

                <div class="rw-contact-hero-actions">
                    <a href="#openings" class="rw-btn rw-btn-primary">View Openings</a>
                    <a href="#apply" class="rw-btn rw-btn-outline rw-btn-primary">Apply Now</a>
                </div>

                <div class="rw-contact-metrics">
                    <div class="rw-metric">
                        <div class="rw-metric-top">Hands-on</div>
                        <div class="rw-metric-bottom">Shopfloor-first work</div>
                    </div>
                    <div class="rw-metric">
                        <div class="rw-metric-top">Growth</div>
                        <div class="rw-metric-bottom">Ownership culture</div>
                    </div>
                    <div class="rw-metric">
                        <div class="rw-metric-top">Impact</div>
                        <div class="rw-metric-bottom">Real deployments</div>
                    </div>
                </div>
            </div>

            <div class="rw-contact-hero-right">
                <div class="rw-glass-card rw-hero-glass">
                    <div class="rw-glass-header">
                        <h3>Before you apply</h3>
                        <p>To review faster, share these 4 points:</p>
                    </div>

                    <ul class="rw-checklist">
                        <li>Role you’re applying for</li>
                        <li>Your location + notice period</li>
                        <li>Relevant projects / experience</li>
                        <li>Portfolio / GitHub (if applicable)</li>
                    </ul>

                    <div class="rw-glass-cta">
                        <a href="#apply" class="rw-btn rw-btn-primary rw-btn-wide">Send Resume</a>
                        <a href="#culture" class="rw-btn rw-btn-dark rw-btn-wide">Our Culture</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- REST OF PAGE (COLOR + GLASS CARDS) --}}
    <section class="rw-careers-strip">
        <div class="rw-container rw-careers-strip-inner">
            <div class="rw-strip-left">
                <h2 class="rw-strip-title">We hire for fundamentals + attitude.</h2>
                <p class="rw-strip-sub">If you love clean engineering, standards, and execution — you’ll fit in.</p>
            </div>
            <div class="rw-strip-tags">
                <span class="rw-strip-tag rw-t-amber">PLC / SCADA</span>
                <span class="rw-strip-tag rw-t-blue">Robotics</span>
                <span class="rw-strip-tag rw-t-ink">Panels</span>
                <span class="rw-strip-tag rw-t-amber">Commissioning</span>
            </div>
        </div>
    </section>

    <section class="rw-careers-section" id="openings">
        <div class="rw-container">
            <div class="rw-careers-head">
                <div>
                    <h2 class="rw-careers-h2">Open Roles</h2>
                    <p class="rw-careers-sub">Apply if you match most requirements — not necessarily all.</p>
                </div>
                <div class="rw-careers-filter">
                    <label class="rw-careers-filter-label" for="rwRoleFilter">Filter</label>
                    <select id="rwRoleFilter" class="rw-careers-filter-select">
                        <option value="all">All roles</option>
                        <option value="engineering">Engineering</option>
                        <option value="software">Software</option>
                        <option value="operations">Operations</option>
                    </select>
                </div>
            </div>

            <div class="rw-careers-grid" id="rwRoles">
                <article class="rw-career-card rw-career-amber" data-role="engineering">
                    <div class="rw-career-top">
                        <span class="rw-career-pill">Full-time</span>
                        <span class="rw-career-loc">On-site · India</span>
                    </div>
                    <h3>PLC / Controls Engineer</h3>
                    <p>Structured logic, HMI/SCADA basics, alarms, and commissioning-ready documentation.</p>
                    <ul>
                        <li>IO mapping + tagging discipline</li>
                        <li>Alarm philosophy + trends</li>
                        <li>Commissioning mindset</li>
                    </ul>
                    <div class="rw-career-actions">
                        <a href="#apply" class="rw-btn rw-btn-primary">Apply</a>
                        <span class="rw-career-chip rw-c-amber">Priority</span>
                    </div>
                </article>

                <article class="rw-career-card rw-career-blue" data-role="engineering">
                    <div class="rw-career-top">
                        <span class="rw-career-pill">Full-time</span>
                        <span class="rw-career-loc">On-site / Hybrid</span>
                    </div>
                    <h3>Robotics Integration Engineer</h3>
                    <p>Robot cell integration, safety, sensors, troubleshooting, cycle optimisation.</p>
                    <ul>
                        <li>Integration + safety concepts</li>
                        <li>Sequence logic + interlocks</li>
                        <li>Hands-on IO/wiring is a plus</li>
                    </ul>
                    <div class="rw-career-actions">
                        <a href="#apply" class="rw-btn rw-btn-primary">Apply</a>
                        <span class="rw-career-chip rw-c-blue">Core</span>
                    </div>
                </article>

                <article class="rw-career-card rw-career-ink" data-role="software">
                    <div class="rw-career-top">
                        <span class="rw-career-pill">Full-time</span>
                        <span class="rw-career-loc">Hybrid</span>
                    </div>
                    <h3>Industrial Software Developer</h3>
                    <p>Internal tools, dashboards, reporting, integrations supporting delivery & operations.</p>
                    <ul>
                        <li>Laravel / APIs / DB fundamentals</li>
                        <li>Clean UI components</li>
                        <li>Automation + data handling</li>
                    </ul>
                    <div class="rw-career-actions">
                        <a href="#apply" class="rw-btn rw-btn-primary">Apply</a>
                        <span class="rw-career-chip rw-c-ink">New</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="rw-careers-section rw-careers-alt" id="culture">
        <div class="rw-container">
            <div class="rw-careers-head">
                <div>
                    <h2 class="rw-careers-h2">Culture & Values</h2>
                    <p class="rw-careers-sub">High standards, clean execution, and respect for the real world.</p>
                </div>
            </div>

            <div class="rw-careers-grid">
                <div class="rw-glass-card rw-careers-glass rw-career-amber">
                    <div class="rw-value-head">
                        <span class="rw-value-badge rw-b-amber">01</span>
                        <span class="rw-value-title">Ownership</span>
                    </div>
                    <p>Take it end-to-end. Finish it. Document it. Improve it.</p>
                </div>
                <div class="rw-glass-card rw-careers-glass rw-career-blue">
                    <div class="rw-value-head">
                        <span class="rw-value-badge rw-b-blue">02</span>
                        <span class="rw-value-title">Clarity</span>
                    </div>
                    <p>Standards, naming, tags, and decisions that scale post-handover.</p>
                </div>
                <div class="rw-glass-card rw-careers-glass rw-career-amber">
                    <div class="rw-value-head">
                        <span class="rw-value-badge rw-b-amber">03</span>
                        <span class="rw-value-title">Respect reality</span>
                    </div>
                    <p>Safety, time, cost, and maintainability always matter.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="rw-careers-section rw-careers-alt" id="hiring-process">
        <div class="rw-container">
            <div class="rw-careers-head">
                <div>
                    <h2 class="rw-careers-h2">Hiring process</h2>
                    <p class="rw-careers-sub">
                        Simple, fast, and focused on practical ability.
                    </p>
                </div>
            </div>

            <div class="rw-hiring-timeline">
                <!-- Step 1 -->
                <div class="rw-hiring-step">
                    <div class="rw-hiring-index rw-b-blue">1</div>
                    <div class="rw-hiring-card rw-glass-card rw-career-blue">
                        <h3>Intro call</h3>
                        <p>
                            Quick chat about your experience, interests, and fit.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="rw-hiring-step">
                    <div class="rw-hiring-index rw-b-amber">2</div>
                    <div class="rw-hiring-card rw-glass-card rw-career-amber">
                        <h3>Skill check</h3>
                        <p>
                            A short practical task or technical discussion (role-based).
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="rw-hiring-step">
                    <div class="rw-hiring-index rw-b-blue">3</div>
                    <div class="rw-hiring-card rw-glass-card rw-career-blue">
                        <h3>Team round</h3>
                        <p>
                            Deep-dive: how you think, troubleshoot, and document.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="rw-hiring-step">
                    <div class="rw-hiring-index rw-b-amber">4</div>
                    <div class="rw-hiring-card rw-glass-card rw-career-amber">
                        <h3>Offer</h3>
                        <p>
                            Clear expectations, a role plan, and onboarding timeline.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="rw-careers-section" id="apply">
        <div class="rw-container">
            <div class="rw-apply-cta">
                <div>
                    <h2 class="rw-careers-rta">Ready to apply?</h2>
                    <p class="rw-careers-sub-rta">
                        Send your resume + role name. Add GitHub/portfolio if relevant.
                    </p>
                    <div class="rw-strip-tags" style="margin-top:12px">
                        <span class="rw-strip-tag rw-t-amber">Resume (PDF)</span>
                        <span class="rw-strip-tag rw-t-blue">Portfolio / GitHub</span>
                        <span class="rw-strip-tag rw-t-ink">Notice Period</span>
                    </div>
                </div>

                <div class="rw-apply-actions">
                    <a class="rw-btn rw-btn-primary rw-btn-wide"
                        href="mailto:careers@robowelt.example?subject=Application%20-%20RoboWelt">
                        Email Careers
                    </a>
                    <a class="rw-btn rw-btn-outline rw-btn-wide" href="{{ url('/robowelt/contact') }}">Or Contact Us</a>
                    <div class="rw-apply-note">Tip: mention the role in the email subject.</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            const select = document.getElementById('rwRoleFilter');
            const cards = Array.from(document.querySelectorAll('.rw-career-card'));
            if (!select || !cards.length) return;
            select.addEventListener('change', function() {
                const v = (this.value || 'all').toLowerCase();
                cards.forEach(c => {
                    const r = (c.getAttribute('data-role') || '').toLowerCase();
                    c.style.display = (v === 'all' || r === v) ? '' : 'none';
                });
            });
        })();
    </script>
@endsection
