<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritikSaran = KritikSaran::all();
        return view('Admin.KritikSaran.index', compact('kritikSaran'));
    }
    public function index_bidan()
    {
        $kritikSaran = KritikSaran::all();
        return view('Admin.KritikSaran.index', compact('kritikSaran'));
    }
    public function destroy($id)
    {
        $kritikSaran = KritikSaran::Where('id', $id)->first();
        $kritikSaran->delete();
        Alert::success('Sukses', 'Data Kritik dan Saran dihapus');
        return redirect('/Kritik-Saran');
    }
    public function destroy_bidan($id)
    {
        $kritikSaran = KritikSaran::Where('id', $id)->first();
        $kritikSaran->delete();
        Alert::success('Sukses', 'Data Kritik dan Saran dihapus');
        return redirect('/Kritik-Saran-bidan');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'kritik' => 'required',
            'saran' => 'required',
        ]);

        $kritikSaran = new KritikSaran();
        $kritikSaran->fill($data);

        $kritikSaran->save();
        Alert::success('Sukses', 'Berhasil Mengirim Kritik dan Saran');
    }
}
