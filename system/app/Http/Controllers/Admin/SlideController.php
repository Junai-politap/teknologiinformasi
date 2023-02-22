<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slide;

use Illuminate\Http\Request;

class SlideController extends Controller
{

    public function index(){
        $data['list_slide'] = Slide::all();
        return view('admin.slide.index', $data);
    }

    public function store()
    {
        $slide = New Slide;
        $slide->title = request('title');
        $slide->handleUploadSlide();
        $slide->save();

        return redirect('page-slide')->with('success', 'Data Berhasil di Simpan');
    }

    public function show($id)
    {
        $data['slide'] = Slide::find($id);
        return view('admin.slide.show', $data);
    }

    public function edit($id)
    {
        $data['slide'] = Slide::find($id);
        return view('admin.slide.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->title = request('title');
        $slide->handleUploadSlide();
        return redirect('page-slide')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Slide::destroy($id);

        return redirect('page-slide')->with('error', 'Data Berhasil di Simpan');
    }
}
