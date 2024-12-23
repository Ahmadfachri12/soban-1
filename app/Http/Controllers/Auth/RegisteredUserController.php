<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validasi input yang diterima
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'noTelepon' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,email',
            'birthdate' => 'nullable|date',
            'gender' => 'required|string|in:Laki-Laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|in:admin,penyedia_jasa,pengguna', // Validasi sesuai pilihan
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'noTelepon' => $request->noTelepon,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    
        event(new Registered($user));
    
        Auth::login($user);
    
        return redirect()->route('dashboard');
    }
}
