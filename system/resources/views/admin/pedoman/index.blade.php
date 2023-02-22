@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')

  
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Jenis Pedoman</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Jenis Pedoman</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Aksi</th>
                        <th class="">Nama Jenis Pedoman</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no=1
                    @endphp
                    @foreach ($list_jenis_pedoman as $jenis_pedoman)
                        <tr>
                            <td class="text-center"> {{ $no++ }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ url("show-jenis-pedoman/$jenis_pedoman->id") }}" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-jenis-pedoman/$jenis_pedoman->id") }}" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    {{-- <a href="{{ url("delete-jenis-pedoman/$jenis_pedoman->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a> --}}
                                </div>
                            </td>
                            <td class="text">{{ $jenis_pedoman->nama_jenis_pedoman }}</td>
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
                    <h4 class="modal-title">Tambah Pedoman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-jenis-pedoman') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Jenis Pedoman</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Nama Jenis Pedoman"
                                        name="nama_jenis_pedoman">
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
