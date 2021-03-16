@extends('main')

@section('title', 'Edit Data Pegawai')
    

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
                    <li><a href="#">Data Pegawai</a></li>
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
                    <strong>Edit Data Pegawai</strong>
                </div>
            <div class="pull-right">
                <a href="{{ url('datapegawai') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('datapegawai/'.$datapegawai->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control @error('nama_pegawai') 
                        is-invalid @enderror" value="{{ old('nama_pegawai', $datapegawai->nama_pegawai) }}">
                        @error('nama_pegawai')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                        <input type="text" name="nip" class="form-control @error('nip') 
                        is-invalid @enderror" value="{{ old('nip', $datapegawai->nip) }}">
                        @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>NRP</label>
                        <input type="text" name="nrp" class="form-control @error('nrp') 
                        is-invalid @enderror" value="{{ old('nrp', $datapegawai->nrp) }}">
                        @error('nrp')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                        <input type="text" name="tempatlhr" class="form-control @error('tempatlhr') 
                        is-invalid @enderror" value="{{ old('tempatlhr', $datapegawai->tempatlhr) }}">
                        @error('tempatlhr')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" class="form-control @error('tgllahir') 
                        is-invalid @enderror" value="{{ old('tgllahir', $datapegawai->tgllahir) }}">
                        @error('tgllahir')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') 
                        is-invalid @enderror" value="{{ old('alamat', $datapegawai->alamat) }}">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>No. Hp</label>
                        <input type="double" name="hp" class="form-control @error('hp') 
                        is-invalid @enderror" value="{{ old('hp', $datapegawai->hp) }}">
                        @error('hp')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                        <input type="text" name="pangkat" class="form-control @error('pangkat') 
                        is-invalid @enderror" value="{{ old('pangkat', $datapegawai->pangkat) }}">
                        @error('pangkat')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control @error('golongan') 
                        is-invalid @enderror" value="{{ old('golongan', $datapegawai->golongan) }}">
                        @error('golongan')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control @error('jabatan') 
                        is-invalid @enderror" value="{{ old('jabatan', $datapegawai->jabatan) }}">
                        @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Unit/Bagian</label>
                        <input type="text" name="bagian" class="form-control @error('bagian') 
                        is-invalid @enderror" value="{{ old('bagian', $datapegawai->bagian) }}">
                        @error('bagian')
                        <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Kantor Wilayah</label>
                            <select name="kanwil" class="form-control @error('kanwil') 
                            is-invalid @enderror">
                            <option value="">Pilih Kantor Wilayah</option>
                                    <option value="Kejaksaan Tinggi Kalimantan Selatan"{{( old('kanwil') == 'Kejaksaan Tinggi Kalimantan Selatan') ? 'selected' : null }}}>Kejaksaan Tinggi Kalimantan Selatan</option>  
                                    <option value="Kejaksaan Negeri Banjarmasin"{{( old('kanwil') == 'Kejaksaan Negeri Banjarmasin') ? 'selected' : null }}}>Kejaksaan Negeri Banjarmasin</option>  
                                    <option value="Kejaksaan Negeri Banjarbaru"{{( old('kanwil') == 'Kejaksaan Negeri Banjarbaru') ? 'selected' : null }}}>Kejaksaan Negeri Banjarbaru</option>  
                                    <option value="Kejaksaan Negeri Martapura"{{( old('kanwil') == 'Kejaksaan Negeri Martapura') ? 'selected' : null }}}>Kejaksaan Negeri Martapura</option>  
                                    <option value="Kejaksaan Negeri Tanah Laut"{{( old('kanwil') == 'Kejaksaan Negeri Tanah Laut') ? 'selected' : null }}}>Kejaksaan Negeri Tanah Laut</option>  
                                    <option value="Kejaksaan Negeri Marabahan"{{( old('kanwil') == 'Kejaksaan Negeri Marabahan') ? 'selected' : null }}}>Kejaksaan Negeri Marabahan</option>  
                                    <option value="Kejaksaan Negeri Balangan"{{( old('kanwil') == 'Kejaksaan Negeri Balangan') ? 'selected' : null }}}>Kejaksaan Negeri Balangan</option>  
                                    <option value="Kejaksaan Negeri Tanah Bumbu"{{( old('kanwil') == 'Kejaksaan Negeri Tanah Bumbu') ? 'selected' : null }}}>Kejaksaan Negeri Tanah Bumbu</option>  
                                    <option value="Kejaksaan Negeri Barito Kuala"{{( old('kanwil') == 'Kejaksaan Negeri Barito Kuala') ? 'selected' : null }}}>Kejaksaan Negeri Barito Kuala</option>  
                                    <option value="Kejaksaan Negeri Kandangan"{{( old('kanwil') == 'Kejaksaan Negeri Kandangan') ? 'selected' : null }}}>Kejaksaan Negeri Kandangan</option>  
                                    <option value="Kejaksaan Negeri Tabalong"{{( old('kanwil') == 'Kejaksaan Negeri Tabalong') ? 'selected' : null }}}>Kejaksaan Negeri Tabalong</option>  
                                    <option value="Kejaksaan Negeri Kotabaru"{{( old('kanwil') == 'Kejaksaan Negeri Kotabaru') ? 'selected' : null }}}>Kejaksaan Negeri Kotabaru</option>  
                                    <option value="Kejaksaan Negeri Hulu Sungai Selatan"{{( old('kanwil') == 'Kejaksaan Negeri Hulu Sungai Selatan') ? 'selected' : null }}}>Kejaksaan Negeri Hulu Sungai Selatan</option>  
                                    <option value="Kejaksaan Negeri Hulu Sungai Tengah"{{( old('kanwil') == 'Kejaksaan Negeri Hulu Sungai Tengah') ? 'selected' : null }}}>Kejaksaan Negeri Hulu Sungai Tengah</option>  
                                    <option value="Kejaksaan Negeri Tanjung"{{( old('kanwil') == 'Kejaksaan Negeri Tanjung') ? 'selected' : null }}}>Kejaksaan Negeri Tanjung</option>  
                                    
                            </select>
                            @error('kanwil')
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