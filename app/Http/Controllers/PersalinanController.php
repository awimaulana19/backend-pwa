<?php

namespace App\Http\Controllers;

use App\Models\Persalinan;
use Illuminate\Http\Request;

class PersalinanController extends Controller
{
    public function index()
    {
        $persalinan = Persalinan::get();
        return view('Admin.DataPersalinan.datapersalinan', compact('persalinan'));
    }

    public function riwayat()
    {
        $persalinan = Persalinan::get();
        return view('Admin.DataPersalinan.riwayatpersalinan', compact('persalinan'));
    }
}
