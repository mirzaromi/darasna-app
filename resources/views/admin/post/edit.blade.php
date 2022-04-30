@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/post/{{ $post->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Judul Postingan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            placeholder="Input Judul" name="judul" value="{{ old('judul', $post->judul) }}" required>
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
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" rows="3" name="isi" value=""
                            required>{{ old('isi', $post->isi) }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id=""
                            placeholder="Input Kategori" value="{{ old('kategori', $post->kategori) }}" name="kategori" required>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                    id="exampleInputFile" name="foto">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            @error('foto')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Image Horizontal</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('foto_horizontal') is-invalid @enderror"
                                            id="exampleInputFile" name="foto_horizontal">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    @error('foto_horizontal')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sebelum Paragraf Berapa?</label>
                                <input type="text" class="form-control @error('before_parag') is-invalid @enderror" id="before_parag"
                                    placeholder="Input sebelum paragraf berapa?" name="before_parag" value="{{ old('before_parag', $post->before_parag) }}" required>
                                @error('before_parag')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Image Vertical</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('foto_vertical') is-invalid @enderror"
                                            id="exampleInputFile" name="foto_vertical">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    @error('foto_vertical')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Pada Paragraf Berapa?</label>
                                <input type="text" class="form-control @error('on_parag') is-invalid @enderror" id="on_parag"
                                    placeholder="Input pada paragraf berapa?" name="on_parag" value="{{ old('on_parag', $post->on_parag) }}" required>
                                @error('on_parag')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                    <label>Author</label>
                    <select class="form-control @error('author_id') is-invalid @enderror select2bs4" style="width: 100%;"
                        value="{{ old('author_id') }}" name="author_id" required>
                            <option selected="@error('author_id') selected @enderror" value="{{ auth()->user()->author_id }}">{{ auth()->user()->author_id }}</option>

                        @foreach ($author as $a)
                            <option selected="@error('author_id') selected @enderror" value="{{ $a->id }}">{{ $a->nama }}</option>
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
    <script>
        const title = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/post/check_slug?judul=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
