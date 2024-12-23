<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananJasaController;
use App\Http\Controllers\Admin\LayananJasaController as AdminLayananJasaController;
use App\Http\Controllers\Admin\KategoriController as AdminKategoriController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard admin, hanya bisa diakses oleh admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/dashboard/layananjasa', [AdminLayananJasaController::class, 'index'])->name('admin.layananjasa.index'); // Menggunakan alias
Route::get('/dashboard/layananjasa/create', [AdminLayananJasaController::class, 'create']); // Menggunakan alias
Route::post('/dashboard/layananjasa', [AdminLayananJasaController::class, 'store'])->name('admin.layananjasa.store'); // Menyimpan layanan jasa baru
Route::get('/dashboard/layananjasa/{id}', [AdminLayananJasaController::class, 'show'])->name('admin.layananjasa.show');
Route::get('/dashboard/layananjasa/{id}/edit', [AdminLayananJasaController::class, 'edit']);
Route::put('/dashboard/layananjasa/{id}', [AdminLayananJasaController::class, 'update'])->name('admin.layananjasa.update');
Route::delete('/dashboard/layananjasa/{id}', [AdminLayananJasaController::class, 'destroy'])->name('admin.layananjasa.destroy');

Route::get('/dashboard/kategori', [AdminKategoriController::class, 'index'])->name('admin.kategori.index'); 
Route::get('/dashboard/kategori/create', [AdminKategoriController::class, 'create']);
Route::post('/dashboard/kategori/store', [AdminKategoriController::class, 'store'])->name('admin.kategori.store');

Route::get('/', [BerandaController::class, 'index']);
Route::get('/layanan', [LayananJasaController::class, 'index']);
Route::get('/layanan/{id}', [LayananJasaController::class, 'show'])->name('layanan.show');
// Menampilkan form pemesanan untuk layanan dengan ID tertentu
Route::get('/layanan/{id}/pesan', [PesananController::class, 'create'])->name('layanan.pesan');

// Menyimpan data pemesanan
Route::post('/layanan/{id}/pesan', [PesananController::class, 'store'])->name('layanan.pesan.submit');


Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

