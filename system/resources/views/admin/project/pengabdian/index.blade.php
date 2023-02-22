@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Pengabdian </strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center"> Ketua Pengabdian</th>
                        <th class="text-center">Tahun Pelaksanaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_pengabdian as $pengabdian)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    <button class="btn btn-info" data-toggle="modal"
                                        data-target=".bs-example-modal-show{{ $pengabdian->id }}">
                                        <span class="fa fa-info"></span>
                                        Lihat
                                    </button>

                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target=".bs-example-modal-edit{{ $pengabdian->id }}">
                                        <span class="fa fa-edit"></span>
                                        Edit
                                    </button>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-pengabdian/$pengabdian->id") }}" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Hapus
                                    </a>


                                    <div class="modal fade bs-example-modal-show{{ $pengabdian->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content text-left">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center" id="myLargeModalLabel"> 
                                                         {{ $pengabdian->judul }}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Ketua pengabdian
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> {{ $pengabdian->ketua }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Anggota pengabdian (Dosen)
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> {{ $pengabdian->anggota_dosen }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Anggota pengabdian (Mahasiswa)
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> {{ $pengabdian->anggota_mahasiswa }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Skema pengabdian
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> {{ $pengabdian->skema }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Tahun Pelaksanaan
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> {{ $pengabdian->tahun }}</p>
                                                        </div>
                                                    </div>

                                                  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade bs-example-modal-edit{{ $pengabdian->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel"> 
                                                        Edit Data {{ $pengabdian->judul }}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form action="{{ url('update-pengabdian', $pengabdian->id) }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method("PUT")
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Judul pengabdian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="judul" value="{{ $pengabdian->judul }}">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Ketua pengabdian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="ketua" value="{{ $pengabdian->ketua }}">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Anggota Pengabdian (Dosen)</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="anggota_dosen" class="form-control" rows="5">{{$pengabdian->anggota_dosen}}</textarea>
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Anggota Pengabdian (Mahasiswa)</label>
                                                            <div class="col-sm-9">
                                                            <textarea name="anggota_mahasiswa" class="form-control" rows="5">{{$pengabdian->anggota_mahasiswa}}</textarea>
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Skema</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="skema" value="{{ $pengabdian->skema }}">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tahun Pelaksanaan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tahun" value="{{ $pengabdian->tahun }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-sm-10">
                                                                <button
                                                                    class="btn btn-primary float-right rounded"><span
                                                                        class="fa fa-save"></span> Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                            <td class="text-center">{{ $pengabdian->judul }}</td>
                            <td class="text-center">{{ $pengabdian->ketua }}</td>
                            <td class="text-center">{{ $pengabdian->tahun }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-pengabdian') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul pengabdian</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul pengabdian" name="judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ketua pengabdian</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Ketua pengabdian" name="ketua">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Penelitian (Dosen)</label>
                                <div class="col-sm-9">
                                <textarea name="anggota_dosen" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Penelitian (Mahasiswa)</label>
                                <div class="col-sm-9">
                                <textarea name="anggota_mahasiswa" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Skema</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Skema" name="skema">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Pelaksanaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tahun Pelaksanaan"
                                        name="tahun">
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
