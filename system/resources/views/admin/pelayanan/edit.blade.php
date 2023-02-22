@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <h5 class="card-header text-center">Edit Pelayanan</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="{{ url('update-pelayanan', $pelayanan->id_pelayanan) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Nama Jenis Pelayanan</label>
                    <div class="col-lg-9">
                        <select name="id_jenis_pelayanan" id="" class="form-control">
                            @foreach ($list_jenis_pelayanan as $jenis_pelayanan)
                                <option @if ($jenis_pelayanan->id_jenis_pelayanan == $pelayanan->id_jenis_pelayanan) selected @endif
                                    value="{{ $jenis_pelayanan->id_jenis_pelayanan }}">
                                    {{ $jenis_pelayanan->nama_jenis_pelayanan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Nama Pelayanan</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="nama_pelayanan"
                            value="{{ $pelayanan->nama_pelayanan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Detail Berita</label>
                    <div class="col-lg-9">
                        <textarea name="detail" class="summernote">{!! nl2br($pelayanan->detail) !!}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">File</label>
                    <div class="col-md-4">
                        <embed src="{{ url("public/$pelayanan->file") }}" type=""
                            style="object-fit: cover; position: static; width: 100%; height: 200px;">

                    </div>

                    <div class="col-md-5">
                        <input type="file" class="form-control" id="inlineinput" name="file"
                            accept="application/pdf, application/vnd.ms-excel" value="{{ $pelayanan->file }}">
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
