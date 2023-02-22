<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;


class VisiMisiController extends Controller
{
    public function index()
    {
        $data['list_visimisi'] = Visimisi::all();
        return view('admin.visimisi.index', $data);
    }

    public function store(Request $request)
    {
        $visimisi = New Visimisi;
        $visimisi->label = request('label');
        $visimisi->isi = request('isi');
        $visimisi->save();
        return redirect('page-visi-misi')->with('success', 'Data Berhasil di Simpan');
    }

    public function update(Request $request, $id)
    {
        $visimisi = Visimisi::find($id);
        $visimisi->label = request('label');
        $visimisi->isi = request('isi');
        $visimisi->save();
        return redirect('page-visi-misi')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Visimisi::destroy($id);

        return redirect('page-visi-misi')->with('error', 'Data Berhasil di Hapus');
    }
}
