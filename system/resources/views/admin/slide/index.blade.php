@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
@include('section.notif')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong> Data Slide</strong></h3>

        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                class="fa fa-plus"></span> Tambah Berita</button>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_slide as $slide)
                    <tr>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url("show-slide/$slide->id") }}" class="btn btn-info"><span
                                        class="fa fa-info"></span> Lihat</a>

                                <a href="{{ url("edit-slide/$slide->id") }}" class="btn btn-warning"><span
                                        class="fa fa-edit"></span> Edit</a>

                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="{{ url("delete-slide/$slide->id") }}" class="btn btn-danger"><span
                                        class="fa fa-trash"></span> Hapus</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $slide->title }}</td>
                      
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
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="{{ url('store-slide') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Title Slide</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="title">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Slide</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="custom-file-input" type="file" name="gambar" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Gambar Slide</label>
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