<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = kategori::all();
        return view('admin.kategori.index', compact('kategoris'));   
    }

    // Menampilkan form untuk menambah layanan jasa
    public function create()
    { 
        return view('admin.kategori.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        kategori::create($validated);
        return redirect('admin.kategori.index')->with('pesan', 'Kategori berhasil ditambahkan.');
    }

}
