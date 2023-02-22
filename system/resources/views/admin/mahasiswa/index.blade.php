@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Mahasiswa</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-user-plus"></span> Tambah Mahasiswa</button>

            {{-- <a href="{{ url('create') }}"> tambah</a> --}}
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">NIM / NIK</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Tahun Masuk / Tahun Keluar</th>
                        <th class="th text-center">IPK</th>
                        <!-- <th class="text-center">Jenis Kelamin</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_mahasiswa as $mahasiswa)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ url("show-mahasiswa/$mahasiswa->id") }}" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-mahasiswa/$mahasiswa->id") }}" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-mahasiswa/$mahasiswa->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="">
                                NIM : {{ $mahasiswa->nim }} <br>
                                NIK : {{ $mahasiswa->nik }}
                            </td>
                            <td class="text-center">{{ $mahasiswa->nama }}</td>
                            <td class="text-center">
                                Tahun Masuk : {{ $mahasiswa->tahun_masuk }} <br>
                                Tahun Lulus :{{ $mahasiswa->tahun_lulus }}
                            </td>
                            <td class="text-center">{{ $mahasiswa->ipk }}</td>
                            
                            <!-- <td class="text-center">{{ $mahasiswa->jenis_kelamin }}</td> -->
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
                    <h4 class="modal-title">Tambah Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-mahasiswa') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nim">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nik">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_masuk">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_lulus">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">IPK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ipk">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value=""> Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"> Laki-Laki</option>
                                        <option value="Perempuan"> Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select name="agama" class="form-control">
                                        <option value=""> Pilih Agama</option>
                                        <option value="Islam"> Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Khatolik"> Khatolik</option>
                                        <option value="Hindhu"> Hindhu</option>
                                        <option value="Budha"> Budha</option>
                                        <option value="Kong Hu Chu"> Kong Hu Chu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Hp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="hp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="custom-file-input" type="file" name="foto"
                                        accept=".jpg, .png, .jpeg">
                                    <label class="custom-file-label">Pas Foto</label>
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
