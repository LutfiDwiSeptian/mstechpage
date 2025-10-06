<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Admin Dashboard - Mobile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Ensure large touch targets on mobile */
    button { touch-action: manipulation; }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Top bar with centered logo -->
  <header class="bg-white shadow p-4">
    <div class="max-w-xl mx-auto flex items-center justify-center">
      <img src="{{ asset('logo/mstech.png') }}" alt="MSTECH" class="h-12">
    </div>
  </header>

  <!-- Main content -->
  <main class="flex-1 overflow-auto p-4">
    <div class="max-w-xl mx-auto">
      <h1 class="text-lg font-semibold text-gray-900 text-center">Welcome, Admin</h1>
      <p class="text-center text-sm text-gray-600 mt-1">Simple mobile-first dashboard. Tap a card to manage.</p>

      <div class="mt-5 space-y-4">
        <button class="w-full bg-white rounded-xl p-4 shadow flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-gray-900">Aircrafts</div>
            <div class="text-xs text-gray-500 mt-1">Manage fleet and maintenance</div>
          </div>
          <div class="text-blue-600 font-semibold">Open</div>
        </button>

        <button class="w-full bg-white rounded-xl p-4 shadow flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-gray-900">Inspections</div>
            <div class="text-xs text-gray-500 mt-1">View inspection reports</div>
          </div>
          <div class="text-blue-600 font-semibold">Open</div>
        </button>

        <button class="w-full bg-white rounded-xl p-4 shadow flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-gray-900">Support</div>
            <div class="text-xs text-gray-500 mt-1">Messages and tickets</div>
          </div>
          <div class="text-blue-600 font-semibold">Open</div>
        </button>
      </div>

      <!-- Quick stats row (stacked for mobile) -->
      <div class="mt-6 grid grid-cols-1 gap-3">
        <div class="bg-white rounded-lg p-4 shadow flex items-center justify-between">
          <div>
            <div class="text-xs text-gray-500">Active Fleet</div>
            <div class="text-xl font-bold text-gray-900">12</div>
          </div>
          <div class="text-sm text-green-600">Up to date</div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow flex items-center justify-between">
          <div>
            <div class="text-xs text-gray-500">Pending Inspections</div>
            <div class="text-xl font-bold text-gray-900">3</div>
          </div>
          <div class="text-sm text-yellow-600">Attention</div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bottom sticky area with logout -->
  <footer class="bg-white p-4 shadow-top">
    <div class="max-w-xl mx-auto flex gap-3">
      <form method="POST" action="{{ route('admin.logout') }}" class="flex-1">
        @csrf
        <button type="submit" class="w-full bg-red-600 text-white rounded-lg py-3 font-semibold">Logout</button>
      </form>
      <a href="/" class="w-16 flex items-center justify-center bg-gray-100 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
        </svg>
      </a>
    </div>
  </footer>
</body>
</html>
