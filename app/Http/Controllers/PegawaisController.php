<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawais.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'id_pegawai' => 'required|size:7',
        'nama' => 'required',
        'email' => 'email:rfc,dns',
        'no_hp'=>'required'
        ]);

        Pegawai::create($request->all());

        return redirect('/pegawais')->with('status','Data Pegawai Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawais.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
        'id_pegawai' => 'required|size:7',
        'nama' => 'required',
        'email' => 'email:rfc,dns',
        'no_hp'=>'required'
        ]);

        Pegawai::where('id',$pegawai->id)
                ->update([
                   'nama'=>$request->nama,
                   'id_pegawai'=>$request->id_pegawai,
                   'jenis_kelamin'=>$request->jenis_kelamin,
                   'email'=>$request->email,
                   'no_hp'=>$request->no_hp
                ]);
        return redirect('/pegawais')->with('status','Data Pegawai Berhasil DiUpdate!');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);
        return redirect('/pegawais')->with('status','Data Pegawai Berhasil DiHapus!');
    }

    public function laporan()
    {
        $pegawais = Pegawai::all();
        return view('pegawais.laporan',compact('pegawais'));
    }

    public function pdf()
    {
        $pegawais = Pegawai::all();
        $pdf = \PDF::loadView('pegawais.laporan', compact('pegawais'));
        return $pdf->download('invoice.pdf');
    }
}
