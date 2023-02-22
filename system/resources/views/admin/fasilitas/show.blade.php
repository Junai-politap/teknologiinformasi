@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')

    <div class="card card-solid">
        <div class="card-body">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <img src="{{ url("public/$fasilitas->foto") }}" class="product-image" alt="Product Image"
                            style="object-fit: cover; position: static; width: 100%; height: 80%;">
                    </div>
                    <div class="col-md-6 product-image-thumbs">
                        @foreach ($list_galery_fasilitas as $galery_fasilitas)
                            @if ($galery_fasilitas->id_fasilitas == $fasilitas->id)
                                <div class="product-image-thumb">
                                    <img src="{{ url("public/$galery_fasilitas->foto") }}"
                                        style="object-fit: cover; position: static; width: 100%; height: 100%;">
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $fasilitas->nama_fasilitas }}</h3>
                    <hr>
                    <p>
                        {!! nl2br($fasilitas->detail_fasilitas) !!}
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Tambah Gambar</h4>
                            <div class="py-2 px-3 mt-2">
                                <form action="{{ url('store-galery') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg"
                                        required>
                                    <input type="text" name="id_fasilitas" value="{{ $fasilitas->id }}" hidden>
                                    <button class="btn btn-primary mt-4"><span class="fa fa-upload"></span>
                                        Upload</button>
                                </form>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4>Link Video</h4>
                            <div class="py-2 px-3 mt-2">
                                <form action="{{ url('store-video') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <textarea name="link" class="form-control"></textarea>
                                    <input type="text" name="id_fasilitas" value="{{ $fasilitas->id }}" hidden>
                                    <button class="btn btn-primary mt-4"><span class="fa fa-upload"></span>
                                        Upload</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div><br>
            <div class="row">

                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        @foreach ($list_video as $video)
                            @if ($video->id_fasilitas == $fasilitas->id)
                                {!! nl2br($video->link) !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
