@extends('template.mahasiswa')

@section('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA')

@section('content')
@include('section.mahasiswa')

<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix">
                    <div class="container">
                        <div class="row">
                            <form action="{{ url('update-profil', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            
                                <div class="col-md-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="margin-top: 20%">
                                        <img class="rounded-circle" style="border-radius: 4%" src="{{ url("public/$mahasiswa->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">                                        
                                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{ $mahasiswa->foto }}">
                                    </div>
                                </div>
                                <div class="col-md-8 border-right">
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-left">Edit Profil</h4>
                                        </div>
                                        <br>
                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">NIM</label>
                                                <input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Username</label>
                                                <input type="text" class="form-control" name="username" value="{{ $mahasiswa->username }}">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Password</label>
                                                <input type="password" class="form-control" name="confirmasi_pass" value="{{ $mahasiswa->confirmasi_pass }}">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">NIK</label>
                                                <input type="text" class="form-control" name="nik" value="{{ $mahasiswa->nik }}">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="{{ $mahasiswa->alamat }}">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
                                                    <option value="Laki-laki"
                                                        @if($mahasiswa->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                                                    
                                                    <option value="Perempuan"
                                                        @if($mahasiswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Agama</label>
                                                <select name="agama" class="form-control">
                                                    <option value="Islam"
                                                        @if($mahasiswa->agama == "Islam") selected @endif>Islam</option>
                                                    
                                                    <option value="Kristen"
                                                        @if($mahasiswa->agama == "Kristen") selected @endif>Kristen</option>
                                                    
                                                    <option value="Khatolik"
                                                        @if($mahasiswa->agama == "Khatolik") selected @endif>Khatolik</option>

                                                    <option value="Hindhu"
                                                        @if($mahasiswa->agama == "Hindhu") selected @endif>Hindhu</option>

                                                    <option value="Budha"
                                                        @if($mahasiswa->agama == "Budha") selected @endif>Budha</option>

                                                    <option value="Kong Hu Chu"
                                                        @if($mahasiswa->agama == "Kong Hu Chu") selected @endif>Kong Hu Chu</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">No Hp</label>
                                                <input type="text" class="form-control" name="hp" value="{{ $mahasiswa->hp }}">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Alamat Email</label>
                                                <input type="text" class="form-control" name="email" value="{{ $mahasiswa->email }}">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            
                                        </div>
                                        <br>
                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <button class="btn btn-primary profile-button">
                                                    <span class="fa fa-save"></span> Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection