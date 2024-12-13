<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananJasaController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/layanan', [LayananJasaController::class, 'index']);
Route::get('/layanan/{id}', [LayananJasaController::class, 'show'])->name('layanan.show');
// Menampilkan form pemesanan untuk layanan dengan ID tertentu
Route::get('/layanan/{id}/pesan', [PesananController::class, 'create'])->name('layanan.pesan');

// Menyimpan data pemesanan
Route::post('/layanan/{id}/pesan', [PesananController::class, 'store'])->name('layanan.pesan.submit');


Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/dashboard', function () {
    return view('admin.index');
});

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
