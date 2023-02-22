<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\TracerStudy;
use App\Models\Tracer;
use Auth;

class MahasiswaController extends Controller
{

    public function index(){
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        return view('mahasiswa.index', $data);
    }

    public function profil()
    {
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.profil', $data);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('username');
        $mahasiswa->confirmasi_pass = request('confirmasi_pass');
        $mahasiswa->password = request('confirmasi_pass');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();

        return redirect('mahasiswa-page');
    }

    public function tracer(Request $request)
    {
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = $list_soal = Soal::all();
        $data['list_jawaban'] = $list_jawaban = Jawaban::all();
        

    
        return view('mahasiswa.tracer-study', $data);
        
    }

    public function formTwo(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();

        


        return view('mahasiswa.tracer-study-form-ii', $data);

    }

    public function form3(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();



        return view('mahasiswa.tracer-study-form-iii', $data);

    }

    public function form4(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::orderBy('id', 'DESC')->get();


        return view('mahasiswa.tracer-study-form-iv', $data);

    }

    public function form5(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::orderBy('id', 'DESC')->get();


        return view('mahasiswa.tracer-study-form-v', $data);

    }

    public function tracerForm_I(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $id_soal) {

        $tracerstudy = New TracerStudy;
        $tracerstudy->id_mahasiswa = request('id_mahasiswa'); 
        $tracerstudy->id_bagian = request('id_bagian');
        $tracerstudy->id_soal = $id_soal;
        $tracerstudy->id_jawaban = $id_jawaban;
        
        $tracerstudy->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_II(Request $request)
    {
        
        foreach (request('jawaban') as $id_jawaban => $id_soal) {


            $tracerstudy = New TracerStudy;
            $tracerstudy->id_mahasiswa = request('id_mahasiswa'); 
            $tracerstudy->id_bagian = request('id_bagian');
            $tracerstudy->id_soal = $id_soal;
            $tracerstudy->id_jawaban = $id_jawaban;
            
            $tracerstudy->save();
    
            $id_mahasiswa = request('id_mahasiswa');
            $mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
            foreach ($mahasiswa  as $tr) {
                $tr->status_tracing_2 = 1;
                $tr->update();
            }
        }

        $tracer = New Tracer;
        $tracer->id_mahasiswa = request('id_mahasiswa'); 
        $tracer->id_bagian = request('id_bagian');
        $tracer->id_soal = '97069d29-bd4b-40c8-95a2-a13693248578';
        $tracer->id_jawaban = $id_soal;
        $tracer->jawaban_1 = request('jawaban_1');
        $tracer->jawaban_2 = request('jawaban_2');
        $tracer->jawaban_3 = request('jawaban_3');
        $tracer->jawaban_4 = request('jawaban_4');
        $tracer->jawaban_5 = request('jawaban_5');
        $tracer->jawaban_6 = request('jawaban_6');
        $tracer->jawaban_7 = request('jawaban_7');
        $tracer->jawaban_8 = request('jawaban_8');
        $tracer->jawaban_9 = request('jawaban_9');
        $tracer->jawaban_10 = request('jawaban_10');
        $tracer->jawaban_11 = request('jawaban_11');
        
        $tracer->save();

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }

    public function tracerForm_III(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $id_soal) {

            $tracerstudy = New TracerStudy;
            $tracerstudy->id_mahasiswa = request('id_mahasiswa'); 
            $tracerstudy->id_bagian = request('id_bagian');
            $tracerstudy->id_soal = $id_soal;
            $tracerstudy->id_jawaban = $id_jawaban;
            
            $tracerstudy->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_3 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_IV(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $id_soal) {

            $tracerstudy = New TracerStudy;
            $tracerstudy->id_mahasiswa = request('id_mahasiswa'); 
            $tracerstudy->id_bagian = request('id_bagian');
            $tracerstudy->id_soal = $id_soal;
            $tracerstudy->id_jawaban = $id_jawaban;
            
            $tracerstudy->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_4 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_V(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $id_soal) {

         $tracerstudy = New TracerStudy;
            $tracerstudy->id_mahasiswa = request('id_mahasiswa'); 
            $tracerstudy->id_bagian = request('id_bagian');
            $tracerstudy->id_soal = $id_soal;
            $tracerstudy->id_jawaban = $id_jawaban;
            
            $tracerstudy->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_5 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


}
