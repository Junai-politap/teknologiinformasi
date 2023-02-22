@extends('template.mahasiswa')

@section('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA')

@section('content')
@include('section.mahasiswa')

<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix" style="height: 500px">
					<div class="pull-left">
						<h3 class="widget-title">Welcome Home </h3>
						<h2 class="text-color">{{ $mahasiswa->nama }}</h2>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp"></span>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection