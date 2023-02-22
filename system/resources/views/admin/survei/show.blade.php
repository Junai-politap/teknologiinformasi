@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                @csrf
                <div class="col-12 col-sm-12">
                    <h3 class="my-3 text-center">{{ $survei->judul }}</h3>
                    <hr>
                </div>
                <div class="col-12 col-sm-12">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <embed src="{{ url("public/$survei->file") }}" class="product-image" 
                            style="object-fit: cover; position: static; width: 100%; height: 700px;" type="application/pdf">
                    </div>

                </div>
               
            </div>
        </div>
    </div>
@endsection
