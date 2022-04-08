@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/user" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="Input username" name="username" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Input password" name="password" value="{{ old('password') }}" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label>Role</label>
                        <select class="form-control @error('role') is-invalid @enderror select2bs4" style="width: 100%;"
                            value="{{ old('role') }}" name="role" required>
                            <option selected="selected" value="admin">Admin</option>
                            <option value="pembina">Pembina</option>
                            <option value="author">Author</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label>Author Id</label>
                        <select class="form-control @error('author_id') is-invalid @enderror select2bs4" style="width: 100%;"
                            value="{{ old('author_id') }}" name="author_id" >
                                <option value=""></option>
                            @foreach ($data as $d)
                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
