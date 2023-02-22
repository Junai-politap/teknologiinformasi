@extends('template.home')
@section('title', 'Penelitian - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Penelitian Dosen',
    ])
    @include('section.menu')


    <section class="">
        <div class="container">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="card">
                                    <div class="card-header">Data Penelitian</div>
                                    <div class="card-body">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:100%;height:40%;left:0; top:0"></div>
                                            </div>
                                        </div> <canvas id="chart-line" width="299" height="130"
                                            class="chartjs-render-monitor"
                                            style="display: block; width: 299px; height: 200px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="choosing-area">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                @foreach ($list_penelitian->groupBy('tahun') as $tahun => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun-{{ $tahun }}" role="tab">Tahun {{ $tahun }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_penelitian->groupBy('tahun') as $tahun => $list_penelitian)
                    <div class="tab-pane fade show active" id="tahun-{{ $tahun }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center"> Judul Penelitian</th>
                                        <th class="text-center"> Ketua Penelitian</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($list_penelitian as $penelitian)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $penelitian->judul }}</td>
                                                <td class="text-center">{{ $penelitian->ketua }}</td>

                                                <td class="text-center">
                                                    <button class="btn btn-info" data-toggle="modal"
                                                        data-target="#modal-lg{{ $penelitian->id }}">
                                                        <span class="fa fa-info"></span>
                                                    </button>
                                                </td>
                                                <div class="modal fade" id="modal-lg{{ $penelitian->id }}">
                                                    <div class="modal-dialog modal-lg" style="margin-top: 10%">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title text-center">
                                                                    {{ $penelitian->judul }}
                                                                </h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-4 col-form-label">Nama
                                                                            Ketua Penelitian</label>
                                                                        <div class="col-sm-8">
                                                                            <label class="col-form-label">
                                                                                : {{ $penelitian->ketua }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">
                                                                            Nama Anggota (Dosen)
                                                                        </label>
                                                                        <div class="col-sm-8">
                                                                            <label class="col-form-label">
                                                                                :
                                                                                {{ $penelitian->anggota_dosen }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">
                                                                            Nama Anggota (Mahasiswa)
                                                                        </label>
                                                                        <div class="col-sm-8">
                                                                            <label class="col-form-label">
                                                                                :
                                                                                {{ $penelitian->anggota_mahasiswa }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">
                                                                            Skema Penelitian
                                                                        </label>
                                                                        <div class="col-sm-8">
                                                                            <label class="col-form-label">
                                                                                : {{ $penelitian->skema }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
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
    <script>
        $(document).ready(function() {
            var ctx = $("#chart-line");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [2018, 2019, 2020, 2021, 2022],
                    datasets: [{
                        data: [{{ $A }}, {{ $B }}, {{ $C }},
                            {{ $D }}, {{ $E }}
                        ],
                        label: "Data Penelitian",
                        borderColor: "#87CEFA",
                        backgroundColor: '#87CEFA',
                        fill: false
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: ''
                    }
                }
            });
        });
    </script>
@endsection
