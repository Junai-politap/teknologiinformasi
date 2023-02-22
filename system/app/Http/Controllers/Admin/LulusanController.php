<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lulusan;


class LulusanController extends Controller
{
    public function index()
    {
        $data['list_lulusan'] = Lulusan::all();
        return view('admin.lulusan.index', $data);
    }

    public function store()
    {
        $lulusan = New Lulusan;
        $lulusan->label = request('label');
        $lulusan->isi = request('isi');
        $lulusan->save();
        return redirect('page-lulusan')->with('success', 'Data Berhasil di Simpan');
    }

    public function update(Request $request, $id)
    {
        $lulusan = Lulusan::find($id);
        $lulusan->label = request('label');
        $lulusan->isi = request('isi');
        $lulusan->save();
        return redirect('page-lulusan')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Lulusan::destroy($id);

        return redirect('page-lulusan')->with('error', 'Data Berhasil di Hapus');
    }
}
