@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
    @include('section.notif')

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                <strong>Data Hasil Survey </strong>
            </h1>

        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="8" style="font-size: 170%"><b>Angkatan 2015</b></th>
                                </tr>
                                <tr>

                                    <th class="text-center"> NIM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Form 1</th>
                                    <th class="text-center">Form 2</th>
                                    <th class="text-center">Form 3</th>
                                    <th class="text-center">Form 4</th>
                                    <th class="text-center">Form 5</th>
                                    <th class="text-center">Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_mahasiswa->where('tahun_masuk', '2015') as $mahasiswa)
                                    <tr>
                                        <td>{{ $mahasiswa->nim }}</td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>
                                            @if ($mahasiswa->status_tracing == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_2 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_2 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_3 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_3 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_4 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_4 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_5 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_5 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url("show/$mahasiswa->id") }}" class="btn btn-info"><span class="fa fa-info"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="8" style="font-size: 170%"><b>Angkatan 2016</b></th>
                                </tr>
                                <tr>
                                    <th class="text-center"> NIM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Form 1</th>
                                    <th class="text-center">Form 2</th>
                                    <th class="text-center">Form 3</th>
                                    <th class="text-center">Form 4</th>
                                    <th class="text-center">Form 5</th>
                                    <th class="text-center">Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_mahasiswa->where('tahun_masuk', '2016') as $mahasiswa)
                                    <tr>
                                        <td>{{ $mahasiswa->nim }}</td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>
                                            @if ($mahasiswa->status_tracing == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_2 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_2 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_3 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_3 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_4 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_4 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_5 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_5 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url("show/$mahasiswa->id") }}" class="btn btn-info"><span class="fa fa-info"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="8" style="font-size: 170%"><b>Angkatan 2017</b></th>
                                </tr>
                                <tr>
                                    <th class="text-center"> NIM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Form 1</th>
                                    <th class="text-center">Form 2</th>
                                    <th class="text-center">Form 3</th>
                                    <th class="text-center">Form 4</th>
                                    <th class="text-center">Form 5</th>
                                    <th class="text-center">Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_mahasiswa->where('tahun_masuk', '2017') as $mahasiswa)
                                    <tr>
                                       <td>
                                           {{ $mahasiswa->nim }}
                                        </td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>
                                            @if ($mahasiswa->status_tracing == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_2 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_2 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_3 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_3 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_4 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_4 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_5 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_5 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url("show/$mahasiswa->id") }}" class="btn btn-info"><span class="fa fa-info"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <table id="example5" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="8" style="font-size: 170%"><b>Angkatan 2018</b>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center"> NIM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Form 1</th>
                                    <th class="text-center">Form 2</th>
                                    <th class="text-center">Form 3</th>
                                    <th class="text-center">Form 4</th>
                                    <th class="text-center">Form 5</th>
                                    <th class="tetx-center">Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_mahasiswa->where('tahun_masuk', '2018') as $mahasiswa)
                                    <tr>
                                       <td>
                                           {{ $mahasiswa->nim }}
                                        </td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>
                                            @if ($mahasiswa->status_tracing == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_2 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_2 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_3 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_3 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_4 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_4 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($mahasiswa->status_tracing_5 == 0)
                                                <p class="btn btn-danger center"><span class="fa fa-times"></span> </p>
                                            @endif
                                            @if ($mahasiswa->status_tracing_5 == 1)
                                                <p class="btn btn-success"><span class="fa fa-check"></span> </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url("show/$mahasiswa->id") }}" class="btn btn-info"><span class="fa fa-info"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
