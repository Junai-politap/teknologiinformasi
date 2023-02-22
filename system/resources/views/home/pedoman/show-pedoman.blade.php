@extends('template.home')
@section('title', 'Pedoman Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Pedoman ',
    ])
    @include('section.menu')
    <br>

    <div class="site-section" style="margin-bottom: 10%; margin-top: 2%">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title">
                    <ul> {{ $jenis_pedoman->nama_jenis_pedoman }}</ul>
                </div>
                <div class="dector thm-bg-clr center" style="width: auto"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pedoman</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_pedoman as $pedoman)
                                    @if ($pedoman->id_jenis_pedoman == $jenis_pedoman->id)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td class="text">{{ $pedoman->nama_pedoman }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <a class="btn btn-info" download="{{ $pedoman->nama_pedoman }}"
                                                        href="{{ url("public/$pedoman->file_word") }}"><span
                                                            class="fa fa-download" download></span> File Word</a>
                                                    <a class="btn btn-info" download="{{ $pedoman->nama_pedoman }}"
                                                        href="{{ url("public/$pedoman->file_pdf") }}"><span
                                                            class="fa fa-download" download></span> File PDF</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
