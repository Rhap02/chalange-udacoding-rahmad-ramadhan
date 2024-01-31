<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'nomor' => 'required',
            'password' => 'required|min:8'
        ])->validate();

        User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        return redirect()->route('login');
    }

    public function login() 
    {
        return view('auth/login');
        
    }
    public function loginAction(Request $request)
    {
        // Validasi data input untuk login.
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
        
        // Melakukan percobaan login menggunakan Auth.
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Melempar pengecualian jika login gagal.
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        
        // Regenerasi session setelah login berhasil.
        $request->session()->regenerate();
        
        // Redirect ke halaman dashboard setelah login berhasil.
        return redirect()->route('dashboard');
    }

    /**
     * Proses logout pengguna.
     */
    public function logout(Request $request)
    {
        // Melakukan logout dari guard 'web'.
        Auth::guard('web')->logout();
      
        // Mematikan sesi pengguna.
        $request->session()->invalidate();
      
        // Redirect ke halaman awal setelah logout.
        return redirect('/');
    }

    
}
