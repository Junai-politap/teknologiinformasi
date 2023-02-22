<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Mahasiswa;
use App\Models\TracerStudy;
use App\Models\Tracer;


class BagianController extends Controller
{
    public function index()
    {
        $data['list_bagian'] = Bagian::all();

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();
        return view('admin.bagian.index', $data);
    }

    public function store(Request $request)
    {
        $bagian = New Bagian;
        $bagian->nama = request('nama');
        $bagian->title = request('title');
        $bagian->save();
        return redirect('page-form')->with('success', 'Data Berhasil di Simpan');

    }

    public function detail($id)
    {
        $data['list_soal'] =Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        $data['bagian'] = Bagian::find($id);

        return view('admin.bagian.detail', $data);
    }

    public function update($id)
    {
        $bagian = Bagian::find($id);
        $bagian->nama = request('nama');
        $bagian->title = request('title');
        $bagian->save();
        return redirect('page-form')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Bagian::destroy($id);

        return redirect('page-form')->with('error', 'Data Berhasil di Hapus');
    }

    public function hasil()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();

        return view('admin.bagian.hasil', $data);
    }

    public function show($id)
    {
        $data['list_tracer_study'] = TracerStudy::all();
        $data['list_tracer'] = Tracer::all();
        $data['mahasiswa'] = Mahasiswa::find($id);
        return view('admin.bagian.show', $data);
    }
}
