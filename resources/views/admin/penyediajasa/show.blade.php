<x-layout>
    <x-slot name="page_name">Detail Layanan Jasa</x-slot>
    <x-slot name="title"><h6>Detail Layanan Jasa</h6></x-slot>
    <x-slot name="page_content">
        <div class="flex-1 p-6">
            <div class="bg-gray-400 py-4 rounded-lg border border-gray-950">
                <div class="px-4 mb-4">
                    <a href="{{ url('/dashboard/layananjasa') }}" class="btn bg-[#27547D] hover:bg-[#FFF] font-semibold text-[#FFF] hover:text-[#27547D]">Kembali</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4">
                    <!-- Gambar Layanan Jasa -->
                    <div class="flex justify-center items-center">
                        @if($layananJasa->gambar)
                            <img src="{{ asset('storage/' . $layananJasa->gambar) }}" alt="{{ $layananJasa->namaJasa }}" class="rounded-lg w-full max-w-xs">
                        @else
                            <span class="text-muted">Tidak Ada Gambar</span>
                        @endif
                    </div>

                    <!-- Detail Layanan Jasa dalam Tabel -->
                    <div class="text-black">
                        <table class="min-w-full table-auto mt-4 border-collapse">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border border-gray-700 font-semibold">Nama Layanan</td>
                                    <td class="py-2 px-4 border border-gray-700">{{ $layananJasa->namaJasa }}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border border-gray-700 font-semibold">Deskripsi</td>
                                    <td class="py-2 px-4 border border-gray-700">{{ $layananJasa->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border border-gray-700 font-semibold">Kategori</td>
                                    <td class="py-2 px-4 border border-gray-700">{{ $layananJasa->kategori->nama }}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border border-gray-700 font-semibold">Harga</td>
                                    <td class="py-2 px-4 border border-gray-700">Rp {{ number_format($layananJasa->harga, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border border-gray-700 font-semibold">Penyedia Jasa</td>
                                    <td class="py-2 px-4 border border-gray-700">{{ $layananJasa->penyediajasa->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
