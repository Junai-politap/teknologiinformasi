@extends('template.home')
@section('title', 'Visi Misi Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Visi & Misi',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <div class="approach-content-box">
                <div class="row">
                    @foreach ($list_visimisi as $visimisi)
                        <div class="col-xl-12">
                            <div class="text">

                            </div>
                            <div class="accordion-holder style-one">
                                <article class="accordion">
                                    <div class="acc-btn active">
                                        <div class="toggle-icon"><span class="icon-layers"></span></div>
                                        <h3>{{ $visimisi->label }}</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="inner">
                                            <p>
                                                {!! nl2br($visimisi->isi) !!}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <hr>
@endsection
