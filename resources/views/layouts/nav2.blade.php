<!-- Header -->
<header class="bg-blue-900 bg-opacity-70 text-white py-4 sticky top-0">
    <div class="container mx-auto flex justify-between content-center">
      <!-- Logo -->
      <a href="/dashboard" class="text-3xl font-bold text-white hover:text-blue-300 transition duration-300 ease-in-out transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50" width="200" height="50">
          <text x="50%" y="50%" font-family="Segoe UI, sans-serif" font-size="40" fill="#ffffff"
              text-anchor="middle" alignment-baseline="middle" font-weight="bold">
               {{ __("roomi")}}
         </text>
        </svg>
      </a>

        <!-- Mobile navigation dropdown -->
        <div class="sm:hidden w-18 relative ml-auto">
            <button id="mobile-menu-toggle" class="block w-9 text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Dropdown content -->
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg" id="mobile-menu-dropdown">
                <a href="/dashboard" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                    Home
                </a>
                <a href="{{ url('find') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                    {{ __("Find A Room")}}
                </a>
                <a href="{{ route('listing') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                    {{ __("Post A Room")}}
                </a>
                @guest {{-- Check if the user is a guest (not authenticated) --}}
                    <a href="{{ url('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                        {{ __("Log In")}}
                    </a>
                    <a href="{{ url('register') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                        Register
                    </a>
                @else {{-- If the user is authenticated, display the logout link --}}
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </div>

        <!-- Desktop navigation -->
        <nav class="hidden sm:flex sm:space-x-4">
            <a href="/dashboard" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
                Home
            </a>
            <a href="{{ url('find') }}" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
              {{ __("Find A Room")}}
            </a>
            <a href="{{ route('listing') }}" class="text-white  hover:text-blue-300 transition duration-300 ease-in-out">
              {{ __("Post A Room")}}
            </a>
            @guest {{-- Check if the user is a guest (not authenticated) --}}
                <a href="{{ url('login') }}" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
                    Login
                </a>
                <a href="{{ url('register') }}" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
                    Register
                </a>
            @else {{-- If the user is authenticated, display the logout link --}}
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
                        Logout
                    </button>
                </form>
            @endguest
        </nav>
    </div>
</header>

<!-- JavaScript to toggle mobile menu dropdown -->
<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu-dropdown').classList.toggle('hidden');
    });
</script>
