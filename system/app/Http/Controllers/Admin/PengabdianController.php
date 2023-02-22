<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengabdian;

class PengabdianController extends Controller
{
   
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::all();

        return view('admin.project.pengabdian.index', $data);
    }


    
    public function store(Request $request)
    {
        $pengabdian = New Pengabdian;
        $pengabdian->judul = request('judul');
        $pengabdian->ketua = request('ketua');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun = request('tahun');
        $pengabdian->save();

        return back()->with('success', 'Data Pengabdian Berhasil Disimpan');
    }


    
    public function update(Pengabdian $pengabdian)
    {
        $pengabdian->judul = request('judul');
        $pengabdian->ketua = request('ketua');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun = request('tahun');
        $pengabdian->save();

        return back()->with('success', 'Data Pengabdian Berhasil Disimpan');
    }

    
    public function destroy($pengabdian)
    {
        Pengabdian::destroy($pengabdian);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
