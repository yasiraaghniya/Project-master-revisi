@extends('main')

@section('title', 'Mengikuti Pelatihan')

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

                    <li><a href="#">Mengikuti Pelatihan</a></li>
                    <li class="active">Data</li>
                    {{-- <li class="active"><i class="fa fa-dashboard"></i></li> --}}
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                    <input type="date" name="tglawalmp" id="tglawalmp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tglakhirmp" id="tglakhirmp" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <a href="" onclick="this.href='/cetak-periode-mengikuti-pelatihan/'+ document.getElementById('tglawalmp').value +
                    '/' + document.getElementById('tglakhirmp').value " target="_blank" class="btn btn-primary">
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
        <form action="{{url("mengikuti-pelatihan")}}" class="form-inline" method="GET">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Mengikuti Pelatihan</strong>
                    </div>
                    <div class="pull-right">

                        <a href="{{ url('mengikuti-pelatihan/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>

                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#exampleModal">
                            <i class="fa fa-print"></i>
                            Print
                        </button>
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
                    <th>Tanggal Surat</th>
                    <th>No. Surat</th>
                    <th>Pelatihan</th>
                    <th>Tanggal Pelatihan</th>
                    <th>Tempat Pelatihan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($mengikutiplth->count() > 0)
                @foreach ($mengikutiplth as $key => $item)
                <tr align="left">
                    <td>{{ $mengikutiplth->firstItem() + $key }}</td>
                    <td>{{ $item->pegawaiplth->nama_pegawai }}</td>
                    <td>{{ $item->pegawaiplth->nip }}</td>
                    <td>{{ $item->tglsurat }}</td>
                    <td>{{ $item->no_surat }}</td>
                    <td>{{ $item->nama_plth }}</td>
                    <td>{{ $item->tgl_plth }}</td>
                    <td>{{ $item->tmpt_plth }}</td>

                    {{-- <td class="text-center">
                        <a href="{{ url('storage/'.$item->file) }}" target="_blank" class="btn btn-success btn-sm"><i
                        class="fa fa-file-pdf-o"></i></a>
                    </td> --}}

                    <td class="text-center">

                        <a href="{{ url('mengikuti-pelatihan/' .$item->id. '/edit') }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <br>
                        <a href="{{ url('mengikuti-pelatihan/' .$item->id) }}" class="btn btn-warning btn-sm"><i
                                class="fa fa-eye"></i></a>
                        <form action="{{ route('mengikuti-pelatihan.destroy', $item->id) }}" method="post"
                            class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data?')">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
            {{ $mengikutiplth->firstItem() }}
            to
            {{ $mengikutiplth->lastItem() }}
            of
            {{ $mengikutiplth->total() }}
            entries
        </div>
        <div class="pull-right">
            {{ $mengikutiplth->links() }}
        </div>
    </div>
</div>
@endsection