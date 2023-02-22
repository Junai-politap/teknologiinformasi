@extends('template.home')
@section('title', 'Survei Kepuasan Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Survei Kepuasan Tenaga Pendidik/Dosen ',
    ])
    @include('section.menu')
    <br>

    <div class="site-section" style="margin-bottom: 10%; margin-top: 2%">
        <div class="container">
            <div class="sec-title left">
                <div class="title">
                    <a href="{{ url('pelayanan/survei') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span>
                        Kembali</a>
                </div>
                <div class="dector thm-bg-clr left"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_survei as $survei)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text">{{ $survei->judul }}</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <a class="btn btn-info" download="{{ $survei->judul }}"
                                                    href="{{ url("public/$survei->file") }}"><span class="fa fa-download"
                                                        download></span> File PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
