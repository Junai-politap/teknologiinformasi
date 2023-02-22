<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();
        return view('admin.berita.index', $data);
    }

    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->nama_berita = request('nama_berita');
        $berita->detail = request('detail');
        $berita->tanggal_kegiatan = request('tanggal_kegiatan');
        $berita->status = 1;
        $berita->handleUploadGambarBerita();
        $berita->save();
        return redirect('page-berita')->with('success', 'Data Berhasil di Simpan');
    }

    public function show($id)
    {
        $data['berita'] = Berita::find($id);
        return view('admin.berita.show', $data);
    }

    public function edit($id)
    {
        $data['berita'] = Berita::find($id);

        return view('admin.berita.edit', $data);
    }

    public function update($id)
    {
        $berita = Berita::find($id);
        $berita->nama_berita = request('nama_berita');
        $berita->detail = request('detail');
        $berita->tanggal_kegiatan = request('tanggal_kegiatan');
        $berita->handleUploadGambarBerita();
        $berita->save();
        return redirect('page-berita')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Berita::destroy($id);

        return redirect('page-berita')->with('error', 'Data Berhasil di Hapus');
    }

    public function arsip(Berita $berita)
    {
        $berita->status = 2;
        $berita->save();

        return back()->with('success', 'Berita Berhasil Di Arsipkan');
    }

    public function post(Berita $berita)
    {
        $berita->status = 1;
        $berita->save();

        return back()->with('success', 'Berita Berhasil Di Post');
    }
}
