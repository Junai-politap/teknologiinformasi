@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Edit Mata Kuliah</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="{{ url('update-mata-kuliah', $matakuliah->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Kode Matakuliah</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="kode" value="{{ $matakuliah->kode }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Nama Matakuliah</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="nama" value="{{ $matakuliah->nama }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-left">Semester</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="semester" value="{{ $matakuliah->semester }}">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Kurikulum</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="kurikulum" value="{{ $matakuliah->kurikulum }}">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> SKS</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="sks" value="{{ $matakuliah->sks }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-left">Jenis Matakuliah</label>
                    <div class="col-md-2">
                        <select name="jenis_mk" class="form-control">
                            <option value="1" @if ($matakuliah->jenis_mk == '1') selected @endif> Teori</option>
                            <option value="2" @if ($matakuliah->jenis_mk == '2') selected @endif> Praktikum</option>
                            <option value="3" @if ($matakuliah->jenis_mk == '3') selected @endif> Teori - Praktikum</option>
                        </select>
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Jam Teori</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="jam_teori" value="{{ $matakuliah->jam_teori }}">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Jam Praktikum</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="jam_praktikum"
                            value="{{ $matakuliah->jam_praktikum }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">TIU</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="tiu" class="summernote">{{ $matakuliah->tiu }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Bahasan</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="bahasan" class="summernote">{{ $matakuliah->bahasan }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left"> Referensi</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="referensi" class="summernote">{{ $matakuliah->referensi }}</textarea>
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
