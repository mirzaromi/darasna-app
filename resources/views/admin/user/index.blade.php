@extends('admin.template')
@section('container')
    <div class="col-12">
        @if (session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel User Admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="/admin/user/create">
                    <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus mr-2"></i>Tambah
                        Admin</button>
                </a>
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="No: activate to sort column descending">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="anggal Post: activate to sort column ascending">username</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Judul: activate to sort column ascending">
                                            Role</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Aksi: activate to sort column ascending">Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)                                        
                                    <tr class="">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                                        <td>{{ $d->username }}</td>
                                        <td>{{ $d->role }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">
                                                    <a href="/admin/user/{{ $d->id }}" class="text-white"><i
                                                            class="far fa-eye"></i></a>
                                                </button>
                                                <button type="button" class="btn btn-warning">
                                                    <a href="/admin/user/{{ $d->id }}/edit" class="text-white"><i
                                                            class="far fa-edit"></i></a>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-default-{{ $d->id }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                                <form action="/admin/user/{{ $d->id }}" method="POST" class="">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal fade" id="modal-default-{{ $d->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Default Modal</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h3>Yakin nih mau dihapus?</h3>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">No</th>
                                        <th rowspan="1" colspan="1">Username</th>
                                        <th rowspan="1" colspan="1">Role</th>
                                        <th rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
@endsection
