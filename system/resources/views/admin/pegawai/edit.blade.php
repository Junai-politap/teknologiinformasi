@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="text-center"><strong>Edit Data Pegawai</strong></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ url('update-pegawai', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik" value="{{ $pegawai->nik }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_lengkap" value="{{ $pegawai->nama_lengkap }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gelar Belakang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gelar_belakang" value="{{ $pegawai->gelar_belakang }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select name="jabatan" class="form-control">
                                    <option value="Ketua Jurusan" @if ($pegawai->jabatan == 'Ketua Jurusan') selected @endif>Ketua Jurusan
                                    </option>
                                    <option value="Sekretaris Jurusan" @if ($pegawai->jabatan == 'Sekretaris Jurusan') selected @endif>Sekretaris Jurusan
                                    </option>

                                    <option value="Koordinator Prodi" @if ($pegawai->jabatan == 'Koordinator Prodi') selected @endif>Koordinator Prodi
                                    </option>

                                    <option value="Ketua Laboratotium" @if ($pegawai->jabatan == 'Ketua Laboratotium') selected @endif>Ketua Laboratotium
                                    </option>

                                    <option value="Dosen" @if ($pegawai->jabatan == 'Dosen') selected @endif>Dosen
                                    </option>

                                    <option value="Admin" @if ($pegawai->jabatan == 'Admin') selected @endif>Admin
                                    </option>

                                    <option value="Teknisi" @if ($pegawai->jabatan == 'Teknisi') selected @endif>Teknisi
                                    </option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="unit_kerja"
                                    value="Prodi DIII Teknologi Informasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bidang Keahlian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bidang_keahlian" value="{{ $pegawai->bidang_keahlian }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $pegawai->tempat_lahir }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" @if ($pegawai->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki
                                    </option>
                                    <option value="Perempuan" @if ($pegawai->jenis_kelamin == 'Perempuan') selected @endif>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam" @if ($pegawai->agama == 'Islam') selected @endif>Islam</option>

                                    <option value="Kristen" @if ($pegawai->agama == 'Kristen') selected @endif>Kristen
                                    </option>

                                    <option value="Khatolik" @if ($pegawai->agama == 'Khatolik') selected @endif>Khatolik
                                    </option>

                                    <option value="Hindhu" @if ($pegawai->agama == 'Hindhu') selected @endif>Hindhu</option>

                                    <option value="Budha" @if ($pegawai->agama == 'Budha') selected @endif>Budha</option>

                                    <option value="Kong Hu Chu" @if ($pegawai->agama == 'Kong Hu Chu') selected @endif>Kong Hu
                                        Chu</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp" value="{{ $pegawai->hp }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-md-4">
                                <img style="width: 30%" src="{{ url("public/$pegawai->foto") }}">
                            </div>
                            <div class="col-sm-12 col-md-5">
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

@endsection
