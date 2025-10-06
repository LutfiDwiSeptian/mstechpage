<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Admin Dashboard - Mobile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    button { touch-action: manipulation; }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <header class="bg-white shadow p-4">
    <div class="max-w-xl mx-auto flex items-center justify-center">
      <img src="{{ asset('logo/mstech.png') }}" alt="MSTECH" class="h-12">
    </div>
  </header>
    <!-- Main content: Table + Download -->
    <main class="flex-1 overflow-auto p-4">
      <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-4">
          <div>
            <h2 class="text-lg font-semibold text-gray-900">Fleet Overview</h2>
            <p class="text-sm text-gray-600">List of aircraft and recent inspection status.</p>
          </div>
          <div class="flex items-center gap-2">
            <button id="downloadCsv" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Download CSV</button>
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Logout</button>
            </form>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-x-auto">
          <table id="fleetTable" class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aircraft</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Model</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Last Inspection</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-4 py-3 text-sm text-gray-700">AC-001</td>
                <td class="px-4 py-3 text-sm text-gray-700">Boeing 737</td>
                <td class="px-4 py-3 text-sm text-gray-700">737-800</td>
                <td class="px-4 py-3 text-sm text-gray-700">2025-09-10</td>
                <td class="px-4 py-3 text-sm text-green-600 font-semibold">OK</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <!-- Bottom sticky area with home shortcut -->
    <footer class="bg-white p-4 shadow-top">
      <div class="max-w-4xl mx-auto flex items-center justify-end gap-3">
        <a href="/" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
          </svg>
          Home
        </a>
      </div>
    </footer>

    <script>
      // CSV download from table
      function tableToCSV(table) {
        const rows = Array.from(table.querySelectorAll('tr'));
        return rows.map(row => {
          const cols = Array.from(row.querySelectorAll('th, td'));
          return cols.map(c => '"' + c.innerText.replace(/"/g, '""') + '"').join(',');
        }).join('\n');
      }

      document.getElementById('downloadCsv').addEventListener('click', function() {
        const table = document.getElementById('fleetTable');
        const csv = tableToCSV(table);
        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'fleet.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
      });
    </script>
</body>
</html>
