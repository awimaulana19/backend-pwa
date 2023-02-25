<?php

namespace App\Http\Controllers;

use App\Models\Persalinan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Keluargaberencana;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

    //--------- halaman pendaftaran ---------------

    // halaman pendaftaran kb
    public function pendaftarankb()
    {
        return view('User.pendaftaran.kb');
    }

    public function storekb(Request $request)
    {
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

        $kb->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
        return redirect('/registrasi');
    }

    // halaman pendaftaran persalinan
    public function pendaftaranpersalinan()
    {
        return view('User.pendaftaran.persalinan');
    }

    public function storepersalinan(Request $request)
    {
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

        $persalinan->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
        return redirect('/registrasi');
    }

    // halaman pendaftaran pemeriksaan awal
    public function pendaftaranpemeriksaanawal()
    {
        return view('User.pendaftaran.pemeriksaanawal');
    }

    public function storepemeriksaanawal(Request $request)
    {
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

        $pemeriksaanawal->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
        return redirect('/registrasi');
    }

    // halaman pendaftaran kunjungan ulang
    public function pendaftarankunjunganulang()
    {
        return view('User.pendaftaran.kunjunganulang');
    }

    public function storekunjunganulang(Request $request)
    {
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

        $kunjunganulang->save();

        Alert::success('Sukses', 'Berhasil Mendaftar Lihat Nomor Antrian Dibawah');
        return redirect('/registrasi');
    }
}
