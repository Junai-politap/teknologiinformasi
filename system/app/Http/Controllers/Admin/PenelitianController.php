<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
   
    public function index()
    {
        $data['list_penelitian'] = Penelitian::orderBy('id', 'DESC')->get();

        return view('admin.project.penelitian.index', $data);
    }


    
    public function store(Request $request)
    {
        $penelitian = New Penelitian;
        $penelitian->judul = request('judul');
        $penelitian->ketua = request('ketua');
        $penelitian->anggota_dosen = request('anggota_dosen');
        $penelitian->anggota_mahasiswa = request('anggota_mahasiswa');
        $penelitian->skema = request('skema');
        $penelitian->tahun = request('tahun');
        $penelitian->save();

        return back()->with('success', 'Data Penelitian Berhasil Disimpan');
    }


    
    public function update(Penelitian $penelitian)
    {
        $penelitian->judul = request('judul');
        $penelitian->ketua = request('ketua');
        $penelitian->anggota_dosen = request('anggota_dosen');
        $penelitian->anggota_mahasiswa = request('anggota_mahasiswa');
        $penelitian->skema = request('skema');
        $penelitian->tahun = request('tahun');
        $penelitian->save();

        return back()->with('success', 'Data Penelitian Berhasil Disimpan');
    }

    
    public function destroy($penelitian)
    {
        Penelitian::destroy($penelitian);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
