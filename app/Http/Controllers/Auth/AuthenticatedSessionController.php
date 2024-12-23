<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    // Fungsi untuk redirect berdasarkan role
    protected function authenticated(Request $request, $user)
    {
        // Cek role pengguna dan arahkan ke halaman yang sesuai
        if ($user->role === 'admin') {
            return redirect()->route('admin.index'); // Halaman Admin
        } elseif ($user->role === 'penyedia_jasa') {
            return redirect()->route('penyedia-jasa.index'); // Halaman Penyedia Jasa
        } else {
            return redirect()->route('user.index'); // Halaman Pengguna
        }
    }
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Validasi login
        $request->validate([
            'username_or_email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Cek apakah username atau email ada di database
        $credentials = [
            'email' => $request->username_or_email,
            'password' => $request->password,
        ];

        // Jika gagal login, kembali ke halaman login dengan pesan error
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return $this->authenticated($request, Auth::user());
        }

        // Jika gagal
        return back()->withErrors([
            'username_or_email' => 'Username atau email dan password tidak cocok.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        // Redirect setelah logout
        return redirect('/');
    }
}
