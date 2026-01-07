@extends('layouts.robowelt')

@section('title', 'RoboWelt Systems | Industrial Robotics, PLC & Automation Integration')

@section('meta_description',
    'RoboWelt Systems provides industrial robotics integration, PLC programming, simulation and
    BIW & Non-BIW automation solutions for automotive and manufacturing plants. From design to commissioning.')

@section('meta_keywords',
    'industrial robotics integration, PLC programming, automation systems, BIW automation, non BIW
    systems, robot programming, offline simulation, automotive automation, manufacturing automation')


@section('content')

    <link rel="stylesheet" href="{{ asset('css/robowelt-index.css') }}">

    {{-- HERO --}}
    <section class="relative overflow-hidden">
        {{-- HERO BACKGROUND IMAGE --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-robo (2).jpg') }}" alt="RoboWelt Automation Background"
                class="h-full w-full object-cover" />

            {{-- dark overlay for readability --}}
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-950/40 to-slate-950/70"></div>


            {{-- subtle brand glow --}}
            <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-amber-500/25 blur-3xl"></div>
            <div class="absolute -top-28 -right-24 h-[28rem] w-[28rem] rounded-full bg-sky-500/20 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
            <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-7">
                    {{-- <div
                        class="reveal inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">
                        <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                        BIW & Non-BIW • Robotics Integration • PLC Programming
                    </div> --}}

                    <h1 class="reveal mt-6 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-white">
                        The World of <span class="text-amber-400">Robotics</span><br class="hidden sm:block">
                        <span class="text-amber-400"></span>
                    </h1>

                    <p class="reveal mt-5 max-w-2xl text-base text-white/95 sm:text-lg">
                        We design, simulate, integrate and program industrial automation systems that improve
                        throughput, quality and safety — with faster commissioning and cleaner handover.
                    </p>

                    <div class="reveal mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ url('/robowelt/contact') }}"
                            class="rounded-2xl bg-amber-500 px-6 py-4 text-center text-base font-semibold text-slate-950 hover:bg-amber-400">
                            Discuss Project
                        </a>
                        <a href="#services" onclick="scrollToServices(event)"
                            class="rounded-2xl border border-white/15 bg-black/35 px-6 py-4 text-center text-base font-semibold hover:bg-white/10 text-white">
                            Explore Services
                        </a>
                        <a href="#capabilities"
                            class="rounded-2xl border border-white/15 bg-black/35 px-6 py-4 text-center text-base font-semibold hover:bg-white/5 text-white">
                            Our Capabilities
                        </a>
                        <a href="#work"
                            class="rounded-2xl border border-white/15 bg-black/35 px-6 py-4 text-center text-base font-semibold hover:bg-white/5 text-white">
                            View Footprint
                        </a>

                    </div>

                    {{-- <div class="reveal mt-10 grid grid-cols-2 gap-4 sm:grid-cols-4">
                        @foreach ([['BIW', 'System expertise'], ['End-to-End', 'Design to commissioning'], ['Offline', 'Simulation & validation'], ['OEM', 'Automotive focused']] as [$kpi, $label])
                            <div class="rounded-3xl border border-white/10 bg-black/35 p-4">
                                <div class="text-white font-extrabold">{{ $kpi }}</div>
                                <div class="mt-1 text-xs text-white/65">{{ $label }}</div>
                            </div>
                        @endforeach
                    </div> --}}
                </div>

                {{-- Right card --}}
                <div class="lg:col-span-5">
                    <div class="reveal rounded-3xl rw-glass-hero p-6">
                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <p class="text-sm text-white/90">Trusted by teams working with</p>
                                <p class="mt-1 text-xl font-semibold text-white">World’s leading automobile brands</p>
                            </div>
                            <span
                                class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-semibold text-white/80">

                            </span>
                        </div>

                        <div class="mt-6 grid grid-cols-3 gap-3">
                            @foreach (['MSIL', 'Cumau', 'Maruti Suzuki', 'SMG', 'Faith', 'Hitachi'] as $b)
                                <div
                                    class="rounded-2xl border border-white/10 bg-white/5 px-3 py-3 text-center text-xs text-white/80 hover:bg-white/10 transition">
                                    {{ $b }}
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6 rounded-3xl border border-white/10 bg-slate-950/40 p-5">
                            <p class="text-sm font-semibold text-white">What you get</p>
                            <ul class="mt-3 space-y-2 text-sm text-white/75">
                                <li class="flex gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-amber-400"></span>Robotics
                                    integration & programming</li>
                                <li class="flex gap-2"><span
                                        class="mt-1 h-2 w-2 rounded-full bg-amber-400"></span>Simulation & offline
                                    programming</li>
                                <li class="flex gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-amber-400"></span>PLC
                                    logic, HMI & commissioning</li>
                            </ul>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-3">
                            <a href="#contact"
                                class="rounded-2xl bg-amber-500 px-4 py-3 text-center text-sm font-semibold text-slate-950 hover:bg-amber-400">
                                Request Quote
                            </a>
                            <a href="#services"
                                class="rounded-2xl border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold hover:bg-white/10 text-white">
                                View Services
                            </a>
                        </div>

                        {{-- <div class="mt-6 rounded-3xl border border-white/10 bg-white/5 p-4 text-xs text-white/70">
                            <span class="font-semibold text-white">Fast delivery model:</span> Onsite commissioning + remote
                            simulation/programming.
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="services" class="bg-slate-50 text-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <div class="reveal flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="text-xs font-semibold tracking-widest uppercase text-amber-600">Services</p>
                    <h2 class="mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl">
                        Transforming manufacturing with advanced robotics solutions
                    </h2>
                    <p class="mt-3 max-w-2xl text-sm sm:text-base text-slate-600">
                        Integrated automation services that scale from single cells to complete lines.
                    </p>
                </div>
                {{-- <a href="#contact"
                    class="w-fit rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold hover:bg-slate-50">
                    Get a proposal
                </a> --}}
            </div>

            <div class="relative mt-10">
                {{-- blobs behind cards --}}
                {{-- <div class="rw-blob rw-blob-blue" style="width:320px;height:320px;left:-60px;top:-80px;"></div>
                <div class="rw-blob rw-blob-amber" style="width:280px;height:280px;right:-40px;top:20px;"></div> --}}

                <div class="grid gap-6 md:grid-cols-3">
                    @foreach ([
            [
                'title' => 'Robotics & System Integration',
                'desc' => 'Turnkey integration for automation cells, stations and lines.',
                'tag' => 'Integration',
                'glass' => 'glass-blue',
            ],
            [
                'title' => 'Simulation & Offline Programming',
                'desc' => 'Validate cycle-time, reachability and collision before commissioning.',
                'tag' => 'Simulation',
                'glass' => 'glass-blue',
            ],
            [
                'title' => 'Robot & PLC Programming',
                'desc' => 'Structured, maintainable logic with smooth handover and documentation.',
                'tag' => 'Programming',
                'glass' => 'glass-blue',
            ],
        ] as $card)
                        <div class="reveal group rounded-3xl {{ $card['glass'] }} p-6 transition">

                            <div class="flex items-center justify-between">
                                <span class="rounded-full bg-white/70 px-3 py-1 text-xs font-semibold text-slate-900">
                                    {{ $card['tag'] }}
                                </span>
                                <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                            </div>

                            <h3 class="mt-4 text-lg font-bold tracking-tight text-slate-900">
                                {{ $card['title'] }}
                            </h3>

                            <p class="mt-2 text-sm text-slate-700">
                                {{ $card['desc'] }}
                            </p>

                            <div class="mt-6 flex items-center justify-between">
                                <a href="#contact" class="text-sm font-semibold text-slate-900 hover:underline">
                                    Talk to an expert
                                </a>
                                <span class="text-amber-600 group-hover:translate-x-1 transition">
                                    →
                                </span>
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        </div>
    </section>

    {{-- CAPABILITIES --}}
    <section id="capabilities" class="bg-slate-50 text-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-5">
                    <p class="reveal text-xs font-semibold tracking-widest uppercase text-amber-600">Why choose us</p>
                    <h2 class="reveal mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl">
                        One-stop solution for BIW & Non-BIW systems
                    </h2>
                    <p class="reveal mt-3 text-slate-600">
                        Engineering that reduces commissioning risk and improves ramp-up time.
                    </p>

                    <div class="reveal mt-8 space-y-4">
                        @foreach ([['Comprehensive solutions', 'From layout & simulation to onsite commissioning and stabilization support.'], ['Quality & assurance', 'Standards-aligned deliverables with clear documentation & handover.'], ['Wide range of applications', 'Material handling, welding, sealing, fastening, inspection, and more.']] as [$h, $p])
                            <div class="flex gap-4 rounded-3xl rw-glass p-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-2xl rw-chip text-slate-950 font-extrabold">
                                    ✓</div>
                                <div>
                                    <div class="font-semibold">{{ $h }}</div>
                                    <div class="text-sm text-slate-600">{{ $p }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="reveal mt-8 flex gap-3">
                        <a href="#contact"
                            class="rounded-2xl bg-amber-500 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-amber-400">Connect
                            today</a>
                        <a href="#stack"
                            class="rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold hover:bg-slate-50">View
                            stack</a>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="reveal rounded-3xl p-8">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="rounded-3xl glass-blue-soft p-5">
                                <div class="font-semibold text-slate-900">Delivery-ready</div>
                                <div class="mt-1 text-sm text-slate-700">
                                    Reusable templates, coding standards and review cycles.
                                </div>
                            </div>

                            <div class="rounded-3xl glass-amber-soft p-5">
                                <div class="font-semibold text-slate-900">Cycle-time focus</div>
                                <div class="mt-1 text-sm text-slate-700">
                                    Simulation-backed optimization and de-bottlenecking.
                                </div>
                            </div>

                            <div class="rounded-3xl glass-amber-soft p-5">
                                <div class="font-semibold text-slate-900">Safety by design</div>
                                <div class="mt-1 text-sm text-slate-700">
                                    Risk assessment support and safe commissioning practices.
                                </div>
                            </div>

                            <div class="rounded-3xl glass-blue-soft p-5">
                                <div class="font-semibold text-slate-900">Clear reporting</div>
                                <div class="mt-1 text-sm text-slate-700">
                                    Weekly progress, blockers and measurable outcomes.
                                </div>
                            </div>
                        </div>


                        <div class="mt-8 rounded-3xl bg-slate-950 p-6 text-white">
                            <div class="text-sm text-white/70">Need a quick estimate?</div>
                            <div class="mt-1 text-xl font-semibold">Share your scope and timeline.</div>
                            <div class="mt-4 grid grid-cols-2 gap-3">
                                <a href="#contact"
                                    class="rounded-2xl bg-amber-500 px-4 py-3 text-center text-sm font-semibold text-slate-950 hover:bg-amber-400">Request
                                    estimate</a>
                                {{-- <a href="#contact"
                                    class="rounded-2xl border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold hover:bg-white/10">Book
                                    a call</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- STACK --}}
    <section id="stack" class="relative overflow-hidden">
        {{-- background image + overlays BEHIND content --}}
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/stack-bg.jpg') }}" alt="RoboWelt Technology Stack"
                class="h-full w-full object-cover" />

            {{-- dark overlay --}}
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-950/40 to-slate-950/70"></div>


            {{-- subtle brand tint --}}
            <div
                class="absolute inset-0 bg-[radial-gradient(800px_400px_at_20%_20%,rgba(33,82,145,0.35),transparent_60%)]">
            </div>

        </div>

        {{-- content must be above --}}
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">

            <p class="reveal text-xs font-semibold tracking-widest uppercase text-amber-400">
                Technology stack
            </p>

            <h2 class="reveal mt-2 text-4xl font-extrabold tracking-tight sm:text-5xl text-white">
                Cutting-edge tools for seamless automation<span class="text-amber-400">.</span>
            </h2>

            <p class="reveal mt-3 mb-14 max-w-2xl text-white/90">
                We work across robotics, simulation, PLC/HMI and commissioning workflows.
            </p>

            <div class="grid gap-6 md:grid-cols-3">

                @foreach ([
            [
                'title' => 'Simulation Tools',
                'items' => ['Process Simulate', 'Roboguide', 'Delmia', 'Offline validation'],
                'tone' => 'sky',
            ],
            [
                'title' => 'Robot Expertise',
                'items' => ['FANUC', 'ABB', 'KUKA', 'Yaskawa'],
                'tone' => 'amber',
            ],
            [
                'title' => 'PLC & Controls',
                'items' => ['Siemens', 'Allen-Bradley', 'Mitsubishi', 'HMI & commissioning'],
                'tone' => 'sky',
            ],
        ] as $card)
                    <div
                        class="reveal group relative rounded-3xl p-7
                       border border-white/15 bg-amber-500/90 backdrop-blur-xl
                       shadow-[0_18px_60px_rgba(0,0,0,0.35)]
                       transition-all duration-300
                       hover:-translate-y-1 hover:border-white/25">

                        {{-- Header --}}
                        <div class="flex items-start justify-between">

                            <div class="flex items-center gap-3">

                                {{-- ICON --}}
                                <span
                                    class="h-11 w-11 rounded-2xl flex items-center justify-center
                                   border border-white/20 bg-white/10 text-black/80
                                   shadow-inner">

                                    {{-- SIMULATION --}}
                                    @if ($card['title'] === 'Simulation Tools')
                                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                            <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                            <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                            <path d="M14 14h7v7" />
                                        </svg>

                                        {{-- ROBOT --}}
                                    @elseif ($card['title'] === 'Robot Expertise')
                                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M6 3h4l2 4-2 4H6z" />
                                            <path d="M10 11l4 3" />
                                            <path d="M14 14l3 5" />
                                            <circle cx="17" cy="20" r="1.5" />
                                        </svg>

                                        {{-- PLC --}}
                                    @else
                                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <rect x="3" y="4" width="18" height="14" rx="2" />
                                            <path d="M7 8h2M11 8h2M15 8h2" />
                                            <path d="M7 12h10" />
                                            <path d="M9 18v2M15 18v2" />
                                        </svg>
                                    @endif
                                </span>

                                {{-- Title --}}
                                <div>
                                    <h3 class="text-xl font-extrabold tracking-tight text-black/80">
                                        {{ $card['title'] }}
                                    </h3>

                                    <div
                                        class="mt-1 h-[3px] w-14 rounded-full bg-white
                                        transition-all duration-300 group-hover:w-20">
                                    </div>
                                </div>
                            </div>

                            {{-- Accent dot --}}
                            <span
                                class="h-2.5 w-2.5 rounded-full
                        {{ $card['tone'] === 'black' ? 'black' : 'black' }}
                        shadow-[0_0_0_6px_rgba(255,255,255,0.06)]">
                            </span>
                        </div>

                        {{-- List --}}
                        <ul class="mt-6 space-y-3 text-sm font-semibold text-black/80">
                            @foreach ($card['items'] as $item)
                                <li class="flex items-center gap-3">
                                    <span
                                        class="h-2 w-2 rounded-full bg-black">
                                    </span>
                                    <span class="leading-relaxed">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>

                        {{-- Bottom divider --}}
                        <div class="mt-7 h-px w-full bg-gradient-to-r from-transparent via-white/25 to-transparent"></div>

                        {{-- Hover glow --}}
                        <div class="pointer-events-none absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"
                            style="
                        background:
                        radial-gradient(600px 220px at 20% 0%,
                        rgba(56,189,248,0.18), transparent 55%),
                        radial-gradient(600px 220px at 90% 20%,
                        rgba(251,191,36,0.16), transparent 55%);
                    ">
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- FOOTPRINT --}}
    <section id="work" class="bg-white text-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <p class="reveal text-xs font-semibold tracking-widest uppercase text-amber-600">Where we work</p>
            <h2 class="reveal mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl">
                Expanding horizons — global operations
            </h2>
            <p class="reveal mt-3 max-w-2xl text-slate-600">
                India, Germany & more comming.
            </p>

            <div class="mt-10 rounded-3xl rw-glass-strong p-8">
                <div class="relative mx-auto max-w-4xl overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/world.jpg') }}" alt="World map"
                        class="w-full h-auto rounded-2xl opacity-90 contrast-105" />

                    {{-- Germany pin --}}
                    <div class="absolute flex flex-col items-center" style="left:46%; top:26%;">
                        <div class="h-3.5 w-3.5 rounded-full bg-amber-500 shadow-md"></div>
                        <div class="mt-1 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-slate-900 shadow">
                            Germany
                        </div>
                    </div>

                    {{-- India pin --}}
                    <div class="absolute flex flex-col items-center" style="left:68%; top:44%;">
                        <div class="h-3.5 w-3.5 rounded-full bg-amber-500 animate-pulse shadow-md"></div>
                        <div class="mt-1 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-slate-900 shadow">
                            India
                        </div>
                    </div>


                    <!-- country tags -->
                    <div class="mt-6 flex gap-3 text-sm">
                        <span class="rounded-full border border-slate-200 bg-white px-4 py-2 font-semibold text-slate-700">
                            🇮🇳 India
                        </span>
                        <span class="rounded-full border border-slate-200 bg-white px-4 py-2 font-semibold text-slate-700">
                            🇩🇪 Germany
                        </span>
                    </div>
                </div>



            </div>
    </section>

    {{-- TRUSTED BRANDS SLIDER --}}
    <section class="bg-white text-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <p class="text-sm font-semibold text-slate-500">Trusted by</p>
                <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight">
                    World’s leading automobile brands
                </h2>
            </div>

            <div class="relative mt-10">
                <!-- VIEWPORT (controls how many logos are visible) -->
                <div class="mx-auto max-w-3xl overflow-hidden">
                    <!-- TRACK (keeps scrolling infinitely) -->
                    <div class="brand-track flex items-center gap-8">
                        @foreach (['suzuki', 'comau', 'hirotec', 'hitachi', 'faith', 'smg', 'msil', 'suzuki', 'comau', 'hirotec', 'hitachi', 'faith', 'smg', 'msil', 'suzuki', 'comau', 'hirotec', 'hitachi', 'faith', 'smg', 'msil'] as $brand)
                            <div class="flex-shrink-0">
                                <div
                                    class="h-24 w-24 rounded-full border border-slate-200 bg-white shadow-sm
                               flex items-center justify-center
                               hover:scale-105 transition">
                                    <img src="{{ asset('images/' . $brand . '.png') }}" alt="{{ ucfirst($brand) }}"
                                        class="h-12 w-auto object-contain" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- CONTACT --}}
    <section id="contact" class="relative isolate overflow-hidden py-24 md:py-32">

        {{-- Background image --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/contact-bg1.jpeg') }}" alt="RoboWelt automation background"
                class="h-full w-full object-cover" />

            {{-- Lighter overlay (image stays visible) --}}
            <div
                class="absolute inset-0 bg-gradient-to-b
            from-transparent
            via-slate-950/25
            to-slate-950/55">
            </div>

            {{-- Brand glow --}}
            <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-sky-500/15 blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 h-96 w-96 rounded-full bg-amber-500/20 blur-3xl"></div>
        </div>

        {{-- Content container --}}

        <div class="relative z-10 mx-auto max-w-7xl px-6">
            <div
                class="rw-glass-hero rounded-3xl border border-white/15 p-10 md:p-14
              grid gap-10 md:grid-cols-[minmax(0,3fr)_minmax(0,2fr)] items-start">

                {{-- Left content --}}
                <div>
                    <h2 class="text-2xl md:text-3xl font-semibold text-white">
                        Ready to start your automation project?
                    </h2>

                    <p class="mt-3 max-w-2xl text-base md:text-lg text-white/75">
                        Share your scope and we’ll suggest the right approach —
                        PLC, robot programming, simulation, or turnkey integration.
                    </p>

                    {{-- Capability chips --}}
                    <div class="mt-6 flex flex-wrap gap-3">
                        <span
                            class="rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm font-semibold text-white/85">
                            PLC + HMI / SCADA
                        </span>
                        <span
                            class="rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm font-semibold text-white/85">
                            Robot programming + cycle-time
                        </span>
                        <span
                            class="rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm font-semibold text-white/85">
                            Simulation + commissioning
                        </span>
                    </div>

                    {{-- CTAs --}}
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="{{ url('/robowelt/contact') }}"
                            class="rounded-2xl bg-amber-500 px-6 py-3 text-base font-semibold text-slate-950 hover:bg-amber-400">
                            Request a quote
                        </a>

                        <a href="{{ url('/robowelt/services') }}"
                            class="rounded-2xl border border-white/25 bg-white/10 px-6 py-3 text-base font-semibold text-white hover:bg-white/15">
                            View services
                        </a>
                    </div>
                </div>

                {{-- Right side: vertical trust cards --}}
                <div class="mt-10 md:mt-0 grid gap-4 text-sm md:text-base text-white/75">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="font-semibold text-white">Fast response</div>
                        <div class="mt-1">We reply within 24–48 hours.</div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="font-semibold text-white">Engineering-led</div>
                        <div class="mt-1">Designed for reliability &amp; safety.</div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="font-semibold text-white">Delivery-ready</div>
                        <div class="mt-1">Commissioning + documentation.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        function scrollToServices(e) {
            e.preventDefault(); // stop default anchor jump

            const target = document.getElementById('services');
            const offset = 120; // 👈 adjust this (navbar height / spacing)

            const y = target.getBoundingClientRect().top + window.pageYOffset - offset;

            window.scrollTo({
                top: y,
                behavior: 'smooth'
            });
        }
    </script>

@endsection
