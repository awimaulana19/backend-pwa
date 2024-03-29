<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function halaman_login()
    {
        return view('Login.login');
    }

    public function halaman_regis()
    {
        return view('Login.regis');
    }

    public function dashboard_admin()
    {
        return view('Admin.Dashboard.dashboard');
    }
    public function dashboard_bidan()
    {
        return view('Admin.Dashboard.dashboard');
    }


    public function register_action(Request $request)
    {
        $user = new User();

        $user->roles = 'pasien';
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->tgl_lahir = $request->tgl_lahir;
        $user->no_wa = $request->no_wa;
        $user->email = $request->email;
        $user->alamat = $request->alamat;

        $data = $user;

        $data->save();
        Alert::success('Sukses', 'Tunggu Akun anda Verifikasi dari Admin');
        return redirect('/');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (Auth::user()->roles == 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif(Auth::user()->roles == 'bidan'){
                return redirect()->route('dashboard-bidan');
            }
            else {
                if (auth()->user()->roles == 'pasien' && auth()->user()->is_verification == 1) {
                    return redirect()->route('user');
                } else {
                    return back()->with('wait', 'akun anda belum di verifikasi oleh admin');
                }
            }
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
