<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{

    public function index()
    {
        $data['list_mata_kuliah'] = Matakuliah::all();

        return view('admin.matakuliah.index', $data);
    }

    public function store(Request $request)
    {
        $matakuliah = New Matakuliah;
        $matakuliah->kode = request('kode');
        $matakuliah->nama = request('nama');
        $matakuliah->semester = request('semester');
        $matakuliah->sks = request('sks');
        $matakuliah->kurikulum = request('kurikulum');
        $matakuliah->jenis_mk = request('jenis_mk');
        $matakuliah->jam_teori = request('jam_teori');
        $matakuliah->jam_praktikum = request('jam_praktikum');
        $matakuliah->tiu = request('tiu');
        $matakuliah->bahasan = request('bahasan');
        $matakuliah->save();

        return redirect('page-mata-kuliah')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['matakuliah'] = Matakuliah::find($id);
        return view('admin.matakuliah.edit', $data);
    }


    public function update(Matakuliah $matakuliah)
    {
        $matakuliah->kode = request('kode');
        $matakuliah->nama = request('nama');
        $matakuliah->semester = request('semester');
        $matakuliah->sks = request('sks');
        $matakuliah->kurikulum = request('kurikulum');
        $matakuliah->jenis_mk = request('jenis_mk');
        $matakuliah->jam_teori = request('jam_teori');
        $matakuliah->jam_praktikum = request('jam_praktikum');
        $matakuliah->tiu = request('tiu');
        $matakuliah->bahasan = request('bahasan');

        $matakuliah->save();

        return redirect('page-mata-kuliah')->with('success', 'Data Berhasil di Simpan');
    }


    public function destroy($id)
    {
        //
    }
}
