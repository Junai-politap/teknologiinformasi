@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Fasilitas</strong></h3>

            <button class="btn btn-primary float-right" style="margin-left: 1%" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>

            <button class="btn btn-primary float-right"  data-toggle="modal" data-target="#modal-lg-jenis"><span
                    class="fa fa-plus"></span> Tambah Jenis Fasilitas</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Ruangan</th>
                        <th class="text-center"> Jenis Fasilitas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_fasilitas as $fasilitas)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ url("show-fasilitas/$fasilitas->id") }}" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-fasilitas/$fasilitas->id") }}" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-fasilitas/$fasilitas->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center">{{ $fasilitas->nama_fasilitas }}</td>
                            <td class="text-center">{{ $fasilitas->jenisfasilitas->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Fasilitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-fasilitas') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Fasilitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_fasilitas">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Detail Fasilitas</label>
                                <div class="col-sm-9">
                                    <textarea name="detail_fasilitas" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Fasilitas</label>
                                <div class="col-sm-9">
                                    <select name="id_jenis_fasilitas" class="form-control">
                                        <option value=""> Pilih Jenis Fasilitas</option>
                                        @foreach ($list_jenis_fasilitas as $jenis_fasilitas)
                                            <option value="{{ $jenis_fasilitas->id }}"> {{ $jenis_fasilitas->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label"></label>
                                <div class="col-sm-12 col-md-9">                                
                                    * Foto tidak boleh lebih dari 200Kb
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-lg-jenis">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Jenis Fasilitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-jenis-fasilitas') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Jenis Fasilitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
