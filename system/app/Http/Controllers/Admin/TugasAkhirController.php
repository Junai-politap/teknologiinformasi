<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TugasAkhir;

class TugasAkhirController extends Controller
{
   
    public function index()
    {
        $data['list_tugas_akhir'] = TugasAkhir::all();

        return view('admin.project.tugas-akhir.index', $data);
    }


    public function store(Request $request)
    {
        $tugas_akhir = New TugasAkhir;
        $tugas_akhir->nim = request('nim');
        $tugas_akhir->nama_mahasiswa = request('nama_mahasiswa');
        $tugas_akhir->judul = request('judul');
        $tugas_akhir->tahun_masuk = request('tahun_masuk');
        $tugas_akhir->tahun_angkatan = request('tahun_angkatan');
        $tugas_akhir->save();

        return back()->with('success', 'Data Berhasil Di Tambahkan');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(TugasAkhir $tugas_akhir)
    {
        $data['tugas_akhir'] = $tugas_akhir;

        return view('admin.project.tugas-akhir.edit', $data);
    }

   
    public function update(TugasAkhir $tugas_akhir)
    {
        
        $tugas_akhir->nim = request('nim');
        $tugas_akhir->nama_mahasiswa = request('nama_mahasiswa');
        $tugas_akhir->judul = request('judul');
        $tugas_akhir->tahun_masuk = request('tahun_masuk');
        $tugas_akhir->tahun_angkatan = request('tahun_angkatan');
        $tugas_akhir->save();

        return redirect('page-tugas-akhir')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($tugas_akhir)
    {
        TugasAkhir::destroy($tugas_akhir);

        return back()->with('error', 'Data Berhasil di Hapus');
    }
}
