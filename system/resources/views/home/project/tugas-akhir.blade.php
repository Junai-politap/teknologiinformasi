@extends('template.home')
@section('title', 'PBL - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Tugas Akhir Mahasiswa',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <select name="" class="form-control">
                                                @for ($i = date('Y') - 5; $i <= date('Y'); $i++)
                                                    <option value="{{ $i }}"
                                                        @if ($i == $i) selected @endif>
                                                        {{ $i }}</option>
                                                @endfor
                                            </select>

                                            {{-- <input type="text" id="search-table" class="form-control pull-right  table-search" placeholder="Cari Tahun Angkatan"> --}}
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <input type="text" id="search-table" class="form-control pull-right  table-search" placeholder="Cari Judul Tugas">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <ul class="nav nav-tabs mb-10" id="myTab" role="tablist">
                @foreach ($list_tahun->groupBy('tahun_angkatan') as $tahun_angkatan => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun_angkatan-{{ $tahun_angkatan }}" role="tab">TA {{ $tahun_angkatan }}</a>
                    </li>
                @endforeach
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_tugas_akhir->groupBy('tahun_angkatan') as $tahun_angkatan => $list_tugas_akhir)
                    <div class="tab-pane fade show active" id="tahun_angkatan-{{ $tahun_angkatan }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">

                                <table class="table table-hover table-responsive-block dataTable no-footer table-with-search">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center sorting_asc"> Nama Mahasiswa</th>
                                        <th class="text-center sorting"> Judul Tugas Akhir</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($list_tugas_akhir as $tugas_akhir)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-left">{{ $tugas_akhir->nama_mahasiswa }}</td>
                                                <td class="text-justify">{{ $tugas_akhir->judul }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>

@endsection
