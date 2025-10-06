<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MRO Aviation Services | MSTECH</title>
    <meta name="description"
        content="Integrated Aircraft Maintenance, Repair & Overhaul services for reliable fleet performance." />
    <link rel="icon" type="image/png" href="{{ asset('logo/mstech.png') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: #f3f5f8;
            -webkit-font-smoothing: antialiased;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, sans-serif
        }

        :root {
            --c-brand: #1659c7;
            --c-brand-dark: #0d4aa9;
            --c-text: #1e293b;
            --c-muted: #64748b
        }

        .fade-up {
            opacity: 0;
            transform: translateY(18px);
            transition: .45s ease
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0)
        }

        #mobileMenu {
            display: none
        }

        @media (max-width:768px) {
            #mobileMenu.open {
                display: block
            }
        }
    </style>
</head>

<body class="font-sans text-gray-800 dark:bg-slate-900 dark:text-slate-200">
    <!-- Nav (Centered Logo, Blue Gradient, Hide on Scroll) -->
    <nav id="navbar" class="fixed top-0 inset-x-0 z-40 bg-[var(--c-brand)] text-white shadow-sm">
        <div class="max-w-6xl mx-auto h-16 px-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="{{ asset('logo/mstech.png') }}" alt="MSTECH" class="h-9 w-auto" />
                <span class="font-semibold tracking-tight"></span>
            </div>
            <button id="mobileToggle"
                class="md:hidden p-2 rounded-md bg-white/15 focus:outline-none focus:ring-2 focus:ring-white/60"
                aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden md:flex items-center gap-8 text-sm">
                <a href="#services" class="relative hover:opacity-90">Services</a>
                <a href="#capabilities" class="relative hover:opacity-90">Capabilities</a>
                <a href="#process" class="relative hover:opacity-90">Process</a>
                <button onclick="openModal();return false;"
                    class="bg-white text-[var(--c-brand)] font-semibold px-4 py-2 rounded-md text-xs">Contact</button>
            </div>
        </div>
        <div id="mobileMenu" class="md:hidden bg-white text-[var(--c-text)] border-b border-slate-200"></div>
    </nav>
    <section class="pt-28 md:pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-5 grid lg:grid-cols-2 gap-10 items-start">
            <div class="space-y-7 fade-up">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight tracking-tight">
                    Precision. Reliability.<br class="hidden sm:block" /> Excellence in MRO.
                </h1>
                <p class="max-w-lg text-sm md:text-base text-gray-200">
                    MSTECH delivers world-class aircraft Maintenance, Repair, and Overhaul services —
                    combining technical expertise, safety commitment, and engineering excellence to keep every flight
                    dependable.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="mailto:office@mstech-pt.com"
                        class="inline-flex items-center gap-2 bg-[var(--c-brand)] hover:bg-[var(--c-brand-dark)] text-white font-semibold px-6 py-3 rounded-lg text-sm shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-mailbox">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 21v-6.5a3.5 3.5 0 0 0 -7 0v6.5h18v-6a4 4 0 0 0 -4 -4h-10.5" />
                            <path d="M12 11v-8h4l2 2l-2 2h-4" />
                            <path d="M6 15h1" />
                        </svg>
                        Reach out to us
                    </a>
                </div>
            </div>

            <div class="fade-up">
                <div
                    class="relative w-full h-0 pb-[56.25%] rounded-xl overflow-hidden border border-slate-200 shadow bg-black">
                    <iframe class="absolute inset-0 w-full h-full"
                        src="https://www.youtube.com/embed/6XOCSyJ2kwA?autoplay=1&mute=1&rel=0&modestbranding=1&playsinline=1"
                        title="MRO Overview"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        loading="lazy" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section id="services" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-10 fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-2">Our Services</h2>
                <p class="text-slate-600 text-sm md:text-base max-w-2xl mx-auto">Integrated line, base and component
                    programs.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm fade-up">
                <div class="bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-4 transition">
                    <p class="font-semibold text-slate-800 mb-1">Base Maintenance</p>
                    <p class="text-slate-500 leading-relaxed">Turnaround & defect rectification.</p>
                </div>
                <div class="bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-4 transition">
                    <p class="font-semibold text-slate-800 mb-1">Line Maintenance</p>
                    <p class="text-slate-500 leading-relaxed">C / D checks & structural work.</p>
                </div>
                <div class="bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-4 transition">
                    <p class="font-semibold text-slate-800 mb-1">NDT and Specialized Service</p>
                    <p class="text-slate-500 leading-relaxed">Test & reliability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section id="capabilities" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-5 grid lg:grid-cols-2 gap-12 items-start">
            <div class="fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-5">Technical Capabilities</h2>
                <ul class="space-y-3 text-sm text-slate-600">
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Structures & composite repairs
                    </li>
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Powerplant on‑wing & borescope
                        assist</li>
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Avionics modifications &
                        integration</li>
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Component repair & reliability
                        tracking</li>
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Digital records & conformity
                    </li>
                    <li class="flex gap-3"><span class="text-[var(--c-brand)]">✔</span> Materials sourcing & logistics
                    </li>
                </ul>
            </div>
            <div class="fade-up">
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                    <p class="font-semibold text-slate-700 mb-4 text-sm">Sample Metrics</p>
                    <div class="grid grid-cols-2 gap-4 text-center text-xs">
                        <div class="bg-white rounded-lg p-3 border border-slate-200">
                            <p class="font-bold text-[var(--c-brand)]">99.4%</p>
                            <p class="mt-1 text-[10px] tracking-wide text-slate-500">DISPATCH</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-slate-200">
                            <p class="font-bold text-[var(--c-brand)]">2.1h</p>
                            <p class="mt-1 text-[10px] tracking-wide text-slate-500">AOG DELAY</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-slate-200">
                            <p class="font-bold text-[var(--c-brand)]">98%</p>
                            <p class="mt-1 text-[10px] tracking-wide text-slate-500">COMPLIANCE</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-slate-200">
                            <p class="font-bold text-[var(--c-brand)]">
                                < 3%</p>
                                    <p class="mt-1 text-[10px] tracking-wide text-slate-500">REPEAT</p>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-400 mt-4">Illustrative only.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section id="process" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-10 fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-2">Maintenance Process</h2>
                <p class="text-slate-600 text-sm md:text-base max-w-2xl mx-auto">Clear phased workflow for consistent
                    results.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm fade-up">
                <div class="bg-white border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold text-slate-800 mb-1">01. Planning</p>
                    <p class="text-slate-500 leading-relaxed">Task cards & slots</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold text-slate-800 mb-1">02. Execution</p>
                    <p class="text-slate-500 leading-relaxed">Work performance</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold text-slate-800 mb-1">03. QA & Review</p>
                    <p class="text-slate-500 leading-relaxed">Inspections</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold text-slate-800 mb-1">04. Reporting</p>
                    <p class="text-slate-500 leading-relaxed">Analytics</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="contact" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-5 text-center fade-up">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-3">Ready to Discuss?</h2>
            <p class="text-slate-600 max-w-2xl mx-auto mb-6 text-sm md:text-base">Let us help you strengthen fleet
                reliability & availability.</p>
            <button onclick="openModal()"
                class="bg-[var(--c-brand)] hover:bg-[var(--c-brand-dark)] text-white font-semibold px-8 py-4 rounded-lg text-sm shadow">Start
                Conversation</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-slate-200 text-center text-[11px] bg-white">
        <p class="text-gray-500">&copy; {{ date('Y') }} MSTECH Aviation MRO.</p>
    </footer>

    <!-- Modal -->
    <div id="leadModal"
        class="fixed inset-0 hidden items-center justify-center bg-slate-900/70 backdrop-blur-sm z-50 px-4"
        role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div
            class="relative bg-white dark:bg-slate-900 p-6 md:p-8 rounded-2xl w-full max-w-lg shadow-2xl ring-1 ring-slate-200 dark:ring-slate-700">
            <button onclick="closeModal()"
                class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl font-bold leading-none"
                aria-label="Close modal">&times;</button>
            <h3 id="modalTitle" class="text-2xl font-bold gradient-text mb-4">Request Contact</h3>
            <form method="POST" action="{{ route('form.store') }}" class="space-y-4" autocomplete="off">
                @csrf
                <div>
                    <label class="block text-sm mb-1 font-medium" for="name">Full Name</label>
                    <input name="name" id="name" type="text" required maxlength="255"
                        class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div>
                    <label class="block text-sm mb-1 font-medium" for="line_of_business">Line of Business</label>
                    <input name="line_of_business" id="line_of_business" type="text" required maxlength="255"
                        class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm mb-1 font-medium" for="company">Company</label>
                        <input name="company" id="company" type="text" required maxlength="255"
                            class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label class="block text-sm mb-1 font-medium" for="phone">Phone</label>
                        <input name="phone" id="phone" type="text" required maxlength="20"
                            class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm mb-1 font-medium" for="email">Work Email</label>
                    <input name="email" id="email" type="email" required maxlength="255"
                        class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="flex items-center justify-between pt-2">
                    <label class="flex items-center gap-2 text-xs text-gray-600"><input type="checkbox"
                            class="rounded border-slate-300" /> Subscribe</label>
                    <button type="submit"
                        class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Submitted',
                text: @json(session('success')),
                confirmButtonColor: '#2563EB'
            });
        @endif

    // Fade-up animation
    const fades = document.querySelectorAll('.fade-up');
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver(es => { es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } }) }, { threshold: .15 });
            fades.forEach(el => io.observe(el));
        } else { fades.forEach(el => el.classList.add('visible')); }

        const modal = document.getElementById('leadModal');
        function openModal() { modal.classList.remove('hidden'); modal.classList.add('flex'); }
        function closeModal() { modal.classList.add('hidden'); modal.classList.remove('flex'); }
        window.openModal = openModal; window.closeModal = closeModal;
        modal.addEventListener('mousedown', e => { if (e.target === modal) { closeModal(); } });

        // Mobile menu
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.innerHTML = `
      <div class="px-5 py-4 space-y-3 text-sm">
        <a href="#services" class="block" onclick="mobileMenu.classList.remove('open')">Services</a>
        <a href="#capabilities" class="block" onclick="mobileMenu.classList.remove('open')">Capabilities</a>
        <a href="#process" class="block" onclick="mobileMenu.classList.remove('open')">Process</a>
      </div>`;
        mobileToggle?.addEventListener('click', () => mobileMenu.classList.toggle('open'));
    </script>
</body>

</html>
