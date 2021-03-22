<?php

namespace App\Http\Controllers;

use App\Melaksanakantgs;
use App\Pegawai;
use PDF;
use Illuminate\Http\Request;

class MelaksanakantgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $melaksanakantgs = Melaksanakantgs::with('pegawaitgs')->Paginate(2);
        return view('melaksanakan/index', compact('melaksanakantgs'));
        // return $mengikutiplth;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = Pegawai::all();
        return view('melaksanakan/create', compact('pegawais'));
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
            'pegawaitgs_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'nama_tgs'=> 'required',
            'tmpt_tgs'=> 'required',
            'tmt'=> 'required'
            
        ], [
            'pegawaitgs_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_tgs.required' => 'Nama Kampus tidak boleh kosong',
            'tmpt_tgs.required' => 'Kota tidak boleh kosong',
            'tmt.required' => 'TMT tidak boleh kosong'
            
        ]);
        $melaksanakantgs = new Melaksanakantgs;
        $melaksanakantgs->pegawaitgs_id = $request->pegawaitgs_id;
        $melaksanakantgs->tglsurat = $request->tglsurat;
        $melaksanakantgs->no_surat = $request->no_surat;
        $melaksanakantgs->nama_tgs = $request->nama_tgs;
        $melaksanakantgs->tmpt_tgs = $request->tmpt_tgs;
        $melaksanakantgs->tmt = $request->tmt;
        $melaksanakantgs->save();
            

        // Melaksanakantgs::create($request->all());

        return redirect('melaksanakan-tugas')->with('status', 'Data Melaksanakan Tugas Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function show(Melaksanakantgs $melaksanakantgs)
    {
        return view('melaksanakan/show', compact('melaksanakantgs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function edit(Melaksanakantgs $melaksanakantgs)
    {
        $pegawais = Pegawai::all();
        return view('melaksanakan/edit', compact('melaksanakantgs','pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melaksanakantgs $melaksanakantgs)
    {
        $request->validate([
            'pegawaitgs_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'nama_tgs'=> 'required',
            'tmpt_tgs'=> 'required',
            'tmt'=> 'required'
            
        ], [
            'pegawaitgs_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_tgs.required' => 'Nama Kampus tidak boleh kosong',
            'tmpt_tgs.required' => 'Kota tidak boleh kosong',
            'tmt.required' => 'Cabang tidak boleh kosong'
            
        ]);
        $melaksanakantgs = new Melaksanakantgs;
        $melaksanakantgs->pegawaitgs_id = $request->pegawaitgs_id;
        $melaksanakantgs->tglsurat = $request->tglsurat;
        $melaksanakantgs->no_surat = $request->no_surat;
        $melaksanakantgs->nama_plth = $request->nama_plth;
        $melaksanakantgs->tgl_plth = $request->tgl_plth;
        $melaksanakantgs->tmpt_plth = $request->tmpt_plth;
        $melaksanakantgs->save();
        return redirect('melaksanakantgs')->with('status', 'Data Pegawai Berhasil diupdate!');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Melaksanakantgs $melaksanakantgs)
    {
        $melaksanakantgs->delete();
        return redirect('melaksanakan-tugas')->with('status', 'Data telah berhasil dihapus permanen!'); 
    }

    public function cetak()
    {
        $melaksanakantgs = Melaksanakantgs::all();

        if(is_null($melaksanakantgs)){
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        }else{
            $judul = "Laporan Data Melaksanakan Tugas.pdf";
            $pdf = PDF::loadview('melaksanakan/cetak', compact('melaksanakantgs'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

    public function cetakPeriode($tglawalmt, $tglakhirmt){
        $melaksanakantgs = Melaksanakantgs::with('pegawaitgs')->whereBetween('tglsurat',[$tglawalmt, $tglakhirmt])->latest()->get();

        if(is_null($melaksanakantgs)){
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        }else{
            $judul = "Laporan Data Melaksanakan Tugas.pdf";
            $pdf = PDF::loadview('melaksanakan/cetakperiode', compact('melaksanakantgs'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }
}
