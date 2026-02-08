<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Library Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 to-green-200">

  <div class="max-w-4xl w-full bg-white rounded-2xl shadow-2xl overflow-hidden flex">

    <!-- LOGIN SECTION -->
    <div class="w-full md:w-1/2 flex flex-col justify-center px-10 py-16">
      <h1 class="text-3xl font-bold text-gray-700 mb-2">Welcome Back 👋</h1>
      <p class="text-sm text-gray-500 mb-6">
        Please login to your account to continue
      </p>

      <div class="space-y-4 mb-6">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
          <input
            type="email"
            placeholder="you@example.com"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent"
          >
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
          <input
            type="password"
            placeholder="••••••••"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent"
          >
        </div>
      </div>

      <button class="w-full bg-green-500 hover:bg-green-600 transition text-white font-semibold py-2.5 rounded-lg shadow-md mb-4">
        Login
      </button>

      <p class="text-sm text-gray-600 text-center">
        Don’t have an account?
        <a href="#" class="text-green-500 font-semibold hover:underline">Register now</a>
      </p>
    </div>

    <!-- IMAGE / BRAND SECTION -->
    <div class="hidden md:flex md:w-1/2 bg-green-500 items-center justify-center">
      <img
        src="images/logo.png"
        alt="Library Logo"
        class="w-3/4 object-contain drop-shadow-lg"
      >
    </div>

  </div>

</body>
</html>
