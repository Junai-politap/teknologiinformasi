@extends('template.home')
@section('title', 'Fasilitas Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Detail Fasilitas',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Ruangan {{ $fasilitas->nama_fasilitas }}</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="car">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        @foreach ($list_video as $video)
                            @if ($video->id_fasilitas == $fasilitas->id)
                                {!! nl2br($video->link) !!}
                            @endif
                        @endforeach
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <p>
                            <img src="{{ url("public/$fasilitas->foto") }}" alt="Image" class="img-fluid"
                                id="img-container">
                        </p>

                    </div>
                    <div class="col-lg-5 ml-auto">
                        <div class="row">
                            @foreach ($list_galery_fasilitas as $galery_fasilitas)
                                @if ($galery_fasilitas->id_fasilitas == $fasilitas->id)
                                    <div class="col-4 mb-5 product-image-thumb">
                                        <img src="{{ url("public/$galery_fasilitas->foto") }}" alt=""
                                            class="img-fluid"
                                            onclick="changePicture('{{ url("public/$galery_fasilitas->foto") }}')" style="object-fit: cover; position: static; width: 100%; height: 100%;">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ml-auto">
                        <h2 class="section-title-underline mb-2">
                            <span>{{ $fasilitas->nama_fasilitas }}</span>
                        </h2>
                        <p><strong class="text-black d-block">

                                {!! nl2br($fasilitas->detail_fasilitas) !!}
                            </strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function changePicture(url) {
            $("#img-container").attr("src", url);
        }
    </script>


@endsection
