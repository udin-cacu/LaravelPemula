<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
        'id_member' => 'required|size:10',
        'nama' => 'required',
        'email' => 'email:rfc,dns',
        'jurusan'=>'required',
        'no_hp'=>'required',
        'alamat'=>'required'
        ]);
        Member::create($request->all());
        return redirect('/members')->with('status','Data Anggota Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        Member::where('id',$member->id)
                ->update([
                    'nama'=>$request->nama,
                    'id_member'=>$request->id_member,
                    'jenis_kelamin'=>$request->jenis_kelamin,
                    'email'=>$request->email,
                    'jurusan'=>$request->jurusan,
                    'no_hp'=>$request->no_hp,
                    'alamat'=>$request->alamat
                ]);
        return redirect('/members')->with('status','Data Anggota Berhasil DiUpdate!');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Member::destroy($member->id);
        return redirect('/members')->with('status','Data Anggota Berhasil DiHapus!');
    }

    public function laporan()
    {
        $members = Member::all();
        return view('members.laporan',compact('members'));
    }

    public function pdf()
    {
        $members = Member::all();
        $pdf = \PDF::loadView('members.laporan', compact('members'));
        return $pdf->download('invoice.pdf');
    }
}
