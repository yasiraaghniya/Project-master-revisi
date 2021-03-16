@extends('main')

@section('title', 'Data Pegawai')

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
                    
                    <li><a href="#">Pegawai</a></li>
                    <li class="active">Data</li>
                    {{-- <li class="active"><i class="fa fa-dashboard"></i></li> --}}
                </ol>
            </div>
        </div>
    </div>  
</div>
@endsection

@section('content')

<!-- Modal Cetak -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Data Berdasarkan Kantor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <label for="label">Kantor</label>
                <input type="text" name="kanwil" id="kanwil" class="form-control">
            </div>
        </div>

        <div class="modal-footer">
            <div class="form-group">
                <a href=""  onclick="this.href='/cetak-filter/'+ document.getElementById('kanwil').value 
                "target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{url("datapegawai")}}" class="form-inline" method="GET">
            <div class="card">
                <div class="card-header">
                <div class="pull-left">
                    <strong>Data Pegawai</strong>
                </div>
                <div class="pull-right">
                    <input value="{{Request::get('keyword')}}" type="text" class="form-control"  name="keyword" placeholder="Search">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i>Search</button>

                    <a href="{{ url('datapegawai/create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-print"></i>
                        Print
                    </button>
{{-- 
                    <a href="{{ url('datapegawai/trash') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Trash
                    </a> --}}
            </div>
        </form>
    </div>
    
    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>NRP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                    <th>Pangkat</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Unit/Bagian</th>
                    <th>Kantor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($datapegawai->count() > 0)
                @foreach ($datapegawai as $key => $item)
                <tr>
                    <td>{{ $datapegawai->firstItem() + $key }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nrp }}</td>
                    <td>{{ $item->tempatlhr }}</td>
                    <td>{{ $item->tgllahir }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>0{{ $item->hp }}</td>
                    <td>{{ $item->pangkat }}</td>
                    <td>{{ $item->golongan }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->bagian }}</td> 
                    <td>{{ $item->kanwil }}</td>
                    
                    {{-- <td class="text-center">
                        <a href="{{ url('storage/'.$item->file) }}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-file-pdf-o"></i></a>
                    </td> --}}
                    
                    <td class="text-center">
                        {{-- @if (auth()->user()->level=="Admin") --}}
                        
                        {{-- @endif --}}
                        
                    
                                  
                            
                    
                        <a href="{{ url('datapegawai/' .$item->id. '/edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ url('datapegawai/' .$item->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                        <form action="{{ url('datapegawai/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                        <tr>
                            <td colspan="15" class="text-center">Data Kosong</td>
                        </tr>
                    @endif
            </tbody>
        </table>
        
        <div class="pull-left">
            Showing
            {{ $datapegawai->firstItem() }}
            to
            {{ $datapegawai->lastItem() }}
            of
            {{ $datapegawai->total() }}
            entries
        </div>
        <div class="pull-right">
            {{ $datapegawai->links() }}
        </div>
    </div>
</div>
@endsection