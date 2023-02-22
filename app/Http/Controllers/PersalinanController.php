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
    
    public function show($id)
    {
        $persalinan = Persalinan::Where('id', $id)->first();
        return view('Admin.DataPersalinan.show', compact('persalinan'));
    }

    public function hapus($id)
    {
        $persalinan = Persalinan::Where('id', $id)->first();
        
        $persalinan->delete();

        return redirect('/persalinan');
    }

    public function selesai($id)
    {
        $persalinan = Persalinan::Where('id', $id)->first();
        
        $persalinan->status = true;
        $persalinan->update();

        return redirect('/persalinan');
    }
}
