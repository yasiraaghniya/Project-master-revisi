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
                                <td>2021-02-27</td>
                            </tr>
                            <tr>
                                <th>No. Surat</th>
                                <td>B-1364/Cp.3/02/2021</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>19961123 201806 7 030</td>
                            </tr>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td>Karina Haifa</td>
                            </tr>
                            <tr>
                                <th>Tugas</th>
                                <td>Memeriksa Kelengkapan acara pelantikan CPNS</td>
                            </tr>
                            <tr>
                                <th>Tempat Penugasan</th>
                                <td>Kejaksaan Tinggi Kalimantan Selatan</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>2021-03-10</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>2021-02-27 09:28:011</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection