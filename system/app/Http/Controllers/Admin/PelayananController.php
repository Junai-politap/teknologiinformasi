<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jenis_pelayanan;
use App\Models\Pelayanan;


class PelayananController extends Controller
{

    public function index(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_pelayanan'] = Pelayanan::all();
        return view('admin/pelayanan.index', $data);
    }


    public function storejenis(){

        $jenis_pelayanan = New Jenis_pelayanan;
        $jenis_pelayanan->nama_jenis_pelayanan = request('nama_jenis_pelayanan');
        $jenis_pelayanan->save();

        return redirect('page-pelayanan')->with('success', 'Data Berhasil di Simpan');

    }

    public function storepelayanan(){

        $pelayanan = New Pelayanan;
        $pelayanan->id_jenis_pelayanan = request('id_jenis_pelayanan');
        $pelayanan->nama_pelayanan = request('nama_pelayanan');
        $pelayanan->detail = request('detail');
        $pelayanan->handleUploadFile();
        $pelayanan->save();

        return redirect('page-pelayanan')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['pelayanan'] = Pelayanan::find($id);
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        return view('admin.pelayanan.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $pelayanan = Pelayanan::find($id);
        $pelayanan->id_jenis_pelayanan = request('id_jenis_pelayanan');
        $pelayanan->nama_pelayanan = request('nama_pelayanan');
        $pelayanan->detail = request('detail');
        $pelayanan->handleUploadFile();
        $pelayanan->save();

        return redirect('page-pelayanan')->with('success', 'Data Berhasil di Simpan');
    }


    public function destroy($id)
    {
        $pelayanan = Pelayanan::find($id);
        $pelayanan->delete();

        $jenis_pelayanan = Jenis_pelayanan::find($id);
        $jenis_pelayanan->delete();

        return redirect('page-pelayanan')->with('error', 'Data Berhasil di Hapus');

    }
}
