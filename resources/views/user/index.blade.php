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
        <a href="#beranda" class="flex items-center space-x-1 hover:text-blue-300">
            <i class="fas fa-home"></i><span>Beranda</span>
        </a>
        
        <!-- Layanan Menu with Icon -->
        <a href="/layanan" class="flex items-center space-x-1 hover:text-blue-300">
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
  <section class="bg-[#27547D] text-white py-20">
    <div class="container mx-auto flex items-center justify-between px-6">
      <div class="max-w-lg mx-12">
        <h1 class="text-4xl font-semibold mb-4">Sobat, Sobat Setiamu untuk Membantu!</h1>
        <p class="text-lg mb-6">Cari layanan terbaik di sekitar Anda dengan Sobat.</p>
        <a href="#pesan" class="bg-[#3F8CFF] text-white border-2 border-white py-3 px-6 rounded-lg text-lg hover:bg-[#3578d4] transition">
            <i class="fa-solid fa-paper-plane"></i> Pesan Sekarang
        </a>
      </div>
      <div>
        <img src="{{asset ('asset/img/Angkat Barang.png') }}" alt="Image" class="w-full max-w-lg mx-20 -mb-20"/>
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
  <section class="bg-[#F1F8FF] py-16 mx-8 rounded-3xl" style="background-image: url('asset/img/gambar\ 2.jpg'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-6 text-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Kolom Kiri: Teks -->
            <div class="justify-center text-center lg:text-left">
                <h2 class="text-4xl font-bold text-white mb-4">Apa Itu Soban?</h2>
                <p class="text-lg text-white mx-auto lg:mx-0 max-w-3xl mb-8">
                    Soban (Sobat Bantu) adalah platform yang menghubungkan Anda dengan tenaga bantuan profesional untuk menyelesaikan berbagai tugas harian,
                    mulai dari berbelanja, mengirim barang, hingga aneka keperluan lainnya.
                </p>
                <a href="#coba-sekarang" class="bg-[#3F8CFF] text-white border-2 border-white py-3 px-6 rounded-lg text-lg hover:bg-[#3578d4] transition">
                    <i class="fa-solid fa-paper-plane"></i> Coba Sekarang
                </a>
            </div>

            <!-- Kolom Kanan: Gambar -->
            <div class="flex justify-center items-center">
                <img src="asset/img/logo soban.png" alt="Image" class="w-full max-w-md rounded-full shadow-lg ml-20">
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
    <div class="container mx-auto flex flex-col items-center text-center">
    <p class="text-2xl">Mulai Sekarang</p> <br>
      <h2 class="text-4xl font-bold mb-6">Ayo Pesan Layanan Sekarang!</h2>
      <p class="text-lg mb- max-w-3xl">Kamu bisa mengikuti prosedur yang telah dijelaskan sesuai langkah yang ada di atas.</p> <br>
      <a href="#pesan" class="bg-[#3F8CFF] text-white border-2 border-white py-3 px-6 rounded-lg text-lg hover:bg-[#3578d4] transition">
        <i class="fa-solid fa-paper-plane"></i> Cari layanan
      </a>
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
              <i class="fa-solid fa-phone text-[#27547D]"></i>
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
