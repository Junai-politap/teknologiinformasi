@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Edit Berita</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="{{ url('update-berita', $berita->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method("PUT")
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Nama Berita</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="nama_berita" value="{{ $berita->nama_berita }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Detail Berita</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="detail" class="summernote">{!! nl2br($berita->detail) !!}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-md-4">
                        <img class="img-responsive" src='{{ url("public/$berita->gambar") }}'
                            style="object-fit: cover; position: static; width: 50%; height: 200px;">
                    </div>

                    <div class="col-md-6">
                        <input type="file" class="form-control" id="inlineinput" name="gambar" accept=".jpg, .png, .jpeg"
                            value="{{ $berita->gambar }}">
                    </div>
                </div>
                <div class="row pt-2 pt-sm-5 mt-1">

                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            <button class="btn btn-space btn-secondary"><span class="fa fa-times"></span> Cancel</button>
                            <button type="submit" class="btn btn-space btn-primary"><span class="fa fa-save"></span>
                                Simpan</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
