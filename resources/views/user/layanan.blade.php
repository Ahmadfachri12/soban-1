<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soban</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <header class="bg-[#27547D] text-white shadow-lg relative sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <img src="{{ asset('asset/img/logo soban.png') }}" alt="Logo Soban" class="w-10 h-10 rounded-full">
        <span class="text-xl font-bold">SOBAN</span>
      </div>

      <!-- Navigation -->
      <nav class="flex space-x-6">
        <!-- Beranda Menu with Icon -->
        <a href="/" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fas fa-home"></i><span>Beranda</span>
        </a>
        
        <!-- Layanan Menu with Icon -->
        <a href="#layanan" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fas fa-cogs"></i><span>Layanan</span>
        </a>
        
        <!-- Pesanan Menu with Task Icon -->
        <a href="#pesanan" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fa-solid fa-clipboard-list"></i><span>Pesanan</span>
        </a>
        
        <!-- Tentang Kami Menu with Icon -->
        <a href="#tentang" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fa-solid fa-users"></i><span>Tentang Kami</span>
        </a>
        
        <!-- FAQ Menu with Icon -->
        <a href="#faq" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fas fa-question-circle"></i><span>FAQ</span>
        </a>
      </nav>

      <!-- Buttons -->
      <div class="flex space-x-4">
        <button class="bg-white text-[#3F8CFF] px-4 py-2 rounded hover:bg-blue-100">Login</button>
        <button class="bg-[#3F8CFF] text-white px-4 py-2 rounded hover:bg-blue-400">Registrasi Akun</button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-[#27547D] py-1">
      <h2 class="text-4xl text-center font-bold mb-4 text-white">Layanan Jasa</h2>
  </section>
  <section class="container mx-auto max-w-6xl py-8">
    <div class="flex items-center gap-4 mb-8">
      <!-- Search Bar -->
      <div class="flex flex-1 items-center bg-white border-2 border-[#27547D] shadow-md rounded-md p-2">
        <input type="text" placeholder="Search here..." class="w-full border-0 focus:ring-0 focus:outline-none text-sm">
      </div>
      <!-- Dropdown Filter -->
      <div class="relative">
        <!-- Button with Filter Icon -->
        <button id="filterButton" class="bg-white border-2 border-[#27547D] text-gray-700 py-2 px-3 rounded-md shadow flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 01.8 1.6l-3.6 4.8a1 1 0 01-.8.4H7a1 1 0 01-.8-.4L2.6 6.6A1 1 0 013 5z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm">Filter</span>
        </button>
      
        <!-- Dropdown Menu -->
        <div id="filterDropdown" class="hidden absolute mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg">
          <ul class="py-2 text-sm text-gray-700">
            <li>
              <button class="w-full text-left px-4 py-2 hover:bg-gray-100 focus:outline-none">
                <span class="flex items-center space-x-2">
                  <span class="text-gray-600">🏠</span>
                  <span>Rumah</span>
                </span>
              </button>
            </li>
            <li>
              <button class="w-full text-left px-4 py-2 hover:bg-gray-100 focus:outline-none">
                <span class="flex items-center space-x-2">
                  <span class="text-gray-600">🚗</span>
                  <span>Kendaraan</span>
                </span>
              </button>
            </li>
            <li>
              <button class="w-full text-left px-4 py-2 hover:bg-gray-100 focus:outline-none">
                <span class="flex items-center space-x-2">
                  <span class="text-gray-600">🐾</span>
                  <span>Hewan</span>
                </span>
              </button>
            </li>
          </ul>
        </div>
      </div>
      
      <script>
        // Toggle dropdown menu
        const filterButton = document.getElementById('filterButton');
        const filterDropdown = document.getElementById('filterDropdown');
      
        filterButton.addEventListener('click', () => {
          filterDropdown.classList.toggle('hidden');
        });
        // Close dropdown when clicking outside
        window.addEventListener('click', (e) => {
          if (!filterButton.contains(e.target) && !filterDropdown.contains(e.target)) {
            filterDropdown.classList.add('hidden');
          }
        });
      </script>
    </div>

    <!-- Services -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Service Card -->
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="{{ asset ('asset/img/gambar 1 antar jemput.jpg')}}" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
    </div>
    <br>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Service Card -->
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-4">
        <img src="service-image.png" alt="Service" class="w-24 mx-auto mb-4">
        <h3 class="text-center font-semibold text-lg mb-2">Anter / Jemput</h3>
        <div class="flex items-center justify-center space-x-2 mb-2">
          <!-- Stars -->
          <div class="flex">
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
            </svg>
          </div>
          <!-- User Count -->
          <span class="text-sm text-gray-500">5k Pengguna</span>
        </div>
        <!-- Order Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pesan</button>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="bg-[#DCE1DE]">
    <!-- Footer Content -->
    <div class="container mx-auto px-6 py-12">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mx-8">
        <!-- Kolom 1: Tentang Kami -->
        <div>
          <h4 class="text-xl font-bold mb-4 text-[#27547D]">Tentang Kami</h4>
          <p class="text-sm text-gray-600">Kami adalah perusahaan yang berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami. Menyediakan solusi yang cepat dan efisien.</p>
        </div>
  
        <!-- Kolom 2: Navigasi -->
        <div>
          <h4 class="text-xl font-bold mb-4 text-[#27547D]">Navigasi Cepat</h4>
          <ul class="text-sm text-gray-600">
            <li><a href="#" class="hover:text-[#275470]"><i class="fas fa-angle-right text-[#27547D]"></i> Tentang kami</a></li>
            <li><a href="#" class="hover:text-[#275470]"><i class="fas fa-angle-right text-[#27547D]"></i> Layanan</a></li>
            <li><a href="#" class="hover:text-[#275470]"><i class="fas fa-angle-right text-[#27547D]"></i> Ulasan</a></li>
            <li><a href="#" class="hover:text-[#275470]"><i class="fas fa-angle-right text-[#27547D]"></i> FAQ</a></li>
          </ul>
        </div>
  
        <!-- Kolom 3: Ikon Sosial Media -->
        <div>
          <h4 class="text-xl font-bold mb-4 text-[#27547D]">Sosial Media Kami</h4>
          <div class="flex space-x-4">
            <a href="https://www.instagram.com" target="_blank" class="text-4xl text-[#E4405F]">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank" class="text-4xl text-[#1877F2]">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" class="text-4xl text-[#0A66C2]">
                <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
  
        <!-- Kolom 4: Kontak -->
        <div>
          <h4 class="text-xl font-bold mb-4 text-[#27547D]">Kantor Pusat Kami</h4>
            <div class="flex items-center space-x-2 mb-2">
            <i class="fas fa-map-marker-alt text-[#27547D]"></i>
            <p class="text-sm text-gray-600">Jl. Setu Indah No. 116, Kec. Cimanggis, Kota Depok, Provinsi Jawa Barat, Kode Pos 16451</p>
            </div>
            <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt text-[#27547D]"></i>
            <p class="text-sm text-gray-600">(+62) 81389739616</p>
            </div>
      </div>
    </div>
  
</footer>
<!-- Footer Bottom (Copyright) -->
<div class="bg-[#27547D] text-white py-2">
  <div class="container mx-auto text-center text-sm">
    <p>&copy; 2024 Eaglecode.students. All Rights Reserved.</p>
  </div>
</div>
  
</body>
</html>
