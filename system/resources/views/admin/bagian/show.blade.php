@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
    @include('section.notif')

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                <strong>Data Hasil Survey {{ $mahasiswa->nama }}</strong>
            </h1>

        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr><th class="text-center" colspan="3" style="font-size: 160%"> Evaluasi Pembelajaran Saat Kuliah</th></tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_tracer_study->where('id_bagian', '96ae217a-7d04-4bdc-84f4-8c91a51adde5') as $tracer_study)
                                    @if ($tracer_study->id_mahasiswa == $mahasiswa->id)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tracer_study->soal->soal}}</td>
                                            <td>{{ $tracer_study->jawaban->jawaban }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Informasi Tentang Pekerjaan Alumni
                                    </th>
                                </tr>
                                <tr>
                                    <th>Soal</th>
                                    
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($list_tracer_study->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $tracer_study)
                                    @if ($tracer_study->id_mahasiswa == $mahasiswa->id)
                                        <tr>

                                            <td>{{ $tracer_study->soal->soal }}</td>
                                            <td>{{ $tracer_study->jawaban->jawaban }}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                @foreach ($list_tracer->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $tracer)
                                    @if ($tracer->id_mahasiswa == $mahasiswa->id)
                                        <tr>

                                            <td>{{ $tracer->soal->soal }}</td>

                                            <td>
                                                @if ($tracer->id_jawaban == '971ae197-887f-4fd9-9f89-0f8db794e109')
                                                    <ul>
                                                        <li>{{ $tracer->jawaban_1 }}</li>
                                                        <li>{{ $tracer->jawaban_2 }}</li>
                                                        <li>{{ $tracer->jawaban_3 }}</li>
                                                        <li>{{ $tracer->jawaban_4 }}</li>
                                                        <li>{{ $tracer->jawaban_5 }}</li>
                                                        <li>{{ $tracer->jawaban_6 }}</li>
                                                        <li>{{ $tracer->jawaban_7 }}</li>

                                                    </ul>
                                                @endif


                                                @if ($tracer->id_soal == '971ae1e8-e204-4e4f-b06d-8485167b87f9')
                                                    <ul>
                                                        <li>{{ $tracer->jawaban_8 }}</li>
                                                        <li>{{ $tracer->jawaban_9 }}</li>
                                                        <li>{{ $tracer->jawaban_10 }}</li>

                                                    </ul>
                                                @endif

                                                @if ($tracer->id_jawaban == '971ae1f7-faec-4131-a19d-60953b698f8c')
                                                    <ul>
                                                        <li>{{ $tracer->jawaban_11 }}</li>

                                                    </ul>
                                                @endif
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
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Perbaikan Proses Pembelajaran
                                    </th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_tracer_study->where('id_bagian', '96ae2407-65d2-4c4f-b204-77b435bd5f4c') as $tracer_study)
                                    @if ($tracer_study->id_mahasiswa == $mahasiswa->id)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tracer_study->soal->soal}}</td>
                                            <td>{{ $tracer_study->jawaban->jawaban }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="example5" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Kompetensi Alumni
                                    </th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_tracer_study->where('id_bagian', '96ae2417-c7ce-43d6-97cb-2216283a51ff') as $tracer_study)
                                    @if ($tracer_study->id_mahasiswa == $mahasiswa->id)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tracer_study->soal->soal}}</td>
                                            <td>{{ $tracer_study->jawaban->jawaban }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                    <table id="example6" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="3" style="font-size: 160%"> 
                                    Kontribusi Kompetensi Yang Diperlukan Dalam Pekerjaan
                                </th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($list_tracer_study->where('id_bagian', '96ae2422-0023-45bd-87b2-7ec4d65b027f') as $tracer_study)
                                @if ($tracer_study->id_mahasiswa == $mahasiswa->id)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $tracer_study->soal->soal}}</td>
                                        <td>{{ $tracer_study->jawaban->jawaban }}</td>
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
