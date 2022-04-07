@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Judul Postingan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            placeholder="Input Judul" name="judul" value="{{ old('judul', $post->judul) }}" readonly="readonly" required>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug', $post->slug) }}" readonly="readonly">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Postingan</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" rows="6" name="isi"
                            value="{{ old('isi') }}" readonly="readonly" required>{{ $post->isi }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id=""
                            placeholder="Input Kategori" value="{{ old('kategori', $post->kategori) }}" name="kategori" readonly="readonly" required>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tag</label>
                        <input type="text" class="form-control @error('tag') is-invalid @enderror" id=""
                            placeholder="Input Tag" value="{{ old('tag', $post->tag) }}" name="tag" readonly="readonly" required>
                        @error('tag')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('tag') is-invalid @enderror" id="exampleInputFile"
                                    value="{{ old('foto', $post->foto) }}" name="foto" readonly="readonly" required>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Gambar Postingan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <img src="{{ asset('storage/' . $post->foto) }}" alt="" style="max-width: 100%">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
    </div> --}}


@endsection
