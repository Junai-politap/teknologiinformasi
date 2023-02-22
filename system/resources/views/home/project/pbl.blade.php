@extends('template.home')
@section('title', 'PBL - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Project Based Learning',
    ])
    @include('section.menu')

    <section class="choosing-area">
        {{-- <div class="container">
            <div class="card-body">
                <form action="" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tahun</label>
                                <input type="text" name="tahun_awal" value="{{ date('Y') }}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Searching</label>
                                <input type="text" name="tahun_awal" value="{{ date('Y') }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                @foreach ($list_pbl->groupBy('tahun_ajar') as $tahun_ajar => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun_ajar-{{ $tahun_ajar }}" role="tab">Tahun {{ $tahun_ajar }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_pbl->groupBy('tahun_ajar') as $tahun_ajar => $list_pbl_tahun)
                    <div class="tab-pane fade show active" id="tahun_ajar-{{ $tahun_ajar }}" role="tabpanel">
                        <div class="row">
                            @foreach ($list_pbl_tahun->groupBy('jenis') as $jenis_tahun => $jenis)
                                <div class="col-md-12 mb-5">
                                    <h3>Tahun Ajar {{ $tahun_ajar }} {{ $jenis_tahun }}</h3>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul Project</th>
                                            <th class="text-center">Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenis as $jenis)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-left">{{ $jenis->judul }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url("$jenis->link") }}" target="_blank"
                                                            class="btn btn-info"><span class="fa fa-globe"></span> Demo
                                                            Sistem</a>

                                                        <a href="{{ url("$jenis->link_landing") }}" target="_blank"
                                                            class="btn btn-info"><span class="fa fa-info"></span> Landing
                                                            Page</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
