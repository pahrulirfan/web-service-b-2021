<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujians = Ujian::all();
        return view('ujian.index', compact('ujians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required|integer',
            'keterangan' => 'required'
        ]);

        Ujian::create($request->all());
        return redirect()->route('ujian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        //
    }
}
