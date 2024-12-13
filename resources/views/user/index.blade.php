<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soban</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
{{-- Header --}}
@include('layouts.header')
{{-- End Header --}}

<!-- Hero Section -->
<section class="bg-[#27547D] text-white py-20">
  <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between px-6 space-y-8 md:space-y-0">
    <!-- Text Section -->
    <div class="max-w-lg text-center md:text-left mx-16">
      <h1 class="text-4xl font-semibold mb-4">
        Sobat, Sobat Setiamu untuk Membantu!
      </h1>
      <p class="text-lg mb-6">
        Cari layanan terbaik di sekitar Anda dengan Sobat.
      </p>
      <!-- Button -->
      <a href="#pesan"
        class="bg-[#3F8CFF] text-white border-2 border-white py-2 px-4 md:py-3 md:px-6 rounded-lg text-base md:text-lg hover:bg-[#3578d4] transition inline-block">
        <i class="fa-solid fa-paper-plane"></i> Pesan Sekarang
      </a>
    </div>

    <!-- Image Section -->
    <div class="flex justify-center md:justify-end order-1 md:order-2">
      <img src="{{ asset('asset/img/Angkat Barang.png') }}" alt="Image"
        class="w-3/4 md:w-full max-w-lg mx-auto md:mx-0" />
    </div>
  </div>
</section>

  <!-- Statistik Bagian -->
  <section class="bg-white py-12">
    <div class="container mx-auto text-center">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mx-8">
        <!-- Statistik 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
          <div class="flex justify-center items-center mb-4">
            <i class="fas fa-tasks text-4xl text-[#3F8CFF]"></i> <!-- Ganti dengan ikon yang sesuai -->
          </div>
          <div class="text-4xl font-semibold mb-2">18,000</div>
          <div class="text-lg text-gray-600 mb-2">Tugas Diselesaikan</div>
          <div class="text-sm text-gray-500">Kami telah menyelesaikan lebih dari 18,000 tugas dari pelanggan yang puas.</div>
        </div>
        <!-- Statistik 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
          <div class="flex justify-center items-center mb-4">
            <i class="fas fa-users text-4xl text-[#3F8CFF]"></i> <!-- Ganti dengan ikon yang sesuai -->
          </div>
          <div class="text-4xl font-semibold mb-2">15,000</div>
          <div class="text-lg text-gray-600 mb-2">Pelanggan Puas</div>
          <div class="text-sm text-gray-500">Lebih dari 15,000 pelanggan kami merasa puas dengan layanan yang diberikan.</div>
        </div>
        <!-- Statistik 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
          <div class="flex justify-center items-center mb-4">
            <i class="fas fa-award text-4xl text-[#3F8CFF]"></i> <!-- Ganti dengan ikon yang sesuai -->
          </div>
          <div class="text-4xl font-semibold mb-2">3</div>
          <div class="text-lg text-gray-600 mb-2">Penghargaan</div>
          <div class="text-sm text-gray-500">Kami telah menerima berbagai penghargaan atas kualitas dan kepercayaan yang diberikan.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- tentang kami -->
  <section class="bg-[#F1F8FF] py-16 mx-8 rounded-3xl" style="background-image: url('asset/img/background tentang kami.png'); background-size: auto; background-position: center;">
    <div class="container mx-auto px-6 text-center">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Kolom Kiri: Teks -->
        <div class="justify-center text-center lg:text-left">
          <h2 class="text-4xl font-bold text-white mb-4">Apa Itu Soban?</h2>
          <p class="text-lg text-white mx-auto lg:mx-0 max-w-3xl mb-8">
            Soban (Sobat Bantu) adalah platform yang menghubungkan Anda dengan tenaga bantuan profesional untuk menyelesaikan berbagai tugas harian,
            mulai dari berbelanja, mengirim barang, hingga aneka keperluan lainnya.
          </p>
          <a href="#coba-sekarang" class="bg-[#27547D] text-white border-2 border-white py-2 px-4 sm:py-3 sm:px-6 lg:py-3 lg:px-6 rounded-lg text-sm sm:text-base lg:text-lg hover:bg-[#3578d4] transition">
            <i class="fa-solid fa-paper-plane"></i> Coba Sekarang
          </a>
        </div>
      </div>
    </div>
  </section>
  


  

  <!-- Layanan Favorit -->
  <section class="bg-[#f9f9f9] py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-5xl font-bold mb-8 text-[#27547D]">Layanan Favorit</h2>
      <p class="text-lg text-gray-700 mb-8">Pilihan layanan yang paling sering digunakan oleh pelanggan kami!</p>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 mx-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="path/to/pindahan-icon.png" alt="Pindahan" class="w-24 mx-auto mb-4"/>
          <h3 class="font-semibold text-xl">Pindahan</h3>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="path/to/angkut-barang-icon.png" alt="Angkut Barang" class="w-24 mx-auto mb-4"/>
          <h3 class="font-semibold text-xl">Angkut Barang</h3>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="path/to/bersih-bersih-icon.png" alt="Bersih-bersih" class="w-24 mx-auto mb-4"/>
          <h3 class="font-semibold text-xl">Bersih-bersih</h3>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="path/to/antar-jemput-icon.png" alt="Antar/Jemput" class="w-24 mx-auto mb-4"/>
          <h3 class="font-semibold text-xl">Antar/Jemput</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Keunggulan Kami -->
  <section class="py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
      <!-- Bagian Kiri (Foto) -->
      <div class="md:w-1/2 mb-8 md:mb-0 mx-8">
        <img src="asset/img/gambar 1.png" alt="Keunggulan Kami Image" class="w-full h-50 rounded-lg">
      </div>
  
      <!-- Bagian Kanan (Keunggulan) -->
      <div class="md:w-1/2 pl-6">
        <h2 class="text-5xl font-bold text-[#27547D] mb-8">Keunggulan Kami</h2>
        <p class="text-lg text-gray-700 mb-8">Mengapa Harus Memilih Soban?</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mx-8">
          <!-- Keunggulan 1 -->
          <div class="bg-white text-black rounded-lg shadow-lg p-4 flex items-center space-x-4">
            <i class="fas fa-check-circle text-3xl" style="color: #009379;"></i>
            <div>
              <h3 class="text-lg font-semibold">Mudah</h3>
            </div>
          </div>
  
          <!-- Keunggulan 2 -->
          <div class="bg-white text-black rounded-lg shadow-lg p-4 flex items-center space-x-4">
            <i class="fas fa-dollar-sign text-3xl" style="color: #009379;"></i>
            <div>
              <h3 class="text-lg font-semibold">Terjangkau</h3>
            </div>
          </div>
  
          <!-- Keunggulan 3 -->
          <div class="bg-white text-black rounded-lg shadow-lg p-4 flex items-center space-x-4">
            <i class="fas fa-users text-3xl" style="color: #009379;"></i>
            <div>
              <h3 class="text-lg font-semibold">Terpercaya</h3>
            </div>
          </div>
  
          <!-- Keunggulan 4 -->
          <div class="bg-white text-black rounded-lg shadow-lg p-4 flex items-center space-x-4">
            <i class="fas fa-headset text-3xl" style="color: #009379;"></i>
            <div>
              <h3 class="text-lg font-semibold">Respon Cepat</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Ulasan Pelanggan -->
  <section class="bg-[#f9f9f9] py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-5xl font-bold mb-8 text-[#27547D]">Ulasan</h2>
      <p class="text-lg text-gray-700 mb-8">Ulasan Para Pelanggan</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mx-8">
        
        <!-- Ulasan 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="mb-4">
            <img src="{{ asset('asset/img/logo soban.png')}}" alt="Ira" class="w-20 h-20 rounded-full mx-auto"/>
          </div>
          <p class="italic">"Pelayanan ramah, cepat, dan sangat membantu!"</p>
          <div class="mt-4">
            <strong class="text-xl">Ira</strong>
            <div class="text-gray-600">Mahasiswa</div>
          </div>
          <!-- Rating Bintang -->
          <div class="mt-4 flex justify-center space-x-1 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        
        <!-- Ulasan 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="mb-4">
            <img src="{{ asset('asset/img/logo soban.png')}}" alt="Ijah" class="w-20 h-20 rounded-full mx-auto"/>
          </div>
          <p class="italic">"Sangat puas dengan hasil kerjanya. Terima kasih Sobat!"</p>
          <div class="mt-4">
            <strong class="text-xl">Ijah</strong>
            <div class="text-gray-600">Lansia</div>
          </div>
          <!-- Rating Bintang -->
          <div class="mt-4 flex justify-center space-x-1 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        
        <!-- Ulasan 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="mb-4">
            <img src="{{ asset('asset/img/logo soban.png')}}" alt="Mira" class="w-20 h-20 rounded-full mx-auto"/>
          </div>
          <p class="italic">"Pelayanan cepat dan terpercaya. Bisa diandalkan!"</p>
          <div class="mt-4">
            <strong class="text-xl">Mira</strong>
            <div class="text-gray-600">Ibu Rumah Tangga</div>
          </div>
          <!-- Rating Bintang -->
          <div class="mt-4 flex justify-center space-x-1 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section class="bg-[#27547D] text-white py-16">
    <div class="container mx-auto flex flex-col items-center text-center px-6">
        <p class="text-xl md:text-2xl lg:text-3xl">Mulai Sekarang</p> <br>
        <h2 class="text-3xl font-bold mb-6 md:text-4xl lg:text-5xl">Ayo Pesan Layanan Sekarang!</h2>
        <p class="text-base md:text-lg mb-6 max-w-3xl mx-auto">Kamu bisa mengikuti prosedur yang telah dijelaskan sesuai langkah yang ada di atas.</p> <br>
        <a href="#pesan" class="bg-[#3F8CFF] text-white border-2 border-white py-2 px-4 rounded-lg text-sm md:text-base lg:text-lg hover:bg-[#3578d4] transition">
            <i class="fa-solid fa-paper-plane"></i> Cari layanan
        </a>
    </div>
</section>
  
  <!-- Footer -->
  @include('layouts.footer')
  
<script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
