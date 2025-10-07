<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Admin Dashboard</title>
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
        <div class="flex items-center justify-between mb-4 flex-wrap gap-4">
          <div>
            <h2 class="text-lg font-semibold text-gray-900">Leads / Submissions</h2>
            <p class="text-sm text-gray-600">Latest entries from posts table (Form submissions).</p>
          </div>
          <div class="flex items-center gap-2">
            <button id="downloadCsv" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">Download CSV</button>
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">Logout</button>
            </form>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-x-auto">
          <table id="formsTable" class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Line of Business</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Job Title</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @forelse($forms as $row)
              <tr>
                <td class="px-4 py-3 text-xs text-gray-600">{{ $row->id }}</td>
                <td class="px-4 py-3 text-sm text-gray-800 font-medium">{{ $row->name }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $row->line_of_business }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $row->company_name }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $row->job_title }}</td>
                <td class="px-4 py-3 text-sm text-blue-700 underline break-all">{{ $row->email }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $row->phone_number }}</td>
                <td class="px-4 py-3 text-xs text-gray-500" title="{{ $row->created_at }}">{{ $row->created_at->diffForHumans() }}</td>
              </tr>
              @empty
              <tr>
                <td colspan="8" class="px-4 py-6 text-center text-sm text-gray-500">No submissions yet.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <div class="mt-4">
          {{ $forms->links() }}
        </div>
      </div>
    </main>
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

      function tableToCSV(table) {
        const rows = Array.from(table.querySelectorAll('tr'));
        return rows.map(row => {
          const cols = Array.from(row.querySelectorAll('th, td'));
          return cols.map(c => '"' + c.innerText.replace(/"/g, '""') + '"').join(',');
        }).join('\n');
      }
      document.getElementById('downloadCsv').addEventListener('click', function() {
        const table = document.getElementById('formsTable');
        const csv = tableToCSV(table);
        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        const dateStr = new Date().toISOString().slice(0,10);
        a.download = 'submissions_'+dateStr+'.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
      });
    </script>
</body>
</html>
