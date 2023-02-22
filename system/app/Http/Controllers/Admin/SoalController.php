<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Soal;
use App\Models\Jawaban;

use Illuminate\Http\Request;

class SoalController extends Controller
{

    public function index(){

        $data['list_soal']= Soal::all();
        return view('admin.soal.index', $data);
    }

    public function store()
    {
        $soal = New Soal();
        $soal->id_bagian = request('id_bagian');
        $soal->soal = request('soal');
        $soal->save();

        return back();

    }

    public function update(Request $request, $id)
    {
        $visimisi = VisiMisi::find($id);
        $soal->id_bagian = request('id_bagian');
        $soal->soal = request('soal');
        $soal->save();
        return back()->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        $soal = Soal::find($id);
        $soal->delete();

        $jawaban = Jawaban::find($id);
        $jawaban->delete();
 
        return back()->with('error', 'Data Berhasil di Hapus');
    }

}
