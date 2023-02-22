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

    public function show($id)
    {
        $kb = Keluargaberencana::Where('id', $id)->first();
        return view('Admin.Datakb.show', compact('kb'));
    }

    public function hapus($id)
    {
        $kb = Keluargaberencana::Where('id', $id)->first();
        
        $kb->delete();

        return redirect('/kb');
    }

    public function selesai($id)
    {
        $kb = Keluargaberencana::Where('id', $id)->first();
        
        $kb->status = true;
        $kb->update();

        return redirect('/kb');
    }
}
