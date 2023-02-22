<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Akreditasi;

use Illuminate\Http\Request;

class AkreditasiController extends Controller
{

    public function index(){

        $data['list_akreditasi']= Akreditasi::all();
        return view('admin.akreditasi.index', $data);
    }

    public function store()
    {
        $akreditasi = New Akreditasi();
        $akreditasi->nama = request('nama');
        $akreditasi->tanggal_akreditasi = request('tanggal_akreditasi');
        $akreditasi->masa_berlaku = request('masa_berlaku');
        $akreditasi->handleUploadFile();
        $akreditasi->handleUploadFilePdf();
        $akreditasi->save();

        return redirect('page-akreditasi')->with('success', 'Data Berhasil di Simpan');

    }

}
