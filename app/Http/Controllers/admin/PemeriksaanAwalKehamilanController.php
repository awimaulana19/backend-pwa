<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PemeriksaanAwalKehamilan;
use Illuminate\Http\Request;

class PemeriksaanAwalKehamilanController extends Controller
{
    public function index()
    {
        $periksa = PemeriksaanAwalKehamilan::get();
        return view('Admin.DataKehamilan.pemeriksaanawal',compact('periksa'));
    }

    public function bidan_index()
    {
        $periksa = PemeriksaanAwalKehamilan::get();
        return view('Admin.DataKehamilan.pemeriksaanawal',compact('periksa'));
    }


    public function show($id)
    {
        $periksa = PemeriksaanAwalKehamilan::first();
        return view('Admin.DataKehamilan.show-pemeriksaan-awal',compact('periksa'));
    }

    public function bidan_show($id)
    {
        $periksa = PemeriksaanAwalKehamilan::first();
        return view('Admin.DataKehamilan.show-pemeriksaan-awal',compact('periksa'));
    }

    public function destroy($id)
    {
        $periksa = PemeriksaanAwalKehamilan::findOrFail($id);
        $periksa->delete();
        return redirect()->back();
    }
    public function bidan_destroy($id)
    {
        $periksa = PemeriksaanAwalKehamilan::findOrFail($id);
        $periksa->delete();
        return redirect()->back();
    }
}
