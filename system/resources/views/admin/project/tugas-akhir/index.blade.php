@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Tugas Akhir</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tahun Ajar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_tugas_akhir as $tugas_akhir)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    <a href="{{ url("lihat-tugas-akhir/$tugas_akhir->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-tugas-akhir/$tugas_akhir->id") }}" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-tugas-akhir/$tugas_akhir->id") }}" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Hapus
                                    </a>

                                </div>
                            </td>
                            <td class="text-left">{{ $tugas_akhir->nama_mahasiswa }}</td>
                            <td class="text-left">{{ $tugas_akhir->judul }}</td>
                            <td class="text-center">{{ $tugas_akhir->tahun_angkatan }}</td>
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
                <form class="form-horizontal" action="{{ url('store-tugas-akhir') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="NIM Mahasiswa"
                                        name="nim">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Mahasiswa"
                                        name="nama_mahasiswa">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Tugas Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul Tugas Akhir"
                                        name="judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tahun Masuk"
                                        name="tahun_masuk">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Angkatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tahun_angkatan" class="form-control" placeholder="Tahun Angkatan">
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
