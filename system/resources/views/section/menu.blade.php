@section('menu')
    @foreach ($list_jenis_pelayanan as $jenis_pelayanan)

    <li><a href="{{ url("show-pelayanan/$jenis_pelayanan->id") }}">{{ $jenis_pelayanan->nama_jenis_pelayanan }}</a></li>
    @endforeach
@endsection


@section('pedoman')
    @foreach ($list_jenis_pedoman as $jenis_pedoman)
        <li><a href="{{ url("show-pedoman/$jenis_pedoman->id") }}">{{ $jenis_pedoman->nama_jenis_pedoman }}</a></li>
    @endforeach
@endsection

@section('fasilitas')
    @foreach ($list_jenis_fasilitas as $jenis_fasilitas)
        <li><a href="{{ url("fasilitas/$jenis_fasilitas->id") }}">{{ $jenis_fasilitas->nama }}</a></li>
    @endforeach
@endsection