@extends('template.mahasiswa')

@section('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA')

@section('content')
    @include('section.mahasiswa')
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <br>
                @include('section.form')
                <div class="col-md-12">
                   
                    <div class="widget"><br>

                        @if ($mahasiswa->status_tracing_2 == 0)
                            <header class="widget-header"><br>
                                <h4 class="widget-title">
                                    @foreach ($list_bagian->where('id', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $bagian)
                                        <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                    @endforeach
                                </h4>
                            </header>
                            <hr class="widget-separator">
                            
                                <div class="container">
                                    <form action="{{ url('store-form-II') }}" method="post">
                                    @csrf
                                    <input name="id_mahasiswa" value="{{ $mahasiswa->id }}" type="hidden">

                                    @foreach ($list_soal->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5')->whereNotNull('tipe') as $soal)
                                        <div
                                            class="form-group @if ($soal->tipe != 0) tipe-{{ $soal->tipe }} @endif">

                                            <input name="id_soal" value="{{ $soal->id }}" class="form-control"
                                                type="hidden">
                                            <input name="id_bagian" value="{{ $soal->bagian->id }}" class="form-control"
                                                type="hidden">

                                            <div class="col-lg-12 news_posts news_post_top d-flex flex-column ">
                                                <div class="news_posts"> <br>
                                                    <div class="news_post_top d-flex flex-column flex-sm-row">
                                                        <div class="news_post_date_container">
                                                            <div
                                                                class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                                                <div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="news_post_title_container">

                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @if ($loop->first)
                                                            @php $i = 0 @endphp
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $key => $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        @if ($jawaban->soal->text == 0)
                                                                            <input type="radio"
                                                                                onchange="ganti_tipe('{{ $i = $i + 1 }}')"
                                                                                name="jawaban[{{ $soal->id }}]"
                                                                                value="{{ $jawaban->id }}"
                                                                                class="form-check-input">
                                                                            <label>{{ $jawaban->jawaban }}</label>
                                                                        @endif

                                                                        @foreach(range(1,11) as $item_jawaban)
                                                                        @if ($jawaban->soal->text == $item_jawaban)
                                                                            <input type="input" name="jawaban_{{ $item_jawaban }}"
                                                                                class="form-control item-jawaban">
                                                                        @endif
                                                                    @endforeach
                                                                        

                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        @if ($jawaban->soal->text == 0)
                                                                            <input type="radio"
                                                                                name="jawaban[{{ $soal->id }}]"
                                                                                value="{{ $jawaban->id }}"
                                                                                class="form-check-input input-radio-type">
                                                                            <label>{{ $jawaban->jawaban }}</label>
                                                                        @endif

                                                                        @foreach(range(1,11) as $item_jawaban)
                                                                            @if ($jawaban->soal->text == $item_jawaban)
                                                                                <input type="input" name="jawaban_{{ $item_jawaban }}"
                                                                                    class="form-control item-jawaban">
                                                                            @endif
                                                                        @endforeach

                                                                        
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="form-group">
                                        <button class="btn btn-primary text-white btn-center" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini? Pengisian Hanya Bisa di Lakukan Sekali')">
                                            <i class="fa fa-save"></i>
                                            Simpan
                                        </button>
                                    </div>
                                    </form>
                                </div>
                        @endif
                    </div>

                    

                    @if ($mahasiswa->status_tracing_2 == 1)
                        <div class="alert alert-success alert-block text-center">
                            <p style="font-family: roboto; font-size: 40px;">Terima Kasih Anda Telah Melakukan Survei</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @push('script')
        <script>
            function ganti_tipe(tipe) {
                $(".tipe-1").addClass('hide')
                $(".tipe-2").addClass('hide')
                $(".tipe-3").addClass('hide')
                $(".tipe-4").addClass('hide')
                if (tipe) $(".tipe-" + tipe).removeClass("hide")

                $(".item-jawaban").val("")
                $(".input-radio-type").prop("checked", false)
            }

            ganti_tipe();
        </script>
    @endpush

@endsection
