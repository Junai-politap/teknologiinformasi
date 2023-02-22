<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;


class JawabanController extends Controller
{   

    public function store(Request $request)
    {
        $jawaban = New Jawaban;
        $jawaban->id_soal = request('id_soal');
        $jawaban->jawaban = request('jawaban');
        $jawaban->save();
        return back()->with('success', 'Data Berhasil di Simpan');

    }

    public function detail($id)
    {
        $data['list_soal'] =Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        $data['bagian'] = Bagian::find($id);

        return view('admin.bagian.detail', $data);
    }

    public function update($id)
    {
        $jawaban = Bagian::find($id);
        $jawaban->nama = request('nama');
        $jawaban->save();
        return redirect('page-form')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Bagian::destroy($id);

        return redirect('page-form')->with('error', 'Data Berhasil di Hapus');
    }
}
