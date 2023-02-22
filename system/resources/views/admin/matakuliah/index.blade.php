@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
@include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Matakuliah</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Matakuliah</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Kode Matakuliah</th>
                        <th class="text-center">Nama Matakuliah</th>
                        <th class="text-center">Semester</th>
                        <th class="text-center">Jenis Mata Kuliah</th>
                        <th class="text-center">SKS</th>
                        <th class="text-center">Kurikulum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_mata_kuliah as $mata_kuliah)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ url("show-mata-kuliah/$mata_kuliah->id_mata_kuliah") }}"
                                        class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-mata-kuliah/$mata_kuliah->id_mata_kuliah") }}"
                                        class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="{{ url("delete-mata-kuliah/$mata_kuliah->id_mata_kuliah") }}"
                                        class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center">{{ $mata_kuliah->kode }}</td>
                            <td class="text-center">{{ $mata_kuliah->nama }}</td>
                            <td class="text-center">{{ $mata_kuliah->semester }}</td>
                            <td class="text-center">
                                @if ($mata_kuliah->jenis_mk == 1)
                                    <p>Teori</p>
                                @endif

                                @if ($mata_kuliah->jenis_mk == 2)
                                    <p>Praktikum</p>
                                @endif

                                @if ($mata_kuliah->jenis_mk == 3)
                                    <p>Teori - Praktikum</p>
                                @endif
                            </td>
                            <td class="text-center">{{ $mata_kuliah->sks }}</td>
                            <td class="text-center">{{ $mata_kuliah->kurikulum }}</td>
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
                    <h4 class="modal-title">Tambah Matakuliah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-mata-kuliah') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Matakuliah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Kode Matakuliah" name="kode">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Matakuliah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Matakuliah" name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Semester</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Semester" name="semester">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">SKS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="SKS" name="sks">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kurikulum</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Kurikulum" name="kurikulum">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Matakuliah</label>
                                <div class="col-sm-9">
                                    <select name="jenis_mk" id="" class="form-control">
                                        <option> Pilih Jenis Matakuliah</option>
                                        <option value="1"> Teori</option>
                                        <option value="2"> Praktikum</option>
                                        <option value="3"> Teori - Praktikum</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Jam Teori</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jam_teori">
                                </div>

                                <label for="inputPassword3" class="col-sm-2 col-form-label">Jam Praktikum</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="jam_praktikum">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">TIU</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="TIU" name="tiu">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bahasan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Bahasan" name="bahasan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Referensi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Referensi" name="referensi ">
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
