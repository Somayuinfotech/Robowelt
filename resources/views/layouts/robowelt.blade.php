<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>@yield('title', 'Robowelt Systems')</title>

    {{-- Primary SEO --}}
    <meta name="description" content="@yield('meta_description', 'Automation, robotics integration, BIW & Non-BIW systems.')" />
    <meta name="keywords" content="@yield('meta_keywords', 'industrial automation, robotics integration, PLC programming, robot programming, BIW automation')" />
    <meta name="robots" content="@yield('meta_robots', 'index, follow')" />
    <meta name="googlebot" content="@yield('meta_robots', 'index, follow')" />

    {{-- Canonical --}}
    @php
        $canonical = rtrim(config('app.url'), '/') . request()->getPathInfo();
    @endphp

    <link rel="canonical" href="{{ $canonical }}" />
    

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og_title', View::yieldContent('title', 'Robowelt Systems'))" />
    <meta property="og:description" content="@yield('og_description', View::yieldContent('meta_description', 'Automation, robotics integration, BIW & Non-BIW systems.'))" />
    <meta property="og:url" content="{{ $canonical }}" />
    <meta property="og:site_name" content="RoboWelt Systems" />
    <meta property="og:image" content="@yield('og_image', asset('images/hero-robo-og.jpg'))" />

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', View::yieldContent('title', 'Robowelt Systems'))" />
    <meta name="twitter:description" content="@yield('twitter_description', View::yieldContent('meta_description', 'Automation, robotics integration, BIW & Non-BIW systems.'))" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/hero-robo-og.jpg'))" />

    {{-- Fast demo mode --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="grain bg-white text-slate-900 antialiased">

    {{-- ================= NAVBAR ================= --}}
    <header
        class="sticky top-0 z-50 border-b border-black/10 bg-white/90 backdrop-blur-xl shadow-[0_8px_30px_rgba(0,0,0,0.08)]">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                {{-- Logo --}}
                <a href="{{ url('/robowelt') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/robo-logo.png') }}" alt="RoboWelt Systems Pvt. Ltd."
                        class="h-16 w-auto object-contain" />
                </a>

                {{-- DESKTOP NAV --}}
                <nav
                    class="hidden md:flex items-center gap-8 text-base font-semibold uppercase tracking-wide text-slate-700">
                    @php
                        $navBase = 'relative transition uppercase tracking-wide
                    after:absolute after:left-0 after:-bottom-1
                    after:h-[2px] after:bg-amber-500
                    after:transition-all duration-300';
                    @endphp

                    <a href="{{ url('/robowelt') }}"
                        class="{{ $navBase }} {{ request()->is('robowelt') ? 'text-slate-900 after:w-full' : 'after:w-0 hover:after:w-full' }}">
                        HOME
                    </a>

                    <a href="{{ url('/robowelt/about-us') }}"
                        class="{{ $navBase }} {{ request()->is('robowelt/about-us') ? 'text-slate-900 after:w-full' : 'after:w-0 hover:after:w-full' }}">
                        ABOUT US
                    </a>

                    {{-- SERVICES DROPDOWN (DESKTOP) --}}
                    <div class="relative group">
                        <a href="{{ url('/robowelt/services') }}"
                            class="{{ $navBase }} flex items-center gap-1 {{ request()->is('robowelt/services*') ? 'text-slate-900 after:w-full' : 'after:w-0 hover:after:w-full' }}">
                            SERVICES
                            <svg class="h-3.5 w-3.5 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <div
                            class="invisible opacity-0 translate-y-2
                        group-hover:visible group-hover:opacity-100 group-hover:translate-y-0
                        absolute left-0 top-full mt-4 w-64 rounded-2xl
                        border border-black/10 bg-white/95 backdrop-blur-xl
                        shadow-[0_20px_60px_rgba(0,0,0,0.12)]
                        transition-all duration-300 z-50 divide-y divide-black/5">

                            <div class="py-3">
                                <a href="{{ url('/robowelt/services/plc-programming') }}"
                                    class="block px-5 py-2 text-sm font-semibold hover:bg-amber-50">PLC Programming</a>
                                <a href="{{ url('/robowelt/services/robot-programming') }}"
                                    class="block px-5 py-2 text-sm font-semibold hover:bg-amber-50">Robot
                                    Programming</a>
                                <a href="{{ url('/robowelt/services/robot-simulation') }}"
                                    class="block px-5 py-2 text-sm font-semibold hover:bg-amber-50">Robot Simulation</a>
                                <a href="{{ url('/robowelt/services/systems-integration') }}"
                                    class="block px-5 py-2 text-sm font-semibold hover:bg-amber-50">System
                                    Integration</a>
                            </div>
                        </div>
                    </div>


                    <a href="{{ url('/robowelt/careers') }}"
                        class="{{ $navBase }} {{ request()->is('robowelt/careers') ? 'text-slate-900 after:w-full' : 'after:w-0 hover:after:w-full' }}">
                        CAREERS
                    </a>

                    <a href="{{ url('/robowelt/contact') }}"
                        class="{{ $navBase }} {{ request()->is('robowelt/contact') ? 'text-slate-900 after:w-full' : 'after:w-0 hover:after:w-full' }}">
                        CONTACT
                    </a>
                </nav>

                {{-- CTA (DESKTOP) --}}
                <div class="hidden md:flex gap-3">
                    {{-- <a href="{{ url('/robowelt/contact') }}"
                        class="rounded-2xl border px-5 py-2.5 text-sm font-semibold">
                        Talk to us
                    </a> --}}
                    <a href="{{ url('/robowelt/contact') }}"
                        class="rounded-2xl bg-amber-500 px-5 py-2.5 text-sm font-semibold">
                        Discuss Project
                    </a>
                </div>

                {{-- HAMBURGER (MOBILE) --}}
                <button id="menuBtn"
                    class="md:hidden inline-flex items-center justify-center rounded-xl border border-slate-300 p-2"
                    aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
                    <svg id="menuIcon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- BACKDROP (DIM BG) --}}
        <div id="menuBackdrop" class="fixed inset-0 z-40 hidden bg-black/40 backdrop-blur-[1px] md:hidden"></div>

        {{-- MOBILE MENU (SLIDE DOWN) --}}
        <div id="mobileMenu"
            class="md:hidden fixed left-0 right-0 top-16 z-50 hidden
               border-t border-black/10 bg-white/95 backdrop-blur-xl
               shadow-[0_20px_60px_rgba(0,0,0,0.12)]
               overflow-hidden">
            <div id="mobileMenuInner"
                class="px-4 py-4 space-y-2 text-sm font-semibold uppercase
                   transition-all duration-300 ease-out
                   opacity-0 -translate-y-3">
                <a data-close-menu href="{{ url('/robowelt') }}" class="block py-2">Home</a>
                <a data-close-menu href="{{ url('/robowelt/about-us') }}" class="block py-2">About Us</a>

                {{-- SERVICES (MOBILE) --}}
                <button id="mobileServicesBtn" type="button" class="flex w-full items-center justify-between py-2"
                    aria-expanded="false" aria-controls="mobileServices">
                    <span>Services</span>
                    <svg id="servicesChevron" class="h-4 w-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobileServices" class="hidden pl-4 space-y-1 text-sm">
                    {{-- IMPORTANT: add a direct Services page link so it opens on mobile --}}
                    <a data-close-menu href="{{ url('/robowelt/services') }}" class="block py-1 opacity-80">
                        Services Overview</a>

                    <a data-close-menu href="{{ url('/robowelt/services/plc-programming') }}" class="block py-1">PLC
                        Programming</a>
                    <a data-close-menu href="{{ url('/robowelt/services/robot-programming') }}"
                        class="block py-1">Robot Programming</a>
                    <a data-close-menu href="{{ url('/robowelt/services/robot-simulation') }}"
                        class="block py-1">Robot
                        Simulation</a>
                    <a data-close-menu href="{{ url('/robowelt/services/systems-integration') }}"
                        class="block py-1">System Integration</a>
                </div>

                <a data-close-menu href="{{ url('/robowelt/careers') }}" class="block py-2">Careers</a>
                <a data-close-menu href="{{ url('/robowelt/contact') }}" class="block py-2">Contact</a>

                {{-- Mobile CTA --}}
                <div class="pt-3 grid grid-cols-1 gap-2">
                    {{-- <a data-close-menu href="{{ url('/robowelt/contact') }}"
                        class="rounded-2xl border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-center">
                        Talk to us
                    </a> --}}
                    <a data-close-menu href="{{ url('/robowelt/contact') }}"
                        class="rounded-2xl bg-amber-500 px-5 py-2.5 text-sm font-semibold text-center">
                        Discuss Project
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="border-t border-black/10 bg-white/90 backdrop-blur-xl">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div class="mx-auto text-sm text-slate-600">
                    © {{ date('Y') }} <span class="font-semibold text-slate-800">RoboWelt</span>. All rights
                    reserved.
                </div>
                {{-- <div class="flex flex-wrap gap-6 text-sm font-semibold">
                    <a href="{{ url('/robowelt/policy') }}" class="hover:text-amber-600 transition">Privacy
                        Policy</a>
                    <a href="{{ url('/robowelt/tnc') }}" class="hover:text-amber-600 transition">Terms &
                        Conditions</a>
                </div> --}}
            </div>
        </div>
    </footer>


    {{-- SCROLL TO TOP BUTTON --}}
    <button id="scrollTopBtn" aria-label="Scroll to top"
        class="fixed bottom-6 right-10 z-[60]
           hidden opacity-0 translate-y-3
           rounded-2xl bg-amber-500 p-3
           text-slate-950 shadow-[0_10px_30px_rgba(0,0,0,0.25)]
           transition-all duration-300
           hover:bg-amber-400 hover:-translate-y-1">

        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        // reveal on scroll
        const els = document.querySelectorAll('.reveal');
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('show');
            })
        }, {
            threshold: .12
        });
        els.forEach(el => io.observe(el));

        // ===== MOBILE MENU (slide + backdrop + close on link click) =====
        const menuBtn = document.getElementById('menuBtn');
        const menuBackdrop = document.getElementById('menuBackdrop');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuInner = document.getElementById('mobileMenuInner');
        const menuIcon = document.getElementById('menuIcon');

        const servicesBtn = document.getElementById('mobileServicesBtn');
        const servicesMenu = document.getElementById('mobileServices');
        const servicesChevron = document.getElementById('servicesChevron');

        function openMenu() {
            mobileMenu.classList.remove('hidden');
            menuBackdrop.classList.remove('hidden');
            menuBtn.setAttribute('aria-expanded', 'true');
            document.body.classList.add('overflow-hidden');

            // animate in
            requestAnimationFrame(() => {
                mobileMenuInner.classList.remove('opacity-0', '-translate-y-3');
                mobileMenuInner.classList.add('opacity-100', 'translate-y-0');
            });

            // change icon to X
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />';
        }

        function closeMenu() {
            menuBtn.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('overflow-hidden');

            // animate out
            mobileMenuInner.classList.add('opacity-0', '-translate-y-3');
            mobileMenuInner.classList.remove('opacity-100', 'translate-y-0');

            setTimeout(() => {
                mobileMenu.classList.add('hidden');
                menuBackdrop.classList.add('hidden');
            }, 220);

            // reset icon to hamburger
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />';
        }

        function toggleMenu() {
            const isOpen = menuBtn.getAttribute('aria-expanded') === 'true';
            isOpen ? closeMenu() : openMenu();
        }

        menuBtn.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', closeMenu);

        // Close menu on any link click
        document.querySelectorAll('[data-close-menu]').forEach(a => {
            a.addEventListener('click', () => closeMenu());
        });

        // Services submenu toggle
        servicesBtn.addEventListener('click', () => {
            const expanded = servicesBtn.getAttribute('aria-expanded') === 'true';
            servicesBtn.setAttribute('aria-expanded', (!expanded).toString());
            servicesMenu.classList.toggle('hidden');
            servicesChevron.classList.toggle('rotate-180');
        });

        // Close on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && menuBtn.getAttribute('aria-expanded') === 'true') closeMenu();
        });

        // If screen resized to desktop, ensure mobile menu resets
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                // md breakpoint
                mobileMenu.classList.add('hidden');
                menuBackdrop.classList.add('hidden');
                mobileMenuInner.classList.add('opacity-0', '-translate-y-3');
                mobileMenuInner.classList.remove('opacity-100', 'translate-y-0');
                menuBtn.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('overflow-hidden');
                menuIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />';
            }
        });
    </script>
    <script>
        // ===== SCROLL TO TOP BUTTON =====
        const scrollTopBtn = document.getElementById('scrollTopBtn');

        function toggleScrollTopBtn() {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.remove('hidden');
                requestAnimationFrame(() => {
                    scrollTopBtn.classList.remove('opacity-0', 'translate-y-3');
                    scrollTopBtn.classList.add('opacity-100', 'translate-y-0');
                });
            } else {
                scrollTopBtn.classList.add('opacity-0', 'translate-y-3');
                scrollTopBtn.classList.remove('opacity-100', 'translate-y-0');

                setTimeout(() => {
                    if (window.scrollY < 300) {
                        scrollTopBtn.classList.add('hidden');
                    }
                }, 300);
            }
        }

        window.addEventListener('scroll', toggleScrollTopBtn);

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <style>
        .rw-chatfab {
            position: fixed;
            right: 24px;
            bottom: 104px;
            z-index: 9999;
        }

        /* .rw-chatbtn {
            width: 56px;
            height: 56px;
            border-radius: 999px;
            background: #0f172a;
            color: #fff;
            display: grid;
            place-items: center;
            box-shadow: 0 14px 40px rgba(0, 0, 0, .2);
            border: none;
            cursor: pointer
        } */

        .rw-chatpanel {
            position: fixed;
            right: 24px;
            bottom: 176px;
            width: 340px;
            max-width: calc(100vw - 36px);
            height: 460px;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, .12);
            border-radius: 16px;
            box-shadow: 0 18px 60px rgba(0, 0, 0, .25);
            overflow: hidden;
            display: none;
            z-index: 9999
        }

        .rw-chathead {
            padding: 12px 14px;
            background: rgba(15, 23, 42, .95);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .rw-chatbody {
            padding: 12px;
            height: 340px;
            overflow: auto;
            background: linear-gradient(180deg, #f8fafc, #ffffff)
        }

        .rw-msg {
            margin: 10px 0;
            display: flex
        }

        .rw-msg.user {
            justify-content: flex-end
        }

        .rw-bubble {
            max-width: 80%;
            padding: 10px 12px;
            border-radius: 14px;
            font-size: 14px;
            line-height: 1.3
        }

        .rw-msg.user .rw-bubble {
            background: #0f172a;
            color: #fff;
            border-bottom-right-radius: 6px
        }

        .rw-msg.bot .rw-bubble {
            background: #eef2ff;
            color: #0f172a;
            border-bottom-left-radius: 6px
        }

        .rw-chatfoot {
            padding: 10px;
            border-top: 1px solid rgba(0, 0, 0, .08);
            display: flex;
            gap: 8px;
            background: #fff
        }

        .rw-chatinput {
            flex: 1;
            border: 1px solid rgba(0, 0, 0, .14);
            border-radius: 12px;
            padding: 10px 12px;
            outline: none
        }

        .rw-chatsend {
            border: none;
            background: #111827;
            color: #fff;
            padding: 10px 14px;
            border-radius: 12px;
            cursor: pointer
        }

        .rw-chatbtn {
            width: 78px;
            height: 78px;
            border-radius: 50%;

            background: transparent;
            /* no background */
            box-shadow: none;
            /* no shadow */
            border: none;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;
        }

        .rw-chat-icon {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .rw-chatbtn:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="rw-chatpanel" id="rwChatPanel" aria-hidden="true">
        <div class="rw-chathead">
            <div>
                <div style="font-weight:700;font-size:14px;">RoboWelt Assistant</div>
                <div style="opacity:.85;font-size:12px;">Site & services only</div>
            </div>
            <button id="rwChatClose"
                style="background:transparent;border:none;color:#fff;font-size:18px;cursor:pointer;">×</button>
        </div>

        <div class="rw-chatbody" id="rwChatBody">
            <div class="rw-msg bot">
                <div class="rw-bubble">Hi! Ask me about RoboWelt services, pages, or how to reach the team.</div>
            </div>
        </div>

        <div class="rw-chatfoot">
            <input id="rwChatInput" class="rw-chatinput" placeholder="Ask about services…" />
            <button id="rwChatSend" class="rw-chatsend">Send</button>
        </div>
    </div>

    <div class="rw-chatfab">
        <button class="rw-chatbtn" id="rwChatToggle" aria-label="Open chat">
            <img src="{{ asset('images/chatbot.svg') }}" alt="Chat" class="rw-chat-icon">
        </button>
    </div>

    <script>
        (function() {
            const panel = document.getElementById('rwChatPanel');
            const toggle = document.getElementById('rwChatToggle');
            const closeBtn = document.getElementById('rwChatClose');
            const body = document.getElementById('rwChatBody');
            const input = document.getElementById('rwChatInput');
            const send = document.getElementById('rwChatSend');

            function openChat() {
                panel.style.display = 'block';
                panel.setAttribute('aria-hidden', 'false');
                input.focus();
            }

            function closeChat() {
                panel.style.display = 'none';
                panel.setAttribute('aria-hidden', 'true');
            }

            function addMsg(text, who) {
                const wrap = document.createElement('div');
                wrap.className = 'rw-msg ' + who;
                const bubble = document.createElement('div');
                bubble.className = 'rw-bubble';
                bubble.textContent = text;
                wrap.appendChild(bubble);
                body.appendChild(wrap);
                body.scrollTop = body.scrollHeight;
            }

            async function ask() {
                const msg = input.value.trim();
                if (!msg) return;
                input.value = '';
                addMsg(msg, 'user');
                addMsg('Typing…', 'bot');

                const bots = body.querySelectorAll('.rw-msg.bot .rw-bubble');
                const lastBot = bots[bots.length - 1];

                try {
                    const res = await fetch("{{ route('chat') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            message: msg
                        })
                    });
                    const data = await res.json();
                    lastBot.textContent = data.reply || "Please use the Contact page or 'Discuss Project'.";
                } catch (e) {
                    lastBot.textContent = "Sorry—chat is temporarily unavailable. Please use the Contact page.";
                }
            }

            toggle.addEventListener('click', () => {
                if (panel.style.display === 'block') closeChat();
                else openChat();
            });
            closeBtn.addEventListener('click', closeChat);
            send.addEventListener('click', ask);
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') ask();
            });
        })();
    </script>


</body>

</html>
