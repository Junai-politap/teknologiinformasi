<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedoman;
use App\Models\Jenis_pedoman;


class PedomanController extends Controller
{
    public function index()
    {
        $data['list_pedoman'] = Pedoman::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('admin.pedoman.index', $data);
    }

    public function pedomanStore()
    {
        $jenis_pedoman = new Jenis_pedoman;
        $jenis_pedoman->nama_jenis_pedoman = request('nama_jenis_pedoman');
        $jenis_pedoman->save();
        return back()->with('success', 'Data Berhasil di Simpan');
    }


    public function pedomanShow(Jenis_pedoman $jenis_pedoman)
    {
        $data['jenis_pedoman'] = $jenis_pedoman;
        $data['list_pedoman'] = Pedoman::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('admin.pedoman.show', $data);
    }

    public function pedomanUpdate(Jenis_pedoman $jenis_pedoman)
    {
        $jenis_pedoman->nama_jenis_pedoman = request('nama_jenis_pedoman');
        $jenis_pedoman->save();
        return back()->with('success', 'Data Berhasil di Simpan');
    }


    public function store(Request $request)
    {
        $pedoman = new Pedoman;
        $pedoman->nama_pedoman = request('nama_pedoman');
        $pedoman->id_jenis_pedoman = request('id_jenis_pedoman');
        $pedoman->handleUploadFilePdf();
        $pedoman->handleUploadFileWord();
        $pedoman->save();
        return redirect('page-pedoman')->with('success', 'Data Berhasil di Simpan');
    }

    public function show($id)
    {
        $data['pedoman'] = Pedoman::find($id);

        return view('admin.pedoman.show', $data);
    }


    public function update($id)
    {
        $pedoman = Pedoman::find($id);
        $pedoman->nama_pedoman = request('nama_pedoman');
        $pedoman->id_jenis_pedoman = request('id_jenis_pedoman');
        $pedoman->handleUploadFilePdf();
        $pedoman->handleUploadFileWord();
        $pedoman->save();
        return redirect('page-pedoman')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Pedoman::destroy($id);

        return redirect('page-pedoman')->with('error', 'Data Berhasil di Hapus');
    }
}
