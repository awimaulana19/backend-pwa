<?php

namespace App\Http\Controllers;

use App\Models\KunjunganUlangKehamilan;
use App\Models\PemeriksaanAwalKehamilan;
use App\Models\Persalinan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Keluargaberencana;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function user()
    {
        return view('User.Layouts.app');
    }
    public function halaman_user()
    {
        return view('User.Home.home');
    }
    public function registrasi()
    {
        $user_id = auth()->user();
        $pendaftaran = Pendaftaran::where('user_id', '=', $user_id->id)->where('status', '=', '0')->get();
        return view('User.Pendaftaran.registrasi', compact('pendaftaran'));
    }
    public function riwayat()
    {
        $user_id = auth()->user();
        $riwayat_persalinan = Persalinan::where('user_id', '=', $user_id->id)->get();
        $riwayat_kb = Keluargaberencana::where('user_id', '=', $user_id->id)->get();
        $pemeriksaanAwalKehamilan = PemeriksaanAwalKehamilan::where('user_id', '=',$user_id->id)->get();
        $kunjunganUlangKehamilan = KunjunganUlangKehamilan::where('user_id','=',$user_id->id)->get();
        return view('User.Pendaftaran.riwayat', compact('riwayat_persalinan', 'riwayat_kb','pemeriksaanAwalKehamilan','kunjunganUlangKehamilan'));
    }
    public function profile()
    {
        return view('User.Profile.profile');
    }
    public function informasi()
    {
        return view('User.Informasi.informasi');
    }

    //--------- halaman pendaftaran ---------------

    // halaman pendaftaran kb
    public function pendaftarankb()
    {
        $pendaftaran = Pendaftaran::get();
        if ($pendaftaran->isNotEmpty()) {
            $antrian_sekarang = $pendaftaran[0]->antrian_sekarang;
            return view('User.pendaftaran.kb', compact('antrian_sekarang'));
        }else{
            $antrian_sekarang = 1;
            return view('User.pendaftaran.kb', compact('antrian_sekarang'));
        }
    }

    public function storekb(Request $request)
    {
        $antrian_sekarang = $request->antrian_sekarang;
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'periksa' => 'required',
        ]);
        $kb = new Pendaftaran();
        $kb->fill($data);
        $kb->antrian_sekarang = $antrian_sekarang;

        $kb->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
    }

    // halaman pendaftaran persalinan
    public function pendaftaranpersalinan()
    {
        $pendaftaran = Pendaftaran::get();
        if ($pendaftaran->isNotEmpty()) {
            $antrian_sekarang = $pendaftaran[0]->antrian_sekarang;
            return view('User.pendaftaran.persalinan', compact('antrian_sekarang'));
        }else{
            $antrian_sekarang = 1;
            return view('User.pendaftaran.persalinan', compact('antrian_sekarang'));
        }
    }

    public function storepersalinan(Request $request)
    {
        $antrian_sekarang = $request->antrian_sekarang;
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'periksa' => 'required',
        ]);
        $persalinan = new Pendaftaran();
        $persalinan->fill($data);
        $persalinan->antrian_sekarang = $antrian_sekarang;

        $persalinan->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
    }

    // halaman pendaftaran pemeriksaan awal
    public function pendaftaranpemeriksaanawal()
    {
        $pendaftaran = Pendaftaran::get();
        if ($pendaftaran->isNotEmpty()) {
            $antrian_sekarang = $pendaftaran[0]->antrian_sekarang;
            return view('User.pendaftaran.pemeriksaanawal', compact('antrian_sekarang'));
        }else{
            $antrian_sekarang = 1;
            return view('User.pendaftaran.pemeriksaanawal', compact('antrian_sekarang'));
        }
    }

    public function storepemeriksaanawal(Request $request)
    {
        $antrian_sekarang = $request->antrian_sekarang;
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'periksa' => 'required',
        ]);
        $pemeriksaanawal = new Pendaftaran();
        $pemeriksaanawal->fill($data);
        $pemeriksaanawal->antrian_sekarang = $antrian_sekarang;

        $pemeriksaanawal->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
    }

    // halaman pendaftaran kunjungan ulang
    public function pendaftarankunjunganulang()
    {
        $pendaftaran = Pendaftaran::get();
        if ($pendaftaran->isNotEmpty()) {
            $antrian_sekarang = $pendaftaran[0]->antrian_sekarang;
            return view('User.pendaftaran.kunjunganulang', compact('antrian_sekarang'));
        }else{
            $antrian_sekarang = 1;
            return view('User.pendaftaran.kunjunganulang', compact('antrian_sekarang'));
        }
    }

    public function storekunjunganulang(Request $request)
    {
        $antrian_sekarang = $request->antrian_sekarang;
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'periksa' => 'required',
        ]);
        $kunjunganulang = new Pendaftaran();
        $kunjunganulang->fill($data);
        $kunjunganulang->antrian_sekarang = $antrian_sekarang;

        $kunjunganulang->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
    }
}
