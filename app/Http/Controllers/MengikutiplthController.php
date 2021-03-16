<?php

namespace App\Http\Controllers;

use App\Mengikutiplth;
use App\Pegawai;
use Illuminate\Http\Request;
use PDF;

class MengikutiplthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $mengikutiplth = Mengikutiplth::with('datapegawai')->Paginate(2);
         return view('mengikuti/index', compact('mengikutiplth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $datapegawai = Pegawai::all();
        return view('mengikuti/create', compact('datapegawai'));
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
            'pegawaiplth_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'nama_plth'=> 'required',
            'tgl_plth'=> 'required',
            'tmptplth'=> 'required'
            
        ], [
            'pegawaiplth_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_plth.required' => 'Nama Kampus tidak boleh kosong',
            'tgl_plth.required' => 'Kota tidak boleh kosong',
            'tmptplth.required' => 'Cabang tidak boleh kosong'
            
        ]);
        $mengikutiplth = new Mengikutiplth;
        $mengikutiplth->pegawaiplth_id = $request->pegawaiplth_id;
        $mengikutiplth->tglsurat = $request->tglsurat;
        $mengikutiplth->no_surat = $request->no_surat;
        $mengikutiplth->nama_plth = $request->nama_plth;
        $mengikutiplth->tgl_plth = $request->tgl_plth;
        $mengikutiplth->tmptplth = $request->tmptplth;
        $mengikutiplth->save();

        // Mengikutiplth::create($request->all());
        return redirect('mengikuti-pelatihan')->with('status', 'Data Mengikuti Pelatihan Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function show(Mengikutiplth $mengikutiplth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function edit(Mengikutiplth $mengikutiplth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengikutiplth $mengikutiplth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengikutiplth $mengikutiplth)
    {
        //
    }
}
