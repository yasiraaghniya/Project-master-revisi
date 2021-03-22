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
                                <td>2021-03-20</td>
                            </tr>
                            <tr>
                                <th>No. Surat</th>
                                <td>B-3734/Cp.3/003/2021</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>19970714 201702 3 002</td>
                            </tr>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td>Zefina Syaira</td>
                            </tr>
                            <tr>
                                <th>Perihal</th>
                                <td>Mengikuti pertemuan bersama Jaksa Senior Kejaksaan Negeri Jakarta Selatan</td>
                            </tr>
                            <tr>
                                <th>Tanggal Berangkat</th>
                                <td>2021-03-25</td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>2021-03-29</td>
                            </tr>
                            <tr>
                                <th>Selama</th>
                                <td>4 Hari</td>
                            </tr>
                            <tr>
                                <th>Tujuan</th>
                                <td>Ibu Kota Jakarta</td>
                            </tr>
                            <tr>
                                <th>Transportasi</th>
                                <td>Pesawat</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>2021-03-20 09:38:25</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>2021-03-20 09:51:20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection