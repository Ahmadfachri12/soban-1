<header class="bg-[#27547D] text-white shadow-lg relative sticky top-0 z-50">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('asset/img/logo soban.png') }}" alt="Logo Soban" class="w-10 h-10 rounded-full">
            <span class="text-xl font-bold">SOBAN</span>
        </div>

        <!-- Hamburger Menu Button (Only visible on small screens) -->
        <button id="hamburger-button" class="md:hidden flex flex-col items-center justify-center space-y-1">
          <span class="hamburger-line w-6 h-1 bg-white transition-transform duration-300 ease-in-out"></span>
          <span class="hamburger-line w-6 h-1 bg-white transition-opacity duration-300 ease-in-out"></span>
          <span class="hamburger-line w-6 h-1 bg-white transition-transform duration-300 ease-in-out"></span>
      </button>

        <!-- Navigation -->
        <nav id="nav-links" class="hidden md:flex space-x-6">
            <a href="/" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fas fa-home"></i><span>Beranda</span>
            </a>
            <a href="/layanan" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fas fa-cogs"></i><span>Layanan</span>
            </a>
            <a href="#pesanan" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fa-solid fa-clipboard-list"></i><span>Pesanan</span>
            </a>
            <a href="/#tentang" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fa-solid fa-users"></i><span>Tentang Kami</span>
            </a>
            <a href="/#faq" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fas fa-question-circle"></i><span>FAQ</span>
            </a>
        </nav>

        <!-- Buttons (Positioned below on smaller screens) -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('login') }}" class="bg-[#FFF] text-[#27547D] font-semibold px-4 py-2 rounded hover:bg-blue-100">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-[#FFF] text-[#27547D] font-semibold px-4 py-2 rounded hover:bg-blue-400">
                Registrasi Akun
            </a>
        </div>

    </div>

    <!-- Mobile Menu (hidden by default, appears when hamburger is clicked) -->
    <div id="mobile-menu" class="md:hidden hidden absolute bg-[#27547D] w-full left-0 top-16 py-4 px-6 shadow-lg transition-all duration-500 ease-in-out opacity-0 transform translate-y-[-20px]">
        <nav class="space-y-4">
            <a href="/" class="flex items-center space-x-1 text-white hover:text-blue-300">
                <i class="fas fa-home"></i><span>Beranda</span>
            </a>
            <a href="/layanan" class="flex items-center space-x-1 text-white hover:text-blue-300">
                <i class="fas fa-cogs"></i><span>Layanan</span>
            </a>
            <a href="#pesanan" class="flex items-center space-x-1 text-white hover:text-blue-300">
                <i class="fa-solid fa-clipboard-list"></i><span>Pesanan</span>
            </a>
            <a href="/#tentang" class="flex items-center space-x-1 hover:text-blue-300">
                <i class="fa-solid fa-users"></i><span>Tentang Kami</span>
            </a>
            </a>
            <a href="/#faq" class="flex items-center space-x-1 text-white hover:text-blue-300">
                <i class="fas fa-question-circle"></i><span>FAQ</span>
            </a>
        </nav>

        <!-- Buttons for mobile -->
        <div class="space-y-4 mt-4">
            <a href="{{ route('login') }}" class="w-full bg-[#FFF] text-[#27547D] font-semibold px-4 py-2 rounded hover:bg-blue-100 text-center">Login</a>
            <a href="{{ route('register') }}" class="w-full bg-[#FFF] text-[#27547D] font-semibold px-4 py-2 rounded hover:bg-blue-400 text-center">Registrasi Akun</a>
        </div>
    </div>
    <style>
        html {
          scroll-behavior: smooth;
        }
      </style>

</header>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const hash = window.location.hash;
      if (hash && document.querySelector(hash)) {
        document.querySelector(hash).scrollIntoView({ behavior: 'smooth' });
      }
    });
  </script>