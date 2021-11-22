@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.podcast.simpan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Trailer</label>
                        <input type="text" name="name_podcast"
                            class="form-control @error('name_podcast') is-invalid @enderror"
                            value="{{ old('name_podcast') }}">
                        @error('name_podcast')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kode embed Video Youtube</label>
                        <input type="text" name="url_podcast"
                            class="form-control @error('url_podcast') is-invalid @enderror"
                            value="{{ old('url_podcast') }}">
                        @error('url_podcast')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Trailer</label>
                        <textarea name="description_podcast"
                            class="ckeditor @error('description_podcast') is-invalid @enderror" id="ckeditor">
                        {{ old('description_podcast') }}
                    </textarea>
                        @error('description_podcast')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection