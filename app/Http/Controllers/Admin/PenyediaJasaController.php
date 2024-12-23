<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenyediaJasa;

class PenyediaJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyedias = PenyediaJasa::all();
        return view('admin.penyediajasa.index', compact('penyedias'));
    }

    // Menampilkan form untuk menambah layanan jasa
    public function create()
    { 
        $penyediaJasa = PenyediaJasa::all();
        return view('admin.penyediajasa.create');
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string'
        ]);

        penyedia::create($validated);
        return redirect('admin.penyediajasa.index')->with('pesan', 'penyedia jasa berhasil ditambahkan.');
    }
}
