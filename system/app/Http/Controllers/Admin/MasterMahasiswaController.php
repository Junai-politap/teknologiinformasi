<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MasterMahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request)
    {
        $mahasiswa = New Mahasiswa;
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('nim');
        $mahasiswa->password = request('nim');
        $mahasiswa->confirmasi_pass = request('nim');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->tahun_masuk = request('tahun_masuk');
        $mahasiswa->tahun_lulus = request('tahun_lulus');
        $mahasiswa->ipk = request('ipk');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();
        return redirect('page-mahasiswa')->with('success', 'Data Berhasil di Simpan');

    }

    public function show($id)
    {
        $data['mahasiswa'] = Mahasiswa::find($id);
        return view('admin.mahasiswa.show', $data);
    }

    public function edit($id)
    {
        $data['mahasiswa'] = Mahasiswa::find($id);

        return view('admin.mahasiswa.edit', $data);
    }

    public function update($id)
    {   
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('username');
        $mahasiswa->password = request('confirmasi_pass');
        $mahasiswa->confirmasi_pass = request('confirmasi_pass');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->tahun_masuk = request('tahun_masuk');
        $mahasiswa->tahun_lulus = request('tahun_lulus');
        $mahasiswa->ipk = request('ipk');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();
        return redirect('page-mahasiswa')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);

        return redirect('page-mahasiswa')->with('error', 'Data Berhasil di Hapus');
    }
}
