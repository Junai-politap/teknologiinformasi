@extends('template.home')
@section('title', 'Profil Pimpinan Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Profil Pimpinan',
    ])
    @include('section.menu')
    <br><br><br>
    <div class="site-section site-blocks-cover">
        <div class="container">
            <div class="row">
                @foreach ($list_pegawai as $pegawai)
                    <div class="container">
                        @if ($pegawai->jabatan == 'Ketua Jurusan')
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="{{ url("public/$pegawai->foto") }}" alt="Image"
                                    class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto ">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pegawai->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nama_lengkap }}, {{ $pegawai->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">Tempat Tanggal Lahir </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->tempat_lahir }}, {{ $pegawai->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pegawai->jabatan == 'Sekretaris Jurusan')
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="{{ url("public/$pegawai->foto") }}" 
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pegawai->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nama_lengkap }}, {{ $pegawai->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">Tempat Tanggal Lahir </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->tempat_lahir }}, {{ $pegawai->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pegawai->jabatan == 'Koordinator Prodi')
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="{{ url("public/$pegawai->foto") }}"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto align-self-center">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pegawai->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nama_lengkap }}, {{ $pegawai->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">Tempat Tanggal Lahir </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->tempat_lahir }}, {{ $pegawai->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pegawai->jabatan == 'Ketua Laboratotium')
                        <div class="row  mb-5">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="{{ url("public/$pegawai->foto") }}"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pegawai->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nama_lengkap }}, {{ $pegawai->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">Tempat Tanggal Lahir </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pegawai->tempat_lahir }}, {{ $pegawai->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@push('style')
    <style>
        .v-align-top {
            vertical-align: top;
        }
    </style>
@endpush
