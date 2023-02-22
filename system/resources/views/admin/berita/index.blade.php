@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Berita</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Berita</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Berita</th>
                        {{-- <th class="text-center">Gambar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_berita as $berita)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    @if ($berita->status == 1)
                                        <form action="{{ url('arsip-berita', $berita->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-secondary"><span class="fa fa-archive"></span>
                                                Arsip</button>
                                        </form>
                                    @endif

                                    @if ($berita->status == 2)
                                        <form action="{{ url('post-berita', $berita->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-success"><span class="fa fa-sticky-note"></span>
                                                Post</button>
                                        </form>
                                    @endif
                                    <a href="{{ url("show-berita/$berita->id") }}" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="{{ url("edit-berita/$berita->id") }}" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-berita/$berita->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center">{{ $berita->nama_berita }}</td>
                            {{-- <td class="text-center">
                                <img src="{{ url("public/$berita->gambar") }}" alt=""
                                    style="width: 50%; height: 100%; border-radius: 20px;">
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Berita</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-berita') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Berita</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Berita" name="nama_berita">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Detail Berita</label>
                                <div class="col-sm-9">
                                    <textarea name="detail" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" placeholder="Tanggal Kegiatan"
                                        name="tanggal_kegiatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Gambar</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="custom-file-input" type="file" name="gambar"
                                        accept=".jpg, .png, .jpeg">
                                    <label class="custom-file-label">Gambar Berita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
