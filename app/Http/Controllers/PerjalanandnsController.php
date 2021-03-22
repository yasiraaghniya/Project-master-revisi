<?php

namespace App\Http\Controllers;

use App\Perjalanandns;
use App\Pegawai;
use PDF;
use Illuminate\Http\Request;

class PerjalanandnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanandns = Perjalanandns::with('pegawaipdinas')->Paginate(2);
        return view('perjalanan/index', compact('perjalanandns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = Pegawai::all();
        return view('perjalanan/create', compact('pegawais'));
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
            'pegawaipdinas_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'perihal' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'selama' => 'required',
            'tujuan' => 'required',
            'transportasi' => 'required',

        ], [
            'pegawaipdinas_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'perihal.required' => 'Nama Kampus tidak boleh kosong',
            'tgl_berangkat.required' => 'Kota tidak boleh kosong',
            'tgl_kembali.required' => 'Cabang tidak boleh kosong',
            'selama.required' => 'Cabang tidak boleh kosong',
            'tujuan.required' => 'Cabang tidak boleh kosong',
            'transportasi.required' => 'Cabang tidak boleh kosong'

        ]);
        $perjalanandns = new Perjalanandns;
        $perjalanandns->pegawaipdinas_id = $request->pegawaipdinas_id;
        $perjalanandns->tglsurat = $request->tglsurat;
        $perjalanandns->no_surat = $request->no_surat;
        $perjalanandns->perihal = $request->perihal;
        $perjalanandns->tgl_berangkat = $request->tgl_berangkat;
        $perjalanandns->tgl_kembali = $request->tgl_kembali;
        $perjalanandns->selama = $request->selama;
        $perjalanandns->tujuan = $request->tujuan;
        $perjalanandns->transportasi = $request->transportasi;
        $perjalanandns->save();
        return redirect('perjalanan-dinas')->with('status', 'Data Pegawai Berhasil tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perjalanandns = Perjalanandns::find($id);
        return view('perjalanan/show', compact('perjalanandns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perjalanandns = Perjalanandns::find($id);
        $pegawais = Pegawai::all();
        return view('perjalanan/edit', compact('perjalanandns', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pegawaipdinas_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'perihal' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'selama' => 'required',
            'tujuan' => 'required',
            'transportasi' => 'required',

        ], [
            'pegawaipdinas_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'perihal.required' => 'Nama Kampus tidak boleh kosong',
            'tgl_berangkat.required' => 'Kota tidak boleh kosong',
            'tgl_kembali.required' => 'Cabang tidak boleh kosong',
            'selama.required' => 'Cabang tidak boleh kosong',
            'tujuan.required' => 'Cabang tidak boleh kosong',
            'transportasi.required' => 'Cabang tidak boleh kosong'

        ]);
        // $perjalanandns = new Perjalanandns;
        // $perjalanandns->pegawaipdinas_id = $request->pegawaipdinas_id;
        // $perjalanandns->tglsurat = $request->tglsurat;
        // $perjalanandns->no_surat = $request->no_surat;
        // $perjalanandns->perihal = $request->perihal;
        // $perjalanandns->tgl_berangkat = $request->tgl_berangkat;
        // $perjalanandns->tgl_kembali = $request->tgl_kembali;
        // $perjalanandns->selama = $request->selama;
        // $perjalanandns->tujuan = $request->tujuan;
        // $perjalanandns->transportasi = $request->transportasi;
        // $perjalanandns->save();

        Perjalanandns::where('id', $id)
            ->update([
                'pegawaipdinas_id' => $request->pegawaipdinas_id,
                'tglsurat' => $request->tglsurat,
                'no_surat' => $request->no_surat,
                'perihal' => $request->perihal,
                'tgl_berangkat' => $request->tgl_berangkat,
                'tgl_kembali' => $request->tgl_kembali,
                'selama' => $request->selama,
                'tujuan' => $request->tujuan,
                'transportasi' => $request->transportasi,

            ]);
        return redirect('perjalanan-dinas')->with('status', 'Data Pegawai Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perjalanandns::destroy($id);
        return redirect('perjalanan-dinas')->with('status', 'Data Mengikuti Pelatihan telah berhasil dihapus permanen!');
    }

    public function cetak()
    {
        $perjalanandns = Perjalanandns::all();

        if (is_null($perjalanandns)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Perjalanan Dinas.pdf";
            $pdf = PDF::loadview('perjalanan/cetak', compact('perjalanandns'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }

    public function cetakPeriode($tglawalpd, $tglakhirpd)
    {
        $perjalanandns = Perjalanandns::with('perjalanandns')->whereBetween('tglsurat', [$tglawalpd, $tglakhirpd])->latest()->get();

        if (is_null($perjalanandns)) {
            Session::flash("flash_message", [
                "warna" => "alert-danger",
                "message"   => "Data Kosong Tidak Bisa Dicetak"
            ]);
            return redirect()->back();
        } else {
            $judul = "Laporan Data Perjalanan Dinas.pdf";
            $pdf = PDF::loadview('perjalanan/cetakperiode', compact('perjalanandns'));
            $pdf->setPaper('F4', 'landscape');
            return $pdf->stream($judul, array("Attachment" => false));
        }
    }
}
