@extends('main')

@section('title', 'Detail Data Mengikuti Pelatihan')


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
                    <li><a href="#">Data Perjalanan Dinas</a></li>
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
                    <strong>Detail Data Melaksanakan Tugas</strong>
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
                                    <td>{{ $melaksanakantgs->tglsurat }}</td>
                                </tr>
                                <tr>
                                    <th>No. Surat</th>
                                    <td>{{ $melaksanakantgs->no_surat }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $melaksanakantgs->pegawaitgs->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <td>{{ $melaksanakantgs->pegawaitgs->nama_pegawai }}</td>
                                </tr>
                                <tr>
                                    <th>Tugas</th>
                                    <td>{{ $melaksanakantgs->nama_tgs }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Penugasan</th>
                                    <td>{{ $melaksanakantgs->tmpt_tgs }}</td>
                                </tr>
                                <tr>
                                    <th>TMT</th>
                                    <td>{{ $melaksanakantgs->tmt }}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{ $melaksanakantgs->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection