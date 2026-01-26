<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /* ========= LOGIN ========= */
    public function login()
    {
        // AUTO CREATE ADMIN DUMMY (sekali saja)
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Cek user ada atau tidak
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->withInput()
                ->with('error', 'Akun tidak ditemukan, silakan register terlebih dahulu.');
        }

        // 3. Cek password
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()
                ->withInput()
                ->with('error', 'Password salah.');
        }

        // 4. Login berhasil
        $request->session()->regenerate();

        // 5. Redirect berdasarkan role
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard')
                ->with('success', 'Selamat datang Admin!');
        }

        return redirect('/')
            ->with('success', 'Login berhasil!');
    }


    /* ========= REGISTER ========= */
    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // default
        ]);

        return redirect()->route('login')
            ->with('success', 'Register berhasil, silakan login.');
    }

    /* ========= LOGOUT ========= */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Berhasil logout.');
    }
}
