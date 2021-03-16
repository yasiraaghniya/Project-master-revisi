@extends('main')

@section('title', 'Tambah Data Kenaikan Gaji')
    

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
                    <li class="active">Add</li>
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
                    <strong>Tambah Data Kenaikan Gaji</strong>
                </div>
            <div class="pull-right">
                <a href="{{ url('kenaikan-gaji') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('kenaikan-gaji') }}" method="post" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        {{csrf_field()}}
                       <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <select name="pegawaikgaji_id" class="form-control @error('pegawaikgaji_id') 
                                        is-invalid @enderror">
                                            <option value="">- pilih -</option>
                                            @foreach ($datapegawai as $item)  
                                                <option value="{{ $item->id }}" {{ old('pegawaikgaji_id') == $item->id ?'selected' : null }}>{{ $item->nama_pegawai }}</option>
                                            @endforeach
                                        </select>
                                        @error('pegawaikgaji_id')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                            <div class="form-group">
                                        <label>NIP</label>
                                        <select name="pegawaikgaji_id" class="form-control @error('pegawaikgaji_id') 
                                        is-invalid @enderror">
                                            <option value="">- pilih -</option>
                                            @foreach ($datapegawai as $item)  
                                                <option value="{{ $item->id }}" {{ old('pegawaikgaji_id') == $item->id ?'selected' : null }}>{{ $item->nip }}</option>
                                            @endforeach
                                        </select>
                                        @error('pegawaikgaji_id')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                        <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" name="tglsurat" class="form-control @error('tglsurat') 
                            is-invalid @enderror" value="{{ old('tglsurat') }}">
                            @error('tglsurat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
      
                        <div class="form-group">
                            <label>No. Surat</label>
                            <input type="text" name="no_surat" class="form-control @error('no_surat') 
                            is-invalid @enderror" value="{{ old('no_surat') }}">
                            @error('no_surat')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Gaji Pokok Lama</label>
                            <input type="double" name="gajipkk_lama" class="form-control @error('gajipkk_lama') 
                            is-invalid @enderror" value="{{ old('gajipkk_lama') }}">
                            @error('gajipkk_lama')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
               

                        <div class="form-group">
                            <label>Gaji Pokok Baru</label>
                            <input type="double" name="gajipkk_baru" class="form-control @error('gajipkk_baru') 
                            is-invalid @enderror" value="{{ old('gajipkk_baru') }}">
                            @error('gajipkk_baru')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
                 
                        <div class="form-group">
                            <label>Masa Kerja</label>
                            <input type="text" name="masakerja" class="form-control @error('masakerja') 
                            is-invalid @enderror" value="{{ old('masakerja') }}">
                            @error('masakerja')
                            <div class="invalid-feedback">{{ $message }}</div>     
                            @enderror
                        </div>
         

                        <div class="form-group">
                            <label>Tahun ...</label>
                            <input type="double" name="tahunkgs" class="form-control @error('tahunkgs') 
                            is-invalid @enderror" value="{{ old('tahunkgs') }}">
                            @error('tahunkgs')
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