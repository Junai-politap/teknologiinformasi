@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Pedoman</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Pedoman</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Pedoman</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_pedoman as $pedoman)
                        @if ($pedoman->id_jenis_pedoman == $jenis_pedoman->id)
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ url("show-pedoman/$pedoman->id") }}" class="btn btn-info"><span
                                                class="fa fa-info"></span> Lihat</a>



                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#modal-edit{{ $pedoman->id }}"><span class="fa fa-edit"></span>
                                            Edit</button>

                                        <div class="modal fade" id="modal-edit{{ $pedoman->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Pedoman</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('update-pedoman', $pedoman->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" name="id_jenis_pedoman"
                                                            value="{{ $pedoman->id_jenis_pedoman }}" hidden>
                                                        <div class="modal-body">
                                                            <div class="card-body">

                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Nama
                                                                        Pedoman</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_pedoman"
                                                                            value="{{ $pedoman->nama_pedoman }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-3 col-form-label">File
                                                                        PDF</label>
                                                                    <div class="col-sm-12 col-md-5">
                                                                        <embed src="{{ url("public/$pedoman->file_pdf") }}"
                                                                            type="application/pdf" style="height: 500px;">
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input class="form-control" type="file"
                                                                            name="file_pdf" accept="application/pdf"
                                                                            value="{{ $pedoman->file_pdf }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-3 col-form-label">File
                                                                        Word</label>
                                                                    <div class="col-sm-12 col-md-9">
                                                                        <input class="form-control" type="file"
                                                                            name="file_word" accept="application/msword"
                                                                            value="{{ $pedoman->file_word }}">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><span class="fa fa-times"></span>
                                                                Close</button>
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ url("delete-pedoman/$pedoman->id") }}" class="btn btn-danger"><span
                                                class="fa fa-trash"></span> Hapus</a>
                                    </div>
                                </td>
                                <td class="text-center">{{ $pedoman->nama_pedoman }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pedoman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-pedoman') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id_jenis_pedoman" value="{{ $jenis_pedoman->id }}" hidden>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Pedoman</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Pedoman"
                                        name="nama_pedoman" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">File PDF</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="file" name="file_pdf" accept="application/pdf"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">File Word</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="file" name="file_word"
                                        accept="application/msword" required>
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
