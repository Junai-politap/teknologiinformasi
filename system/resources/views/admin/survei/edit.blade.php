@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Edit Data Survei</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="{{ url('update-survei', $survei->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method("PUT")
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left"> Jenis Survei</label>
                    <div class="col-9 col-lg-10">
                        <select name="jenis_survei" class="form-control">
                            <option value="Mahasiswa" @if ($survei->jenis_survei == 'Mahasiswa') selected @endif>Mahasiswa
                            </option>
                            <option value="Tenaga Pendidik/Dosen" @if ($survei->jenis_survei == 'Tenaga Pendidik/Dosen') selected @endif>Tenaga Pendidik/Dosen
                            </option>
                            <option value="Tenaga Pendidik/Teknisi" @if ($survei->jenis_survei == 'Tenaga Pendidik/Teknisi') selected @endif>Tenaga Pendidik/Teknisi
                            </option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Judul</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="judul" value="{{ $survei->judul }}">
                    </div>
                </div>
                

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">File</label>
                    <div class="col-md-4">
                        <embed src="{{ url("public/$survei->file") }}" type="application/pdf" style="width: 80%; height: 600px;">
                    </div>

                    <div class="col-md-6">
                        <input type="file" class="form-control" id="inlineinput" name="file" accept="application/pdf"
                            value="{{ $survei->file }}">
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
