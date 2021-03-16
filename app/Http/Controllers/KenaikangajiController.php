<?php

namespace App\Http\Controllers;

use App\Kenaikangaji;
use App\Pegawai;
use Illuminate\Http\Request;
use PDF;

class KenaikangajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kenaikangaji = Kenaikangaji::with('datapegawai')->Paginate(2);
         return view('kenaikan/index', compact('kenaikangaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapegawai = Pegawai::all();
        return view('kenaikan/create', compact('datapegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //      'pegawaikgaji_id '=> 'required',
        //         'tglsurat'=> 'required',
        //         'no_surat'=> 'required',
        //         'gajipkk_lama'=> 'required',
        //         'gajipkk_baru'=> 'required',
        //         'masakerja'=> 'required',
        //         'tahunkgs'=> 'required'
        //     ], [
        //         'pegawaikgaji_id.required' => 'Pilihan tidak boleh kosong',
        //         'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
        //         'no_surat.required' => 'Nomor Surat tidak boleh kosong',
        //         'gajipkk_lama.required' => 'Gaji Pokok Lama tidak boleh kosong',
        //         'gajipkk_baru.required' => 'Gaji Pokok Baru tidak boleh kosong',
        //         'masakerja.required' => 'Masa Kerja tidak boleh kosong',
        //         'tahunkgs.required' => 'Tahun KGS tidak boleh kosong'
        //     ]);

        // $kenaikangaji = new Kenaikangaji;
        // $kenaikangaji->pegawaikgaji_id = $request->pegawaikgaji_id;
        // $kenaikangaji->tglsurat = $request->tglsurat;
        // $kenaikangaji->no_surat = $request->no_surat;
        // $kenaikangaji->gajipkk_lama = $request->gajipkk_lama;
        // $kenaikangaji->gajipkk_baru = $request->gajipkk_baru;
        // $kenaikangaji->masakerja = $request->masakerja;
        // $kenaikangaji->tahunkgs = $request->tahunkgs;
        // $kenaikangaji->save();

        // Kenaikangaji::create($request->all());


        // Kenaikangaji::create($request->all());
        // return redirect('kenaikan-gaji')->with('status', 'Data Kenaikan Gaji Berhasil ditambah!');
    return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function show(Kenaikangaji $kenaikangaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Kenaikangaji $kenaikangaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kenaikangaji $kenaikangaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kenaikangaji $kenaikangaji)
    {
        //
    }
}
