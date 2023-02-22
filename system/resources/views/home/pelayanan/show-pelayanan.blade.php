@extends('template.home')
@section('title', 'Pelayanan Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Pelayanan',
    ])
    @include('section.menu')
    <div class="site-section">
        <div class="container">
            <div class="row">
                @csrf
                @foreach ($list_pelayanan as $pelayanan)
                    @if ($pelayanan->id_jenis_pelayanan == $jenis_pelayanan->id)
                        <div class="col-md-8 mb-4">
                            <p>
                                <embed src="{{ url("public/$pelayanan->file") }}" type=""
                                    style="object-fit: cover; position: static; width: 100%;" height="350px">
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <h2 class="section-title-underline mb-5">
                                <span>{{ $pelayanan->nama_pelayanan }}</span>
                            </h2>

                            <p><strong class="text-black d-block"></strong></p>
                            <p><strong class="text-black d-block"> {!! nl2br($pelayanan->detail) !!}</strong> </p>

                            <a href="{{ url("public/$pelayanan->file") }}" class="btn btn-primary" target="_blank"><i
                                    class="fa fa-download"></i> Download</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        function changePicture(url) {
            $("#img-container").attr("src", url);
        }
    </script>
@endpush
