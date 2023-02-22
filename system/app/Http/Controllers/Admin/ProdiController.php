<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;


class ProdiController extends Controller
{
    public function index()
    {
        $data['list_prodi'] = Prodi::all();
        return view('admin.prodi.index', $data);
    }

    public function store(Request $request)
    {
        $prodi = New Prodi;
        $prodi->nama = request('nama');
        $prodi->link = request('link');
        $prodi->save();
        return redirect('page-prodi')->with('success', 'Data Berhasil di Simpan');

    }

    public function edit($id)
    {
        $data['prodi'] = Prodi::find($id);
        return view('admin.prodi.edit', $data);
    }

    public function update($id)
    {
        $prodi = Prodi::find($id);
        $prodi->nama = request('nama'); 
        $prodi->link = request('link');
        $prodi->save();
        return redirect('page-prodi')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Prodi::destroy($id);

        return redirect('page-prodi')->with('error', 'Data Berhasil di Hapus');
    }
}
