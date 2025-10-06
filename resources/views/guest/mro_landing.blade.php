<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MRO Aviation Services | MSTECH</title>
  <meta name="description" content="Integrated Aircraft Maintenance, Repair & Overhaul services for reliable fleet performance." />
  <link rel="icon" type="image/png" href="{{ asset('logo/mstech.png') }}" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body { background: linear-gradient(135deg,#ffffff 0%,#f8fafc 55%,#ffffff 100%); -webkit-font-smoothing: antialiased; }
    .reveal { opacity:0; transform: translateY(24px); transition: all .7s ease; }
    .reveal.visible { opacity:1; transform: translateY(0); }
    .glass { backdrop-filter: blur(14px) saturate(140%); -webkit-backdrop-filter: blur(14px) saturate(140%); }
    .gradient-text { background: linear-gradient(90deg,#0f4bcc,#1d78e9,#06b6d4); -webkit-background-clip: text; color: transparent; }
    @keyframes float {0%,100% { transform: translateY(0);} 50% { transform: translateY(-10px);} }
    .float { animation: float 8s ease-in-out infinite; }
  </style>
</head>
<body class="font-sans text-gray-800 dark:bg-slate-900 dark:text-slate-200">
  <!-- Nav -->
  <nav class="fixed top-0 w-full z-40 bg-white/90 dark:bg-slate-900/90 border-b border-slate-200 dark:border-slate-700 backdrop-blur glass">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img src="{{ asset('logo/mstech.png') }}" alt="MSTECH" class="h-9 w-auto" />
        <span class="font-bold tracking-tight text-lg gradient-text">MSTECH MRO</span>
      </div>
      <div class="hidden md:flex items-center gap-6 text-sm font-medium">
        <a href="#services" class="hover:text-blue-600">Services</a>
        <a href="#capabilities" class="hover:text-blue-600">Capabilities</a>
        <a href="#process" class="hover:text-blue-600">Process</a>
        <a href="#contact" onclick="openModal();return false;" class="px-4 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 shadow">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">
      <div class="reveal">
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
          <span class="gradient-text">Aircraft MRO</span><br />
          Excellence & Reliability
        </h1>
        <p class="text-lg text-gray-600 max-w-xl leading-relaxed">End‑to‑end maintenance, engineering support, component care and rapid response services designed to minimize downtime and extend asset life.</p>
        <div class="mt-8 flex flex-wrap gap-4">
          <button onclick="openModal()" class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-semibold shadow hover:shadow-lg hover:-translate-y-0.5 transition">Request Proposal</button>
          <a href="#services" class="px-8 py-4 rounded-xl border-2 border-blue-400 text-blue-700 font-semibold hover:bg-blue-50 transition">View Services</a>
        </div>
        <div class="mt-10 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center text-sm">
          <div class="p-4 rounded-xl bg-white border border-slate-200 shadow"><p class="text-2xl font-bold text-blue-600">12+</p><p class="text-gray-600">Fleet Types</p></div>
          <div class="p-4 rounded-xl bg-white border border-slate-200 shadow"><p class="text-2xl font-bold text-emerald-600">5.6d</p><p class="text-gray-600">Avg TAT (C)</p></div>
          <div class="p-4 rounded-xl bg-white border border-slate-200 shadow"><p class="text-2xl font-bold text-indigo-600">99.2%</p><p class="text-gray-600">On‑Time</p></div>
          <div class="p-4 rounded-xl bg-white border border-slate-200 shadow"><p class="text-2xl font-bold text-rose-600">0</p><p class="text-gray-600">LTI Incidents</p></div>
        </div>
      </div>
      <div class="relative reveal">
        <div class="absolute -inset-4 bg-gradient-to-tr from-blue-100 to-cyan-100 rounded-3xl"></div>
        <div class="relative p-6 rounded-2xl bg-white border border-slate-200 shadow-xl space-y-5">
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow">AOG</div>
            <div>
              <p class="font-semibold">Rapid AOG Recovery</p>
              <p class="text-xs text-gray-500">Mobile response teams</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center shadow">C</div>
            <div>
              <p class="font-semibold">Base / Heavy Checks</p>
              <p class="text-xs text-gray-500">Structured programs</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-indigo-600 text-white flex items-center justify-center shadow">ENG</div>
            <div>
              <p class="font-semibold">Engine Support</p>
              <p class="text-xs text-gray-500">On‑wing & preservation</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-rose-600 text-white flex items-center justify-center shadow">QC</div>
            <div>
              <p class="font-semibold">Quality & Compliance</p>
              <p class="text-xs text-gray-500">Audits & reliability</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-24 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-14 reveal">
        <h2 class="text-4xl font-extrabold gradient-text mb-4">Core Maintenance Services</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Integrated line, base and component maintenance services with engineering and reliability oversight.</p>
      </div>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 reveal">
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow hover:shadow-lg transition">
          <p class="font-semibold text-blue-600 mb-1 text-sm">Line & Transit</p>
          <p class="text-sm text-gray-600">Turnaround support, defect rectification & daily checks.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow hover:shadow-lg transition">
          <p class="font-semibold text-emerald-600 mb-1 text-sm">Heavy / Base</p>
          <p class="text-sm text-gray-600">C / D checks, structural repair & mod embodiment.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow hover:shadow-lg transition">
          <p class="font-semibold text-indigo-600 mb-1 text-sm">Component Bench</p>
          <p class="text-sm text-gray-600">Test, repair, tagging & reliability trending.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow hover:shadow-lg transition">
          <p class="font-semibold text-cyan-600 mb-1 text-sm">Avionics & Mods</p>
          <p class="text-sm text-gray-600">IFEC, ADS‑B, wiring & SB/AD implementation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities -->
  <section id="capabilities" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal">
        <h2 class="text-4xl font-extrabold mb-6 gradient-text">Technical Capabilities</h2>
        <ul class="space-y-4 text-sm text-gray-700">
          <li class="flex gap-3"><span class="text-blue-600">✔</span> Structures: composite, corrosion, repairs</li>
          <li class="flex gap-3"><span class="text-blue-600">✔</span> Powerplant on‑wing support & borescope assist</li>
          <li class="flex gap-3"><span class="text-blue-600">✔</span> Avionics upgrades & integration programs</li>
          <li class="flex gap-3"><span class="text-blue-600">✔</span> Component MRO & reliability tracking</li>
          <li class="flex gap-3"><span class="text-blue-600">✔</span> Interior & cabin refurbishment</li>
          <li class="flex gap-3"><span class="text-blue-600">✔</span> AOG rapid response teams</li>
        </ul>
        <button onclick="openModal()" class="mt-8 px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold shadow hover:bg-blue-700">Request Capability Sheet</button>
      </div>
      <div class="reveal relative">
        <div class="p-8 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-600 text-white shadow-xl">
          <h3 class="text-xl font-semibold mb-4">Reliability Dashboard (Preview)</h3>
          <div class="grid grid-cols-2 gap-4 text-sm">
            <div class="p-4 rounded-lg bg-white/10">
              <p class="text-xs opacity-75">Dispatch Reliability</p>
              <p class="text-2xl font-bold">99.4%</p>
            </div>
            <div class="p-4 rounded-lg bg-white/10">
              <p class="text-xs opacity-75">Avg AOG Delay</p>
              <p class="text-2xl font-bold">2.1h</p>
            </div>
            <div class="p-4 rounded-lg bg-white/10">
              <p class="text-xs opacity-75">Task Compliance</p>
              <p class="text-2xl font-bold">98%</p>
            </div>
            <div class="p-4 rounded-lg bg-white/10">
              <p class="text-xs opacity-75">Repeat Defects</p>
              <p class="text-2xl font-bold">< 3%</p>
            </div>
          </div>
          <div class="mt-6 text-xs opacity-80">*Illustrative metrics for presentation only.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="process" class="py-24 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-14 reveal">
        <h2 class="text-4xl font-extrabold mb-4 gradient-text">Maintenance Process</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Structured workflow ensuring traceability, compliance and operational uptime.</p>
      </div>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 reveal">
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow">
          <p class="font-semibold text-blue-600 mb-1 text-sm">01. Planning</p>
          <p class="text-sm text-gray-600">Task cards, material allocation & resource scheduling.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow">
          <p class="font-semibold text-emerald-600 mb-1 text-sm">02. Execution</p>
          <p class="text-sm text-gray-600">Maintenance actions with digital sign-off.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow">
          <p class="font-semibold text-indigo-600 mb-1 text-sm">03. QA & Review</p>
          <p class="text-sm text-gray-600">Inspection, findings resolution & audits.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow">
          <p class="font-semibold text-rose-600 mb-1 text-sm">04. Reporting</p>
          <p class="text-sm text-gray-600">Reliability & performance analytics.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="contact" class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-center reveal">
      <h2 class="text-4xl font-extrabold mb-4 gradient-text">Ready to Elevate Reliability?</h2>
      <p class="text-gray-600 max-w-2xl mx-auto mb-8">Let our maintenance and engineering teams support your operational goals with data‑driven decision making.</p>
      <button onclick="openModal()" class="px-10 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-semibold shadow hover:shadow-lg">Start Conversation</button>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-10 border-t border-slate-200 text-center text-sm bg-white">
    <p class="text-gray-500">&copy; {{ date('Y') }} MSTECH Aviation MRO. All rights reserved.</p>
  </footer>

  <!-- Modal -->
  <div id="leadModal" class="fixed inset-0 hidden items-center justify-center bg-slate-900/70 backdrop-blur-sm z-50 px-4" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="relative bg-white dark:bg-slate-900 p-6 md:p-8 rounded-2xl w-full max-w-lg shadow-2xl ring-1 ring-slate-200 dark:ring-slate-700">
      <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl font-bold leading-none" aria-label="Close modal">&times;</button>
      <h3 id="modalTitle" class="text-2xl font-bold gradient-text mb-4">Request Contact</h3>
      <form method="POST" action="{{ route('form.store') }}" class="space-y-4" autocomplete="off">
        @csrf
        <div>
          <label class="block text-sm mb-1 font-medium" for="name">Full Name</label>
          <input name="name" id="name" type="text" required maxlength="255" class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label class="block text-sm mb-1 font-medium" for="line_of_business">Line of Business</label>
          <input name="line_of_business" id="line_of_business" type="text" required maxlength="255" class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm mb-1 font-medium" for="company">Company</label>
            <input name="company" id="company" type="text" required maxlength="255" class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <label class="block text-sm mb-1 font-medium" for="phone">Phone</label>
            <input name="phone" id="phone" type="text" required maxlength="20" class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
        </div>
        <div>
          <label class="block text-sm mb-1 font-medium" for="email">Work Email</label>
            <input name="email" id="email" type="email" required maxlength="255" class="w-full px-4 py-3 border rounded-lg bg-white border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div class="flex items-center justify-between pt-2">
          <label class="flex items-center gap-2 text-xs text-gray-600"><input type="checkbox" class="rounded border-slate-300" /> Subscribe</label>
          <button type="submit" class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 shadow">Submit</button>
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

    const revealEls = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); } });
    }, { threshold: 0.12 });
    revealEls.forEach(el=> io.observe(el));

    const modal = document.getElementById('leadModal');
    function openModal(){ modal.classList.remove('hidden'); modal.classList.add('flex'); }
    function closeModal(){ modal.classList.add('hidden'); modal.classList.remove('flex'); }
    window.openModal = openModal; window.closeModal = closeModal;
    modal.addEventListener('mousedown', e=> { if(e.target===modal){ closeModal(); } });
  </script>
</body>
</html>
