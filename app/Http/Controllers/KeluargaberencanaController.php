<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluargaberencana;

class KeluargaberencanaController extends Controller
{
    public function index()
    {
        $kb = Keluargaberencana::get();
        return view('Admin.Datakb.datakb', compact('kb'));
    }
}
