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

    public function destroy($id)
    {
        $kunjungan = KunjunganUlangKehamilan::findOrFail($id);
        $kunjungan->destroy();
        return redirect()->back();
    }
}
