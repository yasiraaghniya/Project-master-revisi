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
         $kenaikangaji = Kenaikangaji::with('pegawaikgaji')->Paginate(2);
         return view('kenaikan/index', compact('kenaikangaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = Pegawai::all();
        return view('kenaikan/create', compact('pegawais'));
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
                'pegawaikgaji_id '=> 'required',
                'tglsurat'=> 'required',
                'no_surat'=> 'required',
                'gajipkk_lama'=> 'required',
                'gajipkk_baru'=> 'required',
                'masakerja'=> 'required',
                'tahunkgs'=> 'required'
            ], [
                'pegawaikgaji_id.required' => 'Pilihan tidak boleh kosong',
                'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
                'no_surat.required' => 'Nomor Surat tidak boleh kosong',
                'gajipkk_lama.required' => 'Gaji Pokok Lama tidak boleh kosong',
                'gajipkk_baru.required' => 'Gaji Pokok Baru tidak boleh kosong',
                'masakerja.required' => 'Masa Kerja tidak boleh kosong',
                'tahunkgs.required' => 'Tahun KGS tidak boleh kosong'
            ]);

        $kenaikangaji = new Kenaikangaji;
        $kenaikangaji->pegawaikgaji_id = $request->pegawaikgaji_id;
        $kenaikangaji->tglsurat = $request->tglsurat;
        $kenaikangaji->no_surat = $request->no_surat;
        $kenaikangaji->gajipkk_lama = $request->gajipkk_lama;
        $kenaikangaji->gajipkk_baru = $request->gajipkk_baru;
        $kenaikangaji->masakerja = $request->masakerja;
        $kenaikangaji->tahunkgs = $request->tahunkgs;
        $kenaikangaji->save();

        // Kenaikangaji::create($request->all());


        // Kenaikangaji::create($request->all());
        return redirect('kenaikan-gaji')->with('status', 'Data Kenaikan Gaji Berhasil ditambah!');
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
        return view('kenaikan/show', compact('kenaikangaji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Kenaikangaji $kenaikangaji)
    {
        $kenaikangaji = Kenaikangaji::all();
        return view('kenaikan/edit', compact('kenaikangaji'));
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
        $request->validate([
                'pegawaikgaji_id '=> 'required',
                'tglsurat'=> 'required',
                'no_surat'=> 'required',
                'gajipkk_lama'=> 'required',
                'gajipkk_baru'=> 'required',
                'masakerja'=> 'required',
                'tahunkgs'=> 'required'
            ], [
                'pegawaikgaji_id.required' => 'Pilihan tidak boleh kosong',
                'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
                'no_surat.required' => 'Nomor Surat tidak boleh kosong',
                'gajipkk_lama.required' => 'Gaji Pokok Lama tidak boleh kosong',
                'gajipkk_baru.required' => 'Gaji Pokok Baru tidak boleh kosong',
                'masakerja.required' => 'Masa Kerja tidak boleh kosong',
                'tahunkgs.required' => 'Tahun KGS tidak boleh kosong'
            ]);

        $kenaikangaji = new Kenaikangaji;
        $kenaikangaji->pegawaikgaji_id = $request->pegawaikgaji_id;
        $kenaikangaji->tglsurat = $request->tglsurat;
        $kenaikangaji->no_surat = $request->no_surat;
        $kenaikangaji->gajipkk_lama = $request->gajipkk_lama;
        $kenaikangaji->gajipkk_baru = $request->gajipkk_baru;
        $kenaikangaji->masakerja = $request->masakerja;
        $kenaikangaji->tahunkgs = $request->tahunkgs;
        $kenaikangaji->save();
        return redirect('kenaikan-gaji')->with('status', 'Data Pegawai Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kenaikangaji  $kenaikangaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kenaikangaji $kenaikangaji)
    {
         $mengikutiplth->delete();
        return redirect('mengikuti-pelatihan')->with('status', 'Data Mengikuti Pelatihan telah berhasil dihapus permanen!');
    }

    public function cetak()
    {
        $kenaikangaji = Kenaikangaji::all();

        if(is_null($kenaikangaji)){
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        }else{
            $judul = "Laporan Data Kenaikan Gaji.pdf";
            $pdf = PDF::loadview('kenaikan/cetak', compact('kenaikangaji'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

    public function cetakPeriode($tglawalkg, $tglakhirkg){
        $kenaikangaji = Kenaikangaji::with('kenaikangaji')->whereBetween('tglsurat',[$tglawalkg, $tglakhirkg])->latest()->get();

        if(is_null($kenaikangaji)){
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        }else{
            $judul = "Laporan Data Melaksanakan Pelatihanr.pdf";
            $pdf = PDF::loadview('melaksanakan/cetakperiode', compact('kenaikangaji'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

}
