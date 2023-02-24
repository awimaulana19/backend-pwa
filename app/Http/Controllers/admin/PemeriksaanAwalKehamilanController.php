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

    public function destroy($id)
    {
        $periksa = PemeriksaanAwalKehamilan::findOrFail($id);
        $periksa->destroy();
        return redirect()->back();
    }
}
