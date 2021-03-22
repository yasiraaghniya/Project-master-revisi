@extends('main')

@section('title', 'Detail Data Perjalanan Dinas')


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            {{-- <div class="page-title">
                <h1>Data</h1>
            </div> --}}
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Data</a></li>
                    {{-- <li><a href="#">Data</a></li> --}}
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail Data Perjalanan Dinas</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('mengikuti-pelatihan') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Tanggal Surat</th>
                                    <td>{{ $perjalanandns->tglsurat }}</td>
                                </tr>
                                <tr>
                                    <th>No. Surat</th>
                                    <td>{{ $perjalanandns->no_surat }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $perjalanandns->pegawaipdinas->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <td>{{ $perjalanandns->pegawaipdinas->nama_pegawai }}</td>
                                </tr>
                                <tr>
                                    <th>Perihal</th>
                                    <td>{{ $perjalanandns->perihal }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Berangkat</th>
                                    <td>{{ $perjalanandns->tgl_berangkat }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>{{ $perjalanandns->tgl_kembali }}</td>
                                </tr>
                                <tr>
                                    <th>Selama</th>
                                    <td>{{ $perjalanandns->selama }}</td>
                                </tr>
                                <tr>
                                    <th>Tujuan</th>
                                    <td>{{ $perjalanandns->tujuan }}</td>
                                </tr>
                                <tr>
                                    <th>Transportasi</th>
                                    <td>{{ $perjalanandns->transportasi }}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{ $perjalanandns->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>{{ $perjalanandns->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection