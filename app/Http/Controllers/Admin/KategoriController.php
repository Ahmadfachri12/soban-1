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
}
