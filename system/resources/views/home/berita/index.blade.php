@extends('template.home')
@section('title', 'Berita Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Berita',
    ])
    @include('section.menu')
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="row">
                @foreach ($list_berita as $berita)
                @if ($berita->status == 1)
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <div class="single-blog-post">
                                <a href="{{ url("berita-show/$berita->id") }}">
                                    <div class="img-holder">
                                        <img src="{{ url("public/$berita->gambar") }}" style="object-fit: cover; position: static; width: 100%; height: 500px;">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <p>
                                                        {{ $berita->nama_berita }}
                                                    </p>
                                                    <a href="{{ url("berita-show/$berita->id") }}">Read More<span class="icon-arrows"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3 class="blog-title">

                                        </h3>
                                        <div class="meta-box">
                                            <ul class="meta-info">
                                                <li><a href="{{ url("berita-show/$berita->id") }}"><span class="icon-time thm-clr"></span>
                                                {{date("d-M-Y", strtotime($berita->tanggal_kegiatan)) }}
                                            </a>
                                        </li>

                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
