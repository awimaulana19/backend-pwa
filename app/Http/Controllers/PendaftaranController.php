<?php

namespace App\Http\Controllers;

use App\Models\KunjunganUlangKehamilan;
use App\Models\PemeriksaanAwalKehamilan;
use App\Models\Persalinan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Keluargaberencana;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran =  Pendaftaran::Where('status', false)->orderBy('antrian', 'asc')->get();
        return view('Admin.RiwayatPendaftaran.riwayatpendaftaran', compact('pendaftaran'));
    }
    public function bidan_index()
    {
        $pendaftaran =  Pendaftaran::Where('status', false)->orderBy('antrian', 'asc')->get();
        return view('Admin.RiwayatPendaftaran.riwayatpendaftaran', compact('pendaftaran'));
    }

    public function periksa($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();
        if ($pendaftaran->periksa == "Persalinan") {
            return view('Admin.RiwayatPendaftaran.periksapersalinan', compact('pendaftaran'));
        } elseif ($pendaftaran->periksa == "KB") {
            return view('Admin.RiwayatPendaftaran.periksakb', compact('pendaftaran'));
        }elseif($pendaftaran->periksa == "PemeriksaanAwal"){
            return view('Admin.RiwayatPendaftaran.periksa-pemeriksaan-awal-kehamilan',compact('pendaftaran'));
        }elseif($pendaftaran->periksa == "KunjunganUlang"){
            return view('Admin.RiwayatPendaftaran.periksa-kunjungan-ulang-kehamilan',compact('pendaftaran'));
        }
    }

    public function bidan_periksa($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();
        if ($pendaftaran->periksa == "Persalinan") {
            return view('Admin.RiwayatPendaftaran.periksapersalinan', compact('pendaftaran'));
        } elseif ($pendaftaran->periksa == "KB") {
            return view('Admin.RiwayatPendaftaran.periksakb', compact('pendaftaran'));
        }elseif($pendaftaran->periksa == "PemeriksaanAwal"){
            return view('Admin.RiwayatPendaftaran.periksa-pemeriksaan-awal-kehamilan',compact('pendaftaran'));
        }elseif($pendaftaran->periksa == "KunjunganUlang"){
            return view('Admin.RiwayatPendaftaran.periksa-kunjungan-ulang-kehamilan',compact('pendaftaran'));
        }
    }

    public function hapus($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();

        $pendaftaran->delete();

        return redirect('/pendaftaran');
    }

    public function bidan_hapus($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();

        $pendaftaran->delete();

        return redirect('/pendaftaran-bidan');
    }

    public function reset()
    {
        $pendaftaran = Pendaftaran::get();

        Pendaftaran::destroy($pendaftaran);

        return redirect('/pendaftaran');
    }
    public function bidan_reset()
    {
        $pendaftaran = Pendaftaran::get();

        Pendaftaran::destroy($pendaftaran);

        return redirect('/pendaftaran-bidan');
    }

    public function persalinan_action(Request $request)
    {
        $persalinan = new Persalinan();

        $persalinan->user_id = $request->user_id;
        $persalinan->no_registrasi = $request->no_registrasi;
        $persalinan->nama = $request->nama;
        $persalinan->umur = $request->umur;
        $persalinan->hari = $request->hari;
        $persalinan->ttl = $request->ttl;
        $persalinan->pukul = $request->pukul;
        $persalinan->jk = $request->jk;
        $persalinan->bb = $request->bb;
        $persalinan->pb = $request->pb;
        $persalinan->paritas = $request->paritas;
        $persalinan->pekerjaan = $request->pekerjaan;
        $persalinan->alamat = $request->alamat;
        $persalinan->keterangan = $request->keterangan;

        $persalinan->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
    }
    public function bidan_persalinan_action(Request $request)
    {
        $persalinan = new Persalinan();

        $persalinan->user_id = $request->user_id;
        $persalinan->no_registrasi = $request->no_registrasi;
        $persalinan->nama = $request->nama;
        $persalinan->umur = $request->umur;
        $persalinan->hari = $request->hari;
        $persalinan->ttl = $request->ttl;
        $persalinan->pukul = $request->pukul;
        $persalinan->jk = $request->jk;
        $persalinan->bb = $request->bb;
        $persalinan->pb = $request->pb;
        $persalinan->paritas = $request->paritas;
        $persalinan->pekerjaan = $request->pekerjaan;
        $persalinan->alamat = $request->alamat;
        $persalinan->keterangan = $request->keterangan;

        $persalinan->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran-bidan');
    }

    public function kb_action(Request $request)
    {
        $kb = new Keluargaberencana();

        $kb->user_id = $request->user_id;
        $kb->tanggal = $request->tanggal;
        $kb->baru = $request->baru;
        $kb->lama = $request->lama;
        $kb->nama = $request->nama;
        $kb->umur = $request->umur;
        $kb->alamat = $request->alamat;
        $kb->jumlah_anak = $request->jumlah_anak;
        $kb->td = $request->td;
        $kb->bb = $request->bb;
        $kb->tanggal_kembali = $request->tanggal_kembali;
        $kb->metode_kb = $request->metode_kb;
        $kb->keterangan = $request->keterangan;

        $kb->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
    }
    public function bidan_kb_action(Request $request)
    {
        $kb = new Keluargaberencana();

        $kb->user_id = $request->user_id;
        $kb->tanggal = $request->tanggal;
        $kb->baru = $request->baru;
        $kb->lama = $request->lama;
        $kb->nama = $request->nama;
        $kb->umur = $request->umur;
        $kb->alamat = $request->alamat;
        $kb->jumlah_anak = $request->jumlah_anak;
        $kb->td = $request->td;
        $kb->bb = $request->bb;
        $kb->tanggal_kembali = $request->tanggal_kembali;
        $kb->metode_kb = $request->metode_kb;
        $kb->keterangan = $request->keterangan;

        $kb->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran-bidan');
    }

    public function pemeriksaan_awal_kehamilan(Request $request)
    {
        PemeriksaanAwalKehamilan::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'paritas' => $request->paritas,
            'anak_perkecil' => $request->anak_perkecil,
            'td' => $request->td,
            'bb' => $request->bb,
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
            'keterangan' => $request->keterangan,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
        ]);

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
    }
    public function bidan_pemeriksaan_awal_kehamilan(Request $request)
    {
        PemeriksaanAwalKehamilan::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'paritas' => $request->paritas,
            'anak_perkecil' => $request->anak_perkecil,
            'td' => $request->td,
            'bb' => $request->bb,
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
            'keterangan' => $request->keterangan,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
        ]);

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran-bidan');
    }

    public function kunjungan_ulang_kehamilan(Request $request)
    {
        KunjunganUlangKehamilan::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'paritas' => $request->paritas,
            'tanggal' => $request->tanggal,
            'td' => $request->td,
            'bb' => $request->bb,
            'umur_kelahiran' => $request->umur_kelahiran,
            'keterangan' => $request->keterangan,
            'alamat' => $request->alamat,
        ]);

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
    }
    public function bidan_kunjungan_ulang_kehamilan(Request $request)
    {
        KunjunganUlangKehamilan::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'paritas' => $request->paritas,
            'tanggal' => $request->tanggal,
            'td' => $request->td,
            'bb' => $request->bb,
            'umur_kelahiran' => $request->umur_kelahiran,
            'keterangan' => $request->keterangan,
            'alamat' => $request->alamat,
        ]);

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian + 1]);

        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();

        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran-bidan');
    }
}
