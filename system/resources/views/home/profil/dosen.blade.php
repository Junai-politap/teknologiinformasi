@extends('template.home')
@section('title', 'Dosen Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Profil Dosen',
    ])
    @include('section.menu')
    <br><br>

    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        @foreach ($list_pegawai as $pegawai)
                            @if ($pegawai->jabatan == 'Ketua Jurusan')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 16px;">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <p style="margin-top: -4%; font-size: 14px;">
                                                Bidang Keahlian : {{ $pegawai->bidang_keahlian }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">
                                                <p style="margin-top: -4%">
                                                    {{ $pegawai->email }}</a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pegawai->jabatan == 'Sekretaris Jurusan')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 16px;">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <p style="margin-top: -4%; font-size: 14px;">
                                                Bidang Keahlian : {{ $pegawai->bidang_keahlian }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">
                                                <p style="margin-top: -4%">
                                                    {{ $pegawai->email }}</a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pegawai->jabatan == 'Koordinator Prodi')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 16px;">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <p style="margin-top: -4%; font-size: 14px;">
                                                Bidang Keahlian : {{ $pegawai->bidang_keahlian }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">
                                                <p style="margin-top: -4%">
                                                    {{ $pegawai->email }}</a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pegawai->jabatan == 'Ketua Laboratotium')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 16px;">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <p style="margin-top: -4%; font-size: 14px;">
                                                Bidang Keahlian : {{ $pegawai->bidang_keahlian }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">
                                                <p style="margin-top: -4%">
                                                    {{ $pegawai->email }}</a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pegawai->jabatan == 'Dosen')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 16px;">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <p style="margin-top: -4%; font-size: 14px;">
                                                Bidang Keahlian : {{ $pegawai->bidang_keahlian }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">
                                                <p style="margin-top: -4%">
                                                    {{ $pegawai->email }}</a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .person img {
            width: 150px;
            height: 150px;
        }

    </style>
@endpush
