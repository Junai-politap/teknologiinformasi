<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pbl;

class PblController extends Controller
{

    public function index()
    {
        $data['list_pbl'] = Pbl::all();

        return view('admin.project.pbl.index', $data);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $pbl = new Pbl;
        $pbl->judul = request('judul');
        $pbl->tahun_ajar = request('tahun_ajar');
        $pbl->jenis = request('jenis');
        $pbl->link = request('link');
        $pbl->link_landing = request('link_landing');
        $pbl->handleUploadFoto();
        $pbl->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function update(Pbl $pbl)
    {
        $pbl->judul = request('judul');
        $pbl->tahun_ajar = request('tahun_ajar');
        $pbl->jenis = request('jenis');
        $pbl->link = request('link');
        $pbl->link_landing = request('link_landing');
        $pbl->handleUploadFoto();
        $pbl->save();

        return back()->with('success', 'Data Berhasil Diedit');
    }


    public function destroy($pbl)
    {
        Pbl::destroy($pbl);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
