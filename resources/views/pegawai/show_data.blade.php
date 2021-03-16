@extends('main')

@section('title', 'Program')

@section('breadcrums')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Program</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Program</a></li>
                            <li><a href="#">Data</a></li>
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
                            <strong>Detail Program</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('datapegawai')}}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>   
                    <div class="card-body table responsive">

                        <div class="row">
                            <div class="col-md8 offset-md-2">

                                <table class="table table-bordered" align="center">
                                    <tbody>
                                        
                                        <tr>
                                             <th>Nama Pegawai</th>
                                            <td>{{ $datapegawai->nama_pegawai }}</td>
                                        </tr>
                                        <tr>
                                            <th>NIP</th>
                                            <td>{{ $datapegawai->nip }}</td>
                                        </tr>
                                        <tr>
                                            <th>NRP</th>
                                            <td>{{ $datapegawai->nrp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{ $datapegawai->tempatlhr }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{ $datapegawai->tgllahir }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $datapegawai->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. Hp</th>
                                            <td>{{ $datapegawai->hp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pangkat</th>
                                            <td>{{ $datapegawai->pangkat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Golongan</th>
                                            <td>{{ $datapegawai->golongan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jabatan</th>
                                            <td>{{ $datapegawai->jabatan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Unit/Bagian</th>
                                            <td>{{ $datapegawai->bagian }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kantor</th>
                                            <td>{{ $datapegawai->kanwil }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created at</th>
                                            <td>{{ $datapegawai->created_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
</div>
@endsection