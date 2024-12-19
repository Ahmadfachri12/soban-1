<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananJasa;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function create($id)
    {
        // Mengambil data layanan berdasarkan ID
        $layanan = LayananJasa::find($id);
        return view('user.detail_layanan', compact('layanan'));
    
        // Jika layanan tidak ditemukan, tampilkan error 404
        if (!$layanan) {
            abort(404, 'Layanan tidak ditemukan');
        }

        // Tampilkan form pemesanan dengan mengirimkan data layanan
        return view('user.form_pemesanan', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // Validasi data pemesanan
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'deskripsi' => 'required|string',
        ]);

        // Mendapatkan data layanan berdasarkan ID
        $layanan = LayananJasa::find($id);

        // Jika layanan tidak ditemukan, tampilkan error 404
        if (!$layanan) {
            abort(404, 'Layanan tidak ditemukan');
        }

        // Simpan data pemesanan (menggunakan model Pemesanan)
        \App\Models\Pesanan::create([
            'layanan_id' => $layanan->id,
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        // Redirect ke halaman utama atau halaman yang sesuai setelah pemesanan
        return redirect('/')->with('success', 'Pemesanan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
