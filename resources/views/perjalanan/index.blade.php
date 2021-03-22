@extends('main')

@section('title', 'Data Perjalan Dinas')

@section('breadcrums')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    {{-- <div class="page-title">
                        <h1>Perjanan Dinas</h1>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Perjalanan Dinas</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cetak Data Berdasarkan Periode</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <label for="label">Tanggal Awal</label>
                    <input type="date" name="tglawalpd" id="tglawalpd" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tglakhirpd" id="tglakhirpd" class="form-control">
                </div> 
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <a href=""  onclick="this.href='/cetak-periode-perjalanan-dinas/'+ document.getElementById('tglawalpd').value +
                    '/' + document.getElementById('tglakhirpd').value "target="_blank" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print
                   </a>
            </div>
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
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

        <form action="{{url("perjalanan-dinas")}}" class="form-inline" method="GET">
            <div class="card">
                <div class="card-header">
                <div class="pull-left">
                    <strong>Perjalanan Dinas</strong>
                </div>
                        <div class="pull-right">
                            {{-- <input value="{{Request::get('keyword')}}" type="text" class="form-control"  name="keyword" placeholder="Search">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i>Search</button> --}}

                            <a href="{{ url('perjalanan-dinas/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add</a>
                    
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-print"></i>
                            Print
                            </button>
                    </div>   
                    <div class="card-body table responsive">
                        <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>Tanggal Surat</th>
                            <th>No. Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Berangkat</th>
                            <th>Tanggal Kembali</th>
                            <th>Selamaa</th>
                            <th>Tujuan</th>
                            <th>Transportasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($perjalanandns->count() > 0)
                @foreach ($perjalanandns as $key => $item)
                <tr align="left">
                    <td>{{ $perjalanandns->firstItem() + $key }}</td>
                    <td>{{ $item->pegawaipdinas->nama_pegawai }}</td>
                    <td>{{ $item->pegawaipdinas->nip }}</td>
                    <td>{{ $item->tglsurat }}</td>
                    <td>{{ $item->no_surat }}</td>
                    <td>{{ $item->perihal }}</td>
                    <td>{{ $item->tgl_berangkat }}</td>
                    <td>{{ $item->tgl_kembali }}</td>
                    <td>{{ $item->selama }}</td>
                    <td>{{ $item->tujuan }}</td>
                    <td>{{ $item->transportasi }}</td>
                    
                            <td class="text-center">
                                <a href="{{ url('perjalanan-dinas/' .$item->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{ url('perjalanan-dinas/' .$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            <form action="{{ url('perjalanan-dinas/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data?')">
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
                <div> 
                    Showing
                    {{ $perjalanandns->firstItem() }}
                    to
                    {{ $perjalanandns->lastItem() }}
                    of
                    {{ $perjalanandns->total() }}
                    entries
                </div>
                <div class="pull-right">  
                {{ $perjalanandns->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection