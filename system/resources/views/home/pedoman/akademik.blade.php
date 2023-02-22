@extends('template.home')
@section('title', 'Pedoman - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => ' Pedoman Akademik',
    ])
    @include('section.menu')

    <section id="single-service-area">
        <div class="pattern-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        @php
                            $no = 1;
                        @endphp
                        <div class="planning-strategies-content">
                            @foreach ($list_pedoman as $pedoman)
                                <li>

                                    <p style="color: black">{{ $no++ }}.
                                        <a style="color: black"
                                            href="{{ url("public/$pedoman->file_word") }}">{{ $pedoman->nama_pedoman }}</a>
                                        | <a style="color: black" href="{{ url("public/$pedoman->file_pdf") }}"
                                            target="_blank">File PDF</a>
                                    </p>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
