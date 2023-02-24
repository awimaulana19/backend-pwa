<?php

namespace App\Http\Controllers;

use App\Models\Keluargaberencana;
use App\Models\Persalinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function daftar_persalinan()
    {
        return view('User.Pendaftaran.persalinan.daftar');
    }
}
