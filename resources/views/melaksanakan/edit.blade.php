@extends('main')

@section('title', 'Edit Data Izin Cuti Belajar/Kuliah')


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            {{-- <div class="page-title">
                <h1>Data Izin Cuti</h1>
            </div> --}}
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Data Melaksanakan Tugas</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Data Melaksanakan Tugas</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('melaksanakan-tugas') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('melaksanakan-tugas/'.$melaksanakantgs->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label>Tanggal Surat</label>
                                <input type="date" name="tglsurat" class="form-control @error('tglsurat') 
                            is-invalid @enderror" value="{{ old('tglsurat', $melaksanakantgs->tglsurat) }}">
                                @error('tglsurat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No. Surat</label>
                                <input type="double" name="no_surat" class="form-control @error('no_surat') 
                            is-invalid @enderror" value="{{ old('no_surat', $melaksanakantgs->no_surat) }}">
                                @error('no_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <select name="pegawaitgs_id" class="form-control @error('pegawaitgs_id') 
                            is-invalid @enderror">
                                    <option value="">Pilih Nama Pegawai</option>
                                    @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('pegawaitgs_id', $melaksanakantgs->pegawaitgs_id) == $item->id ? 'selected' : null }}>
                                        {{ $item->nama_pegawai}}</option>
                                    @endforeach
                                </select>
                                @error('pegawaitgs_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP</label>
                                <select name="pegawaitgs_id" class="form-control @error('pegawaitgs_id') 
                            is-invalid @enderror">
                                    <option value="">Pilih NIP Pegawai</option>
                                    @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('pegawaitgs_id', $melaksanakantgs->pegawaitgs_id) == $item->id ? 'selected' : null }}>
                                        {{ $item->nip}}</option>
                                    @endforeach
                                </select>
                                @error('pegawaitgs_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tugas</label>
                                <input type="text" name="nama_tgs" class="form-control @error('nama_tgs') 
                            is-invalid @enderror" value="{{ old('nama_tgs', $melaksanakantgs->nama_tgs) }}">
                                @error('nama_tgs')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat Penugasan</label>
                                <input type="text" name='tmpt_tgs' class="form-control @error('tmpt_tgs') 
                            is-invalid @enderror" value="{{ old('tmpt_tgs', $melaksanakantgs->tmpt_tgs) }}">
                                @error('tmpt_tgs')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>tmt</label>
                                <input type="date" name="tmt" class="form-control @error('tmt') 
                            is-invalid @enderror" value="{{ old('tmt', $melaksanakantgs->tmt) }}">
                                @error('tmt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success"> Save</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @endsection