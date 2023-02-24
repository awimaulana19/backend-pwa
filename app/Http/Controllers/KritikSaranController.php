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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('informasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function show(KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function edit(KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(KritikSaran $kritikSaran)
    {
        //
    }
}
