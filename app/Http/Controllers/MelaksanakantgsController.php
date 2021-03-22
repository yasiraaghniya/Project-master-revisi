<?php

namespace App\Http\Controllers;

use App\Http\Requests\MelaksanakanRequest;
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
    public function store(MelaksanakanRequest $request)
    {
        Melaksanakantgs::create($request->validated());

        return redirect('melaksanakan-tugas')->with('status', 'Data Melaksanakan Tugas Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $melaksanakantgs = Melaksanakantgs::find($id);
        return view('melaksanakan/show', compact('melaksanakantgs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $melaksanakantgs = Melaksanakantgs::find($id);
        $pegawais = Pegawai::all();
        return view('melaksanakan/edit', compact('melaksanakantgs', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function update(MelaksanakanRequest $request, Melaksanakantgs $melaksanakantgs)
    {
        $melaksanakantgs->update($request->validated());
        return redirect('melaksanakan-tugas')->with('status', 'Data Pegawai Berhasil diupdate!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Melaksanakantgs::destroy($id);
        return redirect('melaksanakan-tugas')->with('status', 'Data telah berhasil dihapus permanen!');
    }

    public function cetak()
    {
        $melaksanakantgs = Melaksanakantgs::all();

        if (is_null($melaksanakantgs)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Data Melaksanakan Tugas.pdf";
            $pdf = PDF::loadview('melaksanakan/cetak', compact('melaksanakantgs'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

    public function cetakPeriode($tglawalmt, $tglakhirmt)
    {
        $melaksanakantgs = Melaksanakantgs::with('pegawaitgs')->whereBetween('tglsurat', [$tglawalmt, $tglakhirmt])->latest()->get();

        if (is_null($melaksanakantgs)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Data Melaksanakan Tugas.pdf";
            $pdf = PDF::loadview('melaksanakan/cetakperiode', compact('melaksanakantgs'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }
}
