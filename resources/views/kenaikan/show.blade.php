@extends('main')

@section('title', 'Detail Data Kenaikan Gaji')
    

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
                    <li><a href="#">Data Kenaikan Gaji</a></li>
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
                    <strong>Detail Data Kenaikan Gaji</strong>
                </div>
            <div class="pull-right">
                <a href="{{ url('kenaikan-gaji') }}" class="btn btn-secondary btn-sm">
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
                                <td>2021-03-17</td>
                            </tr>
                            <tr>
                                <th>No. Surat</th>
                                <td>B-2736/Cp.3/03/2021</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>19950223 201604 3 050</td>
                            </tr>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td>Lyra Anjelita</td>
                            </tr>
                            <tr>
                                <th>Gaji Pokok Lama</th>
                                <td>3500000</td>
                            </tr>
                            <tr>
                                <th>Gaji Pokok Baru</th>
                                <td>3700000</td>
                            </tr>
                            <tr>
                                <th>Masa Kerja</th>
                                <td>2 Tahun</td>
                            </tr>
                            <tr>
                                <th>Tahun Kenaikan Gaji Selanjutnya</th>
                                <td>2023</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>2021-03-19 09:55:25</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>2021-03-20 09:55:25</td>
                            </tr>

                            
                    
                    
                    
                        </tbody>
                    </table>
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection