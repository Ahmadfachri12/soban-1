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

    <section class="bg-[#27547D] py-2">
        <h2 class="text-4xl text-center font-bold mb-3 text-white">Registrasi Akun Soban</h2>
    </section>

    {{-- Main Content --}}
    <main class="container mx-auto mt-10">
        <div class="flex justify-center mb-6">
            <!-- Bagian untuk langkah 1 -->
            <div id="stepIndicator1" class="flex items-center flex-col space-y-2">
                <div class="flex items-center justify-center w-16 h-16 bg-gray-500 text-white rounded-full z-10">
                    1
                </div>
                <span class="text-gray-600 mt-2 font-semibold">
                    Pilih Jenis Akun
                </span>
            </div>
        
            <!-- Garis horizontal di tengah -->
            <div id="stepLine" class="flex items-center justify-center mx-12 relative z-0">
                <div class="absolute top-1/2 transform -translate-y-1/2 w-[670px] border-t-2 border-gray-300"></div> <!-- Garis lebih panjang -->
            </div>            
        
            <!-- Bagian untuk langkah 2 -->
            <div id="stepIndicator2" class="flex items-center flex-col space-y-2">
                <div class="flex items-center justify-center w-16 h-16 bg-gray-300 text-gray-600 rounded-full z-10">
                    2
                </div>
                <span class="text-gray-500 mt-2">
                    Informasi Akun
                </span>
            </div>
        </div>        
        
        
        <!-- Card untuk langkah 1 -->
        <div id="step1" class="bg-white border border-2 shadow-xl rounded-lg p-6 mb-20 mt-20 mx-auto max-w-2xl">
            <p class="text-md font-semibold text-gray-700 text-center mb-4">
                Langkah 1 dari 2
            </p>
            <h2 class="text-3xl font-semibold text-center mb-6 text-[#27547D]">
                Pilih Jenis Akun
            </h2>

            <!-- Form untuk memilih jenis akun -->
            <form id="step1Form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="space-y-4 bg-[#F3F4F8] py-10 rounded">
                    <label class="flex items-center space-x-3 mx-5">
                        <input class="form-radio h-5 w-5 text-blue-600" name="account_type" type="radio" required />
                        <i class="fas fa-user text-[#27547D]"></i> <!-- Ikon User -->
                        <span class="text-gray-700 font-semibold">Pengguna</span>
                    </label>
                    <label class="flex items-center space-x-3 mx-5">
                        <input class="form-radio h-5 w-5 text-blue-600" name="account_type" type="radio" required />
                        <i class="fas fa-user-tie text-[#27547D]"></i> <!-- Ikon Penyedia Jasa -->
                        <span class="text-gray-700 font-semibold">Penyedia Jasa</span>
                    </label>
                </div>
                <div class="mt-6 text-center">
                    <button id="nextStepBtn" type="button" class="bg-[#27547D] text-white px-6 py-2 rounded">
                        Lanjutkan
                    </button>
                </div>
            </form>
        </div>

        <!-- Card untuk langkah 2 -->
        <div id="step2" class="bg-white shadow-md rounded-lg border border-2 p-6 mx-auto max-w-2xl mb-20 mt-20 hidden">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Nama Lengkap *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan nama lengkap" type="text" name="name" required />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Tanggal Lahir</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="mm/dd/yyyy" type="date" name="birthdate" />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Username *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan username" type="text" name="username" required />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Jenis Kelamin *</label>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center">
                                <input class="mr-2" name="gender" type="radio" />
                                Laki-Laki
                            </label>
                            <label class="flex items-center">
                                <input class="mr-2" name="gender" type="radio" />
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Email *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan email" type="email" name="email" required />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Password *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan password" type="password" name="password" required />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Nomor Telepon *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan nomor telepon" type="tel" name="phone" required />
                    </div>
                    <div>
                        <label class="block text-blue-900 font-bold mb-2">Konfirmasi Password *</label>
                        <input class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan konfirmasi password" type="password" name="password_confirmation" required />
                    </div>
                </div>
                <div class="mt-6 text-right">
                    <button class="bg-[#27547D] text-white px-6 py-2 rounded" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script>
        document.getElementById("nextStepBtn").addEventListener("click", function() {
    const selectedAccountType = document.querySelector('input[name="account_type"]:checked');
    if (selectedAccountType) {
        // Sembunyikan langkah pertama
        document.getElementById("step1").classList.add("hidden");

        // Tampilkan langkah kedua
        document.getElementById("step2").classList.remove("hidden");

        // Perbarui warna indikator langkah
        document.querySelector("#stepIndicator1 > div").classList.replace("bg-gray-500", "bg-gray-300");
        document.querySelector("#stepIndicator1 > div").classList.replace("text-white", "text-gray-600");

        document.querySelector("#stepIndicator2 > div").classList.replace("bg-gray-300", "bg-gray-500");
        document.querySelector("#stepIndicator2 > div").classList.replace("text-gray-600", "text-white");

        // Perbarui warna garis horizontal
        document.querySelector("#stepLine > div").classList.replace("border-gray-300", "border-gray-300");
    } else {
        alert("Pilih jenis akun terlebih dahulu.");
    }
});

    </script>
</body>
</html>