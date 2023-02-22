@extends('template.home')
@section('title', 'Pedoman Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => ' Pedoman',
    ])
    @include('section.menu')
    <br><br>


@endsection
