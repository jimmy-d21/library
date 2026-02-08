<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Library Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 to-green-200">

  <div class="max-w-4xl w-full bg-white rounded-2xl shadow-2xl overflow-hidden flex">

    <!-- IMAGE / BRAND SECTION -->
    <div class="hidden md:flex md:w-1/2 bg-green-500 items-center justify-center">
      <img
        src="images/logo.png"
        alt="Library Logo"
        class="w-3/4 object-contain drop-shadow-lg"
      >
    </div>

    <!-- REGISTER FORM -->
    <div class="w-full md:w-1/2 flex flex-col justify-center px-10 py-14">
      <h1 class="text-3xl font-bold text-gray-700 mb-2">Create Account ✨</h1>
      <p class="text-sm text-gray-500 mb-6">
        Join our library system and start exploring books
      </p>

      <form class="space-y-4">

        <!-- Firstname -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Firstname</label>
          <input
            type="text"
            placeholder="Enter your firstname"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>

        <!-- Lastname -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Lastname</label>
          <input
            type="text"
            placeholder="Enter your lastname"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>

        <!-- Birthdate -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Birthdate</label>
          <input
            type="date"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>

        <!-- Role -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Role</label>
          <select
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm bg-white
                   focus:outline-none focus:ring-2 focus:ring-green-400 cursor-pointer"
          >
            <option value="encoder">Encoder</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <!-- Password -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
          <input
            type="password"
            placeholder="••••••••"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>

        <!-- Confirm Password -->
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Confirm Password</label>
          <input
            type="password"
            placeholder="••••••••"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>

        <!-- Register Button -->
        <button
          type="submit"
          class="w-full bg-green-500 hover:bg-green-600 transition-all duration-200
                 text-white font-semibold py-2.5 rounded-lg shadow-md"
        >
          Register
        </button>

      </form>

      <p class="text-sm text-gray-600 text-center mt-4">
        Already have an account?
        <a href="/library/index.php" class="text-green-500 font-semibold hover:underline">
          Login now
        </a>
      </p>
    </div>

  </div>

</body>
</html>
