<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;


class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

    public function store(Request $request)
    {
        $pegawai = New Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nik = request('nik');
        $pegawai->nama_lengkap = request('nama_lengkap');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jabatan = request('jabatan');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->bidang_keahlian = request('bidang_keahlian');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->alamat = request('alamat');
        $pegawai->hp = request('hp');
        $pegawai->email = request('email');
        $pegawai->handleUploadFoto();
        $pegawai->save();
        return redirect('page-pegawai')->with('success', 'Data Berhasil di Simpan');

    }

    public function show($id)
    {
        $data['pegawai'] = Pegawai::find($id);
        return view('admin.pegawai.show', $data);
    }

    public function edit($id)
    {
        $data['pegawai'] = Pegawai::find($id);

        return view('admin.pegawai.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nip = request('nip');
        $pegawai->nik = request('nik');
        $pegawai->nama_lengkap = request('nama_lengkap');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jabatan = request('jabatan');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->bidang_keahlian = request('bidang_keahlian');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->alamat = request('alamat');
        $pegawai->hp = request('hp');
        $pegawai->email = request('email');
        $pegawai->handleUploadFoto();
        $pegawai->save();
        return redirect('page-pegawai')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);

        return redirect('page-pegawai')->with('error', 'Data Berhasil di Hapus');
    }
}
