@extends('admin.template')
@section('container')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Seluruh Post</h3>
            </div>
            <!-- /.card-header -->
                <div class="card-body">
                    <a href="">
                        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus mr-2"></i>Tambah
                            Postingan</button>
                    </a>
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Author</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post) 
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->judul }}</td>
                                <td>{{ $post->kategori }}</td>
                                <td>{{ $post->tag }}</td>
                                <td>{{ $post->author_id }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success">
                                            <a href="/admin/post/" class="text-white"><i
                                                    class="far fa-eye"></i></a>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <a href="/admin/post//edit" class="text-white"><i
                                                    class="far fa-edit"></i></a>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#modal-default">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <form action="/admin/post/" method="POST" class="">
                                            @method('delete')
                                            @csrf
                                            <div class="modal fade" id="modal-default">
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
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Author</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
