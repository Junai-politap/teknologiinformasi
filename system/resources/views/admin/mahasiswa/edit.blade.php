@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Mahasiswa</strong></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ url('update-mahasiswa', $mahasiswa->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_masuk" value="{{ $mahasiswa->tahun_masuk }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_lulus" value="{{ $mahasiswa->tahun_lulus }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">IPK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ipk" value="{{ $mahasiswa->ipk }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik" value="{{ $mahasiswa->nik }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" value="{{ $mahasiswa->username }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="confirmasi_pass" value="{{ $mahasiswa->confirmasi_pass }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" @if ($mahasiswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki
                                    </option>
                                    <option value="Perempuan" @if ($mahasiswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam" @if ($mahasiswa->agama == 'Islam') selected @endif>Islam</option>

                                    <option value="Kristen" @if ($mahasiswa->agama == 'Kristen') selected @endif>Kristen
                                    </option>

                                    <option value="Khatolik" @if ($mahasiswa->agama == 'Khatolik') selected @endif>Khatolik
                                    </option>

                                    <option value="Hindhu" @if ($mahasiswa->agama == 'Hindhu') selected @endif>Hindhu</option>

                                    <option value="Budha" @if ($mahasiswa->agama == 'Budha') selected @endif>Budha</option>

                                    <option value="Kong Hu Chu" @if ($mahasiswa->agama == 'Kong Hu Chu') selected @endif>Kong Hu
                                        Chu</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ $mahasiswa->tempat_lahir }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    value="{{ $mahasiswa->tanggal_lahir }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat"
                                    value="{{ $mahasiswa->alamat }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp" value="{{ $mahasiswa->hp }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="{{ $mahasiswa->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-md-4">
                                <img style="width: 30%; height: 100%" src="{{ url("public/$mahasiswa->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" alt="avatar">
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <input class="custom-file-input" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Pas Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>
                        Close</button>
                    <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection
