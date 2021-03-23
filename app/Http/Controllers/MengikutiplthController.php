<?php

namespace App\Http\Controllers;

use App\Mengikutiplth;
use App\Pegawai;
use PDF;
use Illuminate\Http\Request;


class MengikutiplthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mengikutiplth = Mengikutiplth::with('pegawaiplth')->Paginate(5); //
        return view('mengikuti/index', compact('mengikutiplth'));
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
        return view('mengikuti/create', compact('pegawais'));
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
            'nama_plth' => 'required',
            'tgl_plth' => 'required',
            'tmpt_plth' => 'required'

        ], [
            'pegawaiplth_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_plth.required' => 'Nama Kampus tidak boleh kosong',
            'tgl_plth.required' => 'Kota tidak boleh kosong',
            'tmpt_plth.required' => 'Cabang tidak boleh kosong'

        ]);
        $mengikutiplth = new Mengikutiplth;
        $mengikutiplth->pegawaiplth_id = $request->pegawaiplth_id;
        $mengikutiplth->tglsurat = $request->tglsurat;
        $mengikutiplth->no_surat = $request->no_surat;
        $mengikutiplth->nama_plth = $request->nama_plth;
        $mengikutiplth->tgl_plth = $request->tgl_plth;
        $mengikutiplth->tmpt_plth = $request->tmpt_plth;
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
    public function show($id)
    {
        $mengikutiplth = Mengikutiplth::find($id);
        // $mengikutiplth->makehidden([pegawai_id]);
        return view('mengikuti/show', compact('mengikutiplth'));
        // return $mengikutiplth;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mengikutiplth = Mengikutiplth::find($id);
        $pegawais = Pegawai::all();
        return view('mengikuti/edit', compact('mengikutiplth', 'pegawais'));
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
        $request->validate([
            'pegawaiplth_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'nama_plth' => 'required',
            'tgl_plth' => 'required',
            'tmpt_plth' => 'required'

        ], [
            'pegawaiplth_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_plth.required' => 'Nama Kampus tidak boleh kosong',
            'tgl_plth.required' => 'Kota tidak boleh kosong',
            'tmpt_plth.required' => 'Cabang tidak boleh kosong'

        ]);


        $mengikutiplth->pegawaiplth_id = $request->pegawaiplth_id;
        $mengikutiplth->tglsurat = $request->tglsurat;
        $mengikutiplth->no_surat = $request->no_surat;
        $mengikutiplth->nama_plth = $request->nama_plth;
        $mengikutiplth->tgl_plth = $request->tgl_plth;
        $mengikutiplth->tmpt_plth = $request->tmpt_plth;
        $mengikutiplth->save();

        // Mengikutiplth::where('id', $mengikutiplth->id)
        //     ->update([
        //         'pegawaiplth_id' => $request->pegawaiplth_id,
        //         'tglsurat' => $request->tglsurat,
        //         'no_surat' => $request->no_surat,
        //         'nama_plth' => $request->nama_plth,
        //         'tgl_plth' =>$request->tgl_plth,
        //         'tmpt_plth' => $request->tmpt_plth,

        //     ]);
        return redirect('mengikuti-pelatihan')->with('status', 'Data Mengikuti Pelatihan Berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mengikutiplth  $mengikutiplth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mengikutiplth::destroy($id);
        return redirect('mengikuti-pelatihan')->with('status', 'Data Mengikuti Pelatihan telah berhasil dihapus permanen!');
    }

    public function cetak()
    {
        $mengikutiplth = Mengikutiplth::all();

        if (is_null($mengikutiplth)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Data Mengikuti Pelatihan.pdf";
            $pdf = PDF::loadview('mengikuti/cetak', compact('mengikutiplth'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

    public function cetakPeriode(Request $request)
    {
        $mengikutiplth = Mengikutiplth::with('pegawaiplth')->whereBetween('tglsurat', [$request->date1, $request->date2])->latest()->get();

        if (is_null($mengikutiplth)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Data Mengikuti Pelatihan Filter.pdf";
            $pdf = PDF::loadview('mengikuti/cetakperiode', compact('mengikutiplth'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }
}
