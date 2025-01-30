<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function tampilLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_prefix' => 'required|string',
            'password' => 'required',
        ]);

        // Gabungkan prefix dengan ekor email statis
        $email = $request->email_prefix . '@bpk.go.id';

         // Periksa apakah email ada
        $user = User::where('email', $email)->first();

        if (!$user) {
        // Jika email tidak ditemukan
        return back()->withErrors([
            'email' => 'Email tidak ditemukan.',
        ])->withInput($request->only('email_prefix'));
        }

        // Jika kolom password kosong dan password belum diubah ke Bcrypt
        if (empty($user->password) || !$user->password_updated) {
            // Simpan password baru ke dalam database setelah di-hash menggunakan Bcrypt
            $user->password = Hash::make($request->password);
            $user->password_updated = true; // Tandai password sudah diperbarui
            $user->save();

                // Login pengguna setelah password diperbarui
                Auth::login($user);

                // Arahkan ke dashboard atau halaman lain
                return redirect()->intended('main');
            }

        // Jika password sudah di-hash menggunakan Bcrypt, lakukan login normal
        if (Auth::attempt(['email' => $email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('main');
        }

        return back()->withErrors([
            'password' => 'Password salah.',
        ])->withInput($request->only('email_prefix'));

}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

