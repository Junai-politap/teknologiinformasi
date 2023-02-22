<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survei;

class SurveiController extends Controller
{
    
    public function index()
    {
        $data['list_survei'] = Survei::orderBy('id', 'DESC')->get();

        return view('admin.survei.index', $data);
    }

    public function store(Request $request)
    {
        $survei = New Survei;
        $survei->judul = request('judul');
        $survei->jenis_survei = request('jenis_survei');
        $survei->handleUploadFile();
        $survei->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    
    public function show(Survei $survei)
    {
        $data['survei'] = $survei;

        return view('admin.survei.show', $data);
    }

    
    public function edit(Survei $survei)
    {
        $data['survei'] = $survei;
        return view('admin.survei.edit', $data);
    }

   
    public function update(Survei $survei)
    {
        $survei->judul = request('judul');
        $survei->jenis_survei = request('jenis_survei');
        $survei->handleUploadFile();
        $survei->save();

        return redirect('page-survei')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($survei)
    {
        Survei::destroy($survei);

        return back()->with('error', 'Data Berhasil Dihapus');
    }
}
