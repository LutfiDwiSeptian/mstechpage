<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">
  <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
    <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">Admin Login</h1>

    @if($errors->any())
      <div class="mb-4 text-red-600">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm gap-2">
          <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600">
          <span>Remember me</span>
        </label>
        <a href="#" class="text-sm text-blue-600">Forgot password?</a>
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md font-semibold">Sign in</button>
    </form>
  </div>
</body>
</html>
