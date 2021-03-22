@extends('main')

@section('title', 'Edit Data Mengikuti Pelatihan')
    

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
                    <li><a href="#">Data Mengikuti Pelatihan</a></li>
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
                    <strong>Edit Data Mengikuti Pelatihan</strong>
                </div>
            <div class="pull-right">
                <a href="{{ url('mengikuti-pelatihan') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('mengikuti-pelatihan/'.$mengikutiplth->id) }}" method="post">
                        @method('PUT')
                        @csrf
    
                        <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" name="tglsurat" class="form-control @error('tglsurat') 
                            is-invalid @enderror" value="{{ old('tglsurat', $mengikutiplth->tglsurat) }}">
                            @error('tglsurat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No. Surat</label>
                            <input type="text" name="no_surat" class="form-control @error('no_surat') 
                            is-invalid @enderror" value="{{ old('no_surat',$mengikutiplth->no_surat) }}">
                            @error('no_surat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <select name="pegawaiplth_id" class="form-control @error('pegawaiplth_id') 
                            is-invalid @enderror">
                                <option value="">Pilih Nama Pegawai</option>
                                @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}" {{ old('pegawaiplth_id',$mengikutiplth->pegawaiplth_id) == $item->id ? 'selected' : null }}>{{ $item->nama_pegawai}}</option>  
                                @endforeach                                
                            </select>
                            @error('pegawaiplth_id')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <select name="pegawaiplth_id" class="form-control @error('pegawaiplth_id') 
                            is-invalid @enderror">
                                <option value="">Pilih NIP Pegawai</option>
                                @foreach ($pegawais as $item)
                                    <option value="{{ $item->id }}" {{ old('pegawaiplth_id',$mengikutiplth->pegawaiplth_id) == $item->id ? 'selected' : null }}>{{ $item->nip}}</option>  
                                @endforeach                                
                            </select>
                            @error('pegawaiplth_id')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pelatihan</label>
                            <input type="text" name="nama_plth" class="form-control @error('nama_plth') 
                            is-invalid @enderror" value="{{ old('nama_plth',$mengikutiplth->nama_plth) }}">
                            @error('nama_plth')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tanggal Pelatihan</label>
                            <input type="date" name="tgl_plth" class="form-control @error('tgl_plth') 
                            is-invalid @enderror" value="{{ old('tgl_plth',$mengikutiplth->tgl_plth) }}">
                            @error('tgl_plth')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Tempat Pelatihan</label>
                            <input type="text" name="tmpt_plth" class="form-control @error('tmpt_plth') 
                            is-invalid @enderror" value="{{ old('tmpt_plth',$mengikutiplth->tmpt_plth) }}">
                            @error('tmpt_plth')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>

        </div>
        
    </div>
</div>
@endsection