@extends('main')

@section('title', 'Edit Data Perjalanan Dinas')
    

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
                    <li><a href="#">Data Perjalanan Dinas</a></li>
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
                    <strong>Edit Data Perjalanan Dinas</strong>
                </div>
            <div class="pull-right">
                <a href="{{ url('perjalanan-dinas') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('perjalanan-dinas/'.$perjalanandns->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" name="tglsurat" class="form-control @error('tglsurat') 
                            is-invalid @enderror" value="{{ old('tglsurat', $perjalanandns->tglsurat) }}">
                            @error('tglsurat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No. Surat</label>
                            <input type="double" name="no_surat" class="form-control @error('no_surat') 
                            is-invalid @enderror" value="{{ old('no_surat', $perjalanandns->no_surat) }}">
                            @error('no_surat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <select name="pegawaipdinas_id" class="form-control @error('pegawaipdinas_id') 
                            is-invalid @enderror">
                                <option value="">Pilih Nama Pegawai</option>
                                @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}" {{ old('pegawaipdinas_id', $perjalanandns->pegawaipdinas_id) == $item->id ? 'selected' : null }}>{{ $item->nama_pegawai}}</option>  
                                @endforeach                                
                            </select>
                            @error('pegawaipdinas_id')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <select name="pegawipdinas_id" class="form-control @error('pegawipdinas_id') 
                            is-invalid @enderror">
                                <option value="">Pilih NIP Pegawai</option>
                                @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}" {{ old('pegawipdinas_id', $perjalanandns->pegawipdinas_id) == $item->id ? 'selected' : null }}>{{ $item->nip}}</option>  
                                @endforeach                                
                            </select>
                            @error('pegawaipdinas_id')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" name="perihal" class="form-control @error('perihal') 
                            is-invalid @enderror" value="{{ old('perihal', $izinbelajar->perihal) }}">
                            @error('perihal')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tanggal Berangkat</label>
                        <input type="date" name="tgl_berangkat" class="form-control @error('tgl_berangkat') 
                        is-invalid @enderror" value="{{ old('tgl_berangkat', $perjalanandns->tgl_berangkat) }}">
                        @error('tgl_berangkat')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control @error('tgl_kembali') 
                        is-invalid @enderror" value="{{ old('tgl_kembali', $perjalanandns->tgl_kembali) }}">
                        @error('tgl_kembali')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Selama</label>
                            <input type="text" name="selama" class="form-control @error('selama') 
                            is-invalid @enderror" value="{{ old('selama', $perjalanandns->selama) }}">
                            @error('selama')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" name="tujuan" class="form-control @error('tujuan') 
                            is-invalid @enderror" value="{{ old('tujuan', $perjalanandns->tujuan) }}">
                            @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Transportasi</label>
                            <input type="text" name="trasnsportasi" class="form-control @error('trasnsportasi') 
                            is-invalid @enderror" value="{{ old('trasnsportasi', $perjalanandns->trasnsportasi) }}">
                            @error('trasnsportasi')
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