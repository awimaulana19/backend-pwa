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

    

    // public function persalinan_action(Request $request)
    // {
    //     $persalinan = new Persalinan();

    //     $persalinan->user_id = Auth::user()->id;
    //     $persalinan->no_registrasi = $request->no_registrasi;
    //     $persalinan->nama = $request->nama;
    //     $persalinan->umur = $request->umur;
    //     $persalinan->hari = $request->hari;
    //     $persalinan->ttl = $request->ttl;
    //     $persalinan->pukul = $request->pukul;
    //     $persalinan->jk = $request->jk;
    //     $persalinan->bb_pb = $request->bb_pb;
    //     $persalinan->paritas = $request->paritas;
    //     $persalinan->pekerjaan = $request->pekerjaan;
    //     $persalinan->alamat = $request->alamat;
    //     $persalinan->keterangan = $request->keterangan;
    //     $persalinan->antrian = "1";

    //     $persalinan->save();

    //     return redirect('registrasi');
    // }
    // public function kb_action(Request $request)
    // {
    //     $kb = new Keluargaberencana();

    //     $kb->user_id = Auth::user()->id;
    //     $kb->tanggal = $request->tanggal;
    //     $kb->baru = $request->baru;
    //     $kb->lama = $request->lama;
    //     $kb->nama = $request->nama;
    //     $kb->umur = $request->umur;
    //     $kb->alamat = $request->alamat;
    //     $kb->jumlah_anak = $request->jumlah_anak;
    //     $kb->td_bb = $request->td_bb;
    //     $kb->tanggal_kembali = $request->tanggal_kembali;
    //     $kb->metode_kb = $request->metode_kb;
    //     $kb->keterangan = $request->keterangan;
    //     $kb->antrian = "2";

    //     $kb->save();

    //     return redirect('registrasi');
    // }
}
