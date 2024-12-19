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
        // Mengambil data penyedia jasa dan kategori untuk dropdown
        $kategori = kategori::all();
        
        return view('admin.kategori.create', compact('kategori'));
    }
}
