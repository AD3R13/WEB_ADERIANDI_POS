<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Models\User  as User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /* ! LOGIN ! */
    public function login()
    {
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->to('dashboard');
        }

        // Jika login gagal
        Alert::info('Login Gagal!', 'Periksa kembali email dan password anda!');
        return back()->withInput($request->only('email'));
    }


    /* ! LOGOUT ! */
    public function logout()
    {
        return view('logout');
    }
    public function actionLogout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        // Redirect pengguna ke halaman login dengan pesan
        return redirect()->route('login')->with('status', 'Anda telah berhasil logout.');
    }


    /* ! REGISTER ! */
    public function register()
    {
        $level = Level::all();
        $usertype = User::with('level')->get();
        return view('register', compact('usertype', 'level'));
    }
    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'id_level' => 'required',
            'password' => 'required',
        ]);
        User::create($request->all());
        Alert::success('Daftar berhasil', 'Success Message!');
        return redirect()->to('register')->with('success', 'Daftar berhasil');
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
