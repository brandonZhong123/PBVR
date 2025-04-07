<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="font-sans bg-gray-100 flex justify-center items-center h-screen m-0 p-5">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm text-center border border-gray-300">
  <h2 class="mb-5 text-gray-800 font-semibold">Login</h2>

  <!-- Login Form -->
  <form action="{{ route('users.authenticate') }}" method="POST" class="space-y-4">
    @csrf

    <!-- Email Field -->
    <div class="mb-4 text-left w-full">
      <label for="email" class="text-sm font-medium text-gray-600 mb-2">Email</label>
      <input type="email" name="email" id="email" required value="{{ old('email') }}" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-colors">
      @error('email')
        <span class="text-red-600 text-xs mt-1">{{ $message }}</span>
      @enderror
    </div>

    <!-- Password Field -->
    <div class="mb-4 text-left w-full">
      <label for="password" class="text-sm font-medium text-gray-600 mb-2">Password</label>
      <input type="password" name="password" id="password" required class="w-full p-3 border border-gray-300 rounded-md text-gray-800 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-colors">
      @error('password')
        <span class="text-red-600 text-xs mt-1">{{ $message }}</span>
      @enderror
    </div>

    <!-- Login Button -->
    <div class="mt-6 space-y-4">
      <button type="submit" class="w-full py-3 bg-blue-500 text-white font-medium rounded-md border border-blue-400 hover:bg-blue-400 transition-colors">Login</button>
      <button type="button" class="w-full py-3 bg-gray-100 text-gray-800 font-medium rounded-md border border-gray-300 hover:bg-gray-200 transition-colors" onclick="window.location.href='/register';">Create an account</button>
    </div>
  </form>
</div>

<script src="login.js"></script>
</body>
</html>
