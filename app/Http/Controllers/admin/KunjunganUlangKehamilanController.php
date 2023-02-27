<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KunjunganUlangKehamilan;
use Illuminate\Http\Request;

class KunjunganUlangKehamilanController extends Controller
{
    public function index()
    {
        $kunjungan = KunjunganUlangKehamilan::get();
        return view('Admin.DataKehamilan.kunjunganulang',compact('kunjungan'));
    }
    public function bidan_index()
    {
        $kunjungan = KunjunganUlangKehamilan::get();
        return view('Admin.DataKehamilan.kunjunganulang',compact('kunjungan'));
    }

    public function show($id)
    {
        $kunjungan = KunjunganUlangKehamilan::first();
        return view('Admin.DataKehamilan.show-kunjungan-ulang',compact('kunjungan'));
    }
    public function bidan_show($id)
    {
        $kunjungan = KunjunganUlangKehamilan::first();
        return view('Admin.DataKehamilan.show-kunjungan-ulang',compact('kunjungan'));
    }

    public function destroy($id)
    {
        $kunjungan = KunjunganUlangKehamilan::findOrFail($id);
        $kunjungan->delete();
        return redirect()->back();
    }
    public function bidan_destroy($id)
    {
        $kunjungan = KunjunganUlangKehamilan::findOrFail($id);
        $kunjungan->delete();
        return redirect()->back();
    }
}
