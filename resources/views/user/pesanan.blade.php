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

  <!-- Hero Section -->
  <section class="bg-[#27547D] py-2">
      <h2 class="text-4xl text-center font-bold mb-3 text-white">Daftar Pesanan</h2>
  </section>
  
  <!-- Main Content -->
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold text-center text-blue-900 mb-8">
     Daftar Pesanan
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
     @foreach ($pesanans as $pesanan)
     <div class="bg-white p-4 rounded-lg shadow-md">
      <img alt="Illustration" class="w-full h-40 object-cover rounded-t-lg" height="150" src="https://storage.googleapis.com/a1aa/image/95fzBpaPeivNOUS5b2MrhDwBOXnqQAoPgFhkzFyoxcuONF6TA.jpg" width="150"/>
      <div class="mt-4">
       <h2 class="text-xl font-bold">
        {{ $pesanan->layananJasa->nama }} <!-- Nama layanan -->
       </h2>
       <p>
        Status: {{ $pesanan->status_pesanan }}
       </p>
       <p>
        Penyedia Jasa: {{ $pesanan->penyediaJasa->name ?? 'Belum ada penyedia jasa' }} <!-- Nama penyedia jasa -->
       </p>
       <p>
        Catatan: {{ $pesanan->ulasan ?? 'Belum ada catatan' }}
       </p>
       <button class="bg-blue-700 text-white px-4 py-2 mt-4 rounded">
        Edit
       </button>
      </div>
     </div>
     @endforeach
    </div>
   </div>

  <!-- Footer -->
  @include('layouts.footer')

  <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
