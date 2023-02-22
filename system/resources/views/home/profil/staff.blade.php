@extends('template.home')
@section('title', 'Staff dan Teknisi Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Profil Admin dan Teknisi',
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
                            @if ($pegawai->jabatan == 'Admin')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                           
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">{{ $pegawai->email }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pegawai->jabatan == 'Teknisi')
                                <div class="col-md-4">
                                    <br>
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $pegawai->nama_lengkap }},
                                                {{ $pegawai->gelar_belakang }}</h5>
                                            <p class="card-text">
                                                {{ $pegawai->jabatan }}
                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:{{ $pegawai->email }}">{{ $pegawai->email }}</a>
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
