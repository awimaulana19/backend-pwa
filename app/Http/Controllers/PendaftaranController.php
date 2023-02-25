<?php

namespace App\Http\Controllers;

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

    public function periksa($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();
        if ($pendaftaran->periksa == "Persalinan") {
            return view('Admin.RiwayatPendaftaran.periksapersalinan', compact('pendaftaran'));
        } elseif ($pendaftaran->periksa == "KB") {
            return view('Admin.RiwayatPendaftaran.periksakb', compact('pendaftaran'));
        }
    }

    public function hapus($id)
    {
        $pendaftaran = Pendaftaran::Where('id', $id)->first();
        
        $pendaftaran->delete();

        return redirect('/pendaftaran');
    }

    public function reset()
    {
        $pendaftaran = Pendaftaran::get();
        
        Pendaftaran::destroy($pendaftaran);

        return redirect('/pendaftaran');
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
        $persalinan->bb_pb = $request->bb_pb;
        $persalinan->paritas = $request->paritas;
        $persalinan->pekerjaan = $request->pekerjaan;
        $persalinan->alamat = $request->alamat;
        $persalinan->keterangan = $request->keterangan;

        $persalinan->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian]);
        
        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();
        
        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
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
        $kb->td_bb = $request->td_bb;
        $kb->tanggal_kembali = $request->tanggal_kembali;
        $kb->metode_kb = $request->metode_kb;
        $kb->keterangan = $request->keterangan;

        $kb->save();

        Pendaftaran::query()->update(['antrian_sekarang' => $request->antrian]);
        
        $pendaftaran = Pendaftaran::Where('id', $request->pendaftaran_id)->first();
        
        $pendaftaran->status = true;
        $pendaftaran->update();

        return redirect('/pendaftaran');
    }
}
