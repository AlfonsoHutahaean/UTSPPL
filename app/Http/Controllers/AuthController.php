<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }


    /**
     * Proses login
     *
     * Pembeli dan penjual bisa login
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        // Coba login
        if (Auth::attempt($credentials)) {

            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Arahkan ke halaman produk
            return redirect()
                ->route('products.index')
                ->with('success', 'Login berhasil.');
        }


        // Jika login gagal
        return back()
            ->withErrors([
                'email' => 'Email atau password salah.',
            ])
            ->withInput($request->only('email'));
    }


    /**
     * Menampilkan halaman register
     *
     * Register hanya untuk PEMBELI
     */
    public function showRegister()
    {
        return view('auth.register');
    }


    /**
     * Proses register pembeli
     *
     * Setiap user yang melakukan register
     * otomatis mendapatkan role "pembeli".
     */
    public function register(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'min:6',
                'confirmed',
            ],
        ]);


        // Membuat user baru
        $user = User::create([
            'name' => $validated['name'],

            'email' => $validated['email'],

            'password' => Hash::make(
                $validated['password']
            ),

            // Register otomatis sebagai pembeli
            'role' => 'pembeli',
        ]);


        // Setelah register langsung login
        Auth::login($user);


        // Regenerate session
        $request->session()->regenerate();


        // Redirect ke halaman produk
        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Registrasi berhasil. Selamat datang di CampusMarket!'
            );
    }


    /**
     * Logout
     */
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();


        // Hapus session
        $request->session()->invalidate();


        // Buat token CSRF baru
        $request->session()->regenerateToken();


        // Kembali ke halaman login
        return redirect()
            ->route('login')
            ->with(
                'success',
                'Kamu berhasil logout.'
            );
    }
}