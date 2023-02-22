@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
@include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> </strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Label</th>
                        <th class="text-center">Isi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_visimisi as $visimisi)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#modal-lg{{ $visimisi->id }}"><span
                                        class="fa fa-edit"></span> Edit</button>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="{{ url("delete-visi-misi/$visimisi->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center">{{ $visimisi->label }}</td>
                            <td class="text-justify">{!! nl2br($visimisi->isi) !!}</td>
                        </tr>
                        <div class="modal fade" id="modal-lg{{ $visimisi->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="form-horizontal" action="{{ url('update-visi-misi', $visimisi->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="modal-body">
                                            <div class="card-body">
                    
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Label</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="label" value="{{ $visimisi->label }}">
                                                    </div>
                                                </div>
                    
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Isi</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="isi" class="summernote">{{ $visimisi->isi }}</textarea>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-visi-misi') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Label</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="label">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi</label>
                                <div class="col-sm-9">
                                    <textarea name="isi" class="summernote"></textarea>
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
