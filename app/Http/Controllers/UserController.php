<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function halaman_user()
    {
        return view('User.Home.home');
    }
    public function registrasi()
    {
        return view('User.Pendaftaran.registrasi');
    }
    public function riwayat()
    {
        return view('User.Pendaftaran.riwayat');
    }
    public function profile()
    {
        return view('User.Profile.profile');
    }
    public function informasi()
    {
        return view('User.Informasi.informasi');
    }
}
