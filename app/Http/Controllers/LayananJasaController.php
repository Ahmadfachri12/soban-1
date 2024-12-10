<?php

namespace App\Http\Controllers;
use App\Models\LayananJasa;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LayananJasaController extends Controller
{
    public function index()
    {
        $layanan = LayananJasa::with('kategori')->get();
        return view('user.layanan', compact('layanan'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
