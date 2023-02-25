<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DataPenggunaController extends Controller
{
    // data pasien
    public function dataPasien()
    {
        $user = User::where('roles', '=', 'pasien')->get();
        return view('Admin.DataPengguna.datapasien', compact('user'));
    }
    public function showDataPasien($id)
    {
        $user = User::Where('id', $id)->first();
        return view('Admin.DataPengguna.showdatapasien', compact('user'));
    }
    public function hapusDataPasien($id)
    {
        $user = User::Where('id', $id)->first();
        $user->delete();
        Alert::success('Sukses', 'Data Akun Pasien Berhasil Dihapus');
        return redirect('/datapasien');
    }
    public function updateStatus($id)
    {
        $user = User::findorfail($id);
        $user->update([
            "is_verification" => 1
        ]);
        Alert::success('Sukses', 'Akun Berhasil Diverifikasi');
        return redirect()->route('datapasien.index');
    }

    // data bidan
    public function dataBidan()
    {
        $user = User::where('roles', '=', 'bidan')->get();
        return view('Admin.DataPengguna.databidan', compact('user'));
    }
    public function createBidan()
    {
        return view('Admin.DataPengguna.createbidan');
    }
    public function tambahDataBidan(Request $request)
    {
        $user = new User();

        $user->roles = 'bidan';
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->tgl_lahir = $request->tgl_lahir;
        $user->no_wa = $request->no_wa;
        $user->email = $request->email;
        $user->alamat = $request->alamat;

        $data = $user;
        $data->save();
        Alert::success('Sukses', 'Akun Bidan Berhasil Ditambah');
        return redirect('/databidan');
    }
    public function hapusDataBidan($id)
    {
        $user = User::Where('id', $id)->first();
        $user->delete();
        Alert::success('Sukses', 'Data Akun Bidan Berhasil Dihapus');
        return redirect('/databidan');
    }
}
