@extends('template.home')

@section('content')
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Tracer Study Teknologi Informasi</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                
                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Tracer Study<br> Dosen</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>
                                
                            </p>                           
                            <a class="readmore" href="{{ url('login') }}"> Start of Tracer</a>    
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Tracer Study<br> Mitra</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>
                                
                            </p>                           
                            <a class="readmore" href="{{ url('login') }}"> Start of Tracer</a>    
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Tracer Study<br> Alumni</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>
                                
                            </p>                           
                            <a class="readmore" href="{{ url('login') }}"> Start of Tracer</a>    
                        </div>
                    </div>
                </div>
               
            </div>
        </div>    
    </section>
@endsection
