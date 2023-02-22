@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    <div class="card card-solid">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-md-12">
                        <img src="{{ url("public/$berita->gambar") }}" class="product-image" alt="Product Image"
                            style="object-fit: cover; position: static; width: 100%; height: 80%;">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 style="color: black; font-family: roboto; font-size: 22px;">{{ $berita->nama_berita }}</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <hr>
                    <p style="color: black; font-family: roboto; font-size: 22px;">
                        {!! nl2br($berita->detail) !!}
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
