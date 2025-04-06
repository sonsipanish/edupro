<div class="w-full flex items-center justify-between px-8 py-4 bg-transparent">
  <!-- Left: Logo -->
  <div class="flex items-center gap-2">
    <img src="img/logo.png" alt="Logo" class="w-10 h-10 object-contain">
    <span class="text-black text-xl font-bold">EduPro</span>
  </div>

  <!-- Center: Explore with Larger Search Icon -->
  <div class="flex items-center gap-1">
    <span class="text-black font-medium">Explore</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
      class="w-6 h-6 text-black hover:scale-110 transition duration-300">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 12.65z" />
    </svg>
  </div>

  <!-- Right: Dropdown Menus -->
  <div class="flex items-center gap-8">
    <!-- Courses Dropdown -->
    <div class="relative group">
      <button class="text-black hover:text-blue-500 transition">Courses ▾</button>
      <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2">
        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Course 1</a>
        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Course 2</a>
      </div>
    </div>

    <!-- About Us Dropdown -->
    <div class="relative group">
      <button class="text-black hover:text-blue-500 transition">About Us ▾</button>
      <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2">
        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Our Story</a>
        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Team</a>
      </div>
    </div>
  </div>

  <!-- Right: Login/Signup Switcher -->
  <div class="flex items-center gap-4">
    <!-- LOGIN BUTTON -->
    <a href="#" class="px-4 py-2 rounded-full text-black hover:text-white hover:bg-blue-500 
              transition transform hover:scale-110 duration-300 shadow-md hover:shadow-lg">
      Login
    </a>

    <!-- SIGN UP BUTTON -->
    <a href="#" class="px-4 py-2 rounded-full text-black bg-white hover:text-white hover:bg-blue-500 
              transition transform hover:scale-110 duration-300 shadow-md hover:shadow-lg">
      Sign Up
    </a>
  </div>
</div>
