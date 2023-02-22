<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MasterMahasiswaController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\PedomanController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\FasilitasGaleryController;
use App\Http\Controllers\Admin\TracerStudiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KurikulimController;
use App\Http\Controllers\Admin\MatakuliahController;
use App\Http\Controllers\Admin\PelayananController;
use App\Http\Controllers\Admin\SilabusController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\AkreditasiController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\LulusanController;

use App\Http\Controllers\Admin\SurveiController;

use App\Http\Controllers\Admin\PblController;
use App\Http\Controllers\Admin\TugasAkhirController;
use App\Http\Controllers\Admin\PengabdianController;
use App\Http\Controllers\Admin\PenelitianController;

use App\Http\Controllers\Admin\BagianController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\JawabanController;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;

use App\Models\Pelayanan;

// Route::get('/', function () {
//     return view('template/admin');
// });

Route::group(['middleware' => 'auth'], function () {

    Route::get('page-admin', [AdminController::class, 'index']);

    Route::get('page-mahasiswa', [MasterMahasiswaController::class, 'index']);
    Route::post('store-mahasiswa', [MasterMahasiswaController::class, 'store']);
    Route::get('/show-mahasiswa/{id}', [MasterMahasiswaController::class, 'show']);
    Route::get('/edit-mahasiswa/{id}', [MasterMahasiswaController::class, 'edit']);
    Route::put('/update-mahasiswa/{id}', [MasterMahasiswaController::class, 'update']);
    Route::get('/delete-mahasiswa/{id}', [MasterMahasiswaController::class, 'destroy']);

    Route::get('page-pegawai', [PegawaiController::class, 'index']);
    Route::post('store-pegawai', [PegawaiController::class, 'store']);
    Route::get('/show-pegawai/{id}', [PegawaiController::class, 'show']);
    Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit']);
    Route::put('/update-pegawai/{id}', [PegawaiController::class, 'update']);
    Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy']);

    Route::get('page-visi-misi', [VisiMisiController::class, 'index']);
    Route::post('store-visi-misi', [VisiMisiController::class, 'store']);
    Route::put('/update-visi-misi/{id}', [VisiMisiController::class, 'update']);
    Route::get('/delete-visi-misi/{id}', [VisiMisiController::class, 'destroy']);

    Route::get('page-lulusan', [LulusanController::class, 'index']);
    Route::post('store-lulusan', [LulusanController::class, 'store']);
    Route::put('/update-lulusan/{id}', [LulusanController::class, 'update']);
    Route::get('/delete-lulusan/{id}', [LulusanController::class, 'destroy']);

    Route::get('page-kurikulum', [KurikulimController::class, 'index']);
    Route::post('store-mata-kuliah', [KurikulimController::class, 'store']);
    Route::get('edit-mata-kuliah/{id}', [KurikulimController::class, 'edit']);
    Route::put('/update-mata-kuliah/{id}', [KurikulimController::class, 'update']);
    Route::get('/delete-mata-kuliah/{id}', [KurikulimController::class, 'destroy']);


    Route::get('page-pelayanan', [PelayananController::class, 'index']);
    Route::post('storejenis', [PelayananController::class, 'storejenis']);
    Route::post('storepelayanan', [PelayananController::class, 'storepelayanan']);
    Route::get('/show/{id}', [PelayananController::class, 'show']);
    Route::get('edit/{id}', [PelayananController::class, 'edit']);
    Route::put('/update-pelayanan/{id}', [PelayananController::class, 'update']);
    Route::get('/delete/{id}', [PelayananController::class, 'destroy']);

    Route::get('page-berita', [BeritaController::class, 'index']);
    Route::post('store-berita', [BeritaController::class, 'store']);
    Route::get('/show-berita/{id}', [BeritaController::class, 'show']);
    Route::get('/edit-berita/{id}', [BeritaController::class, 'edit']);
    Route::put('/update-berita/{id}', [BeritaController::class, 'update']);
    Route::put('/arsip-berita/{berita}', [BeritaController::class, 'arsip']);
    Route::put('/post-berita/{berita}', [BeritaController::class, 'post']);
    Route::get('/delete-berita/{id}', [BeritaController::class, 'destroy']);


    Route::get('page-slide', [SlideController::class, 'index']);
    Route::post('store-slide', [SlideController::class, 'store']);
    Route::get('/show-slide/{id}', [SlideController::class, 'show']);
    Route::get('/edit-slide/{id}', [SlideController::class, 'edit']);
    Route::put('/update-slide/{id}', [SlideController::class, 'update']);
    Route::get('/delete-slide/{id}', [SlideController::class, 'destroy']);


    Route::get('page-akreditasi', [AkreditasiController::class, 'index']);
    Route::post('store-akreditasi', [AkreditasiController::class, 'store']);
    Route::get('/show-akreditasi/{id}', [AkreditasiController::class, 'show']);
    Route::get('/edit-akreditasi/{id}', [AkreditasiController::class, 'edit']);
    Route::put('/update-akreditasi/{id}', [AkreditasiController::class, 'update']);
    Route::get('/delete-akreditasi/{id}', [AkreditasiController::class, 'destroy']);

    Route::get('page-mahasiswa', [MasterMahasiswaController::class, 'index']);
    Route::get('create', [MasterMahasiswaController::class, 'create']);
    Route::post('store-mahasiswa', [MasterMahasiswaController::class, 'store']);
    Route::get('/show-mahasiswa/{id}', [MasterMahasiswaController::class, 'show']);
    Route::get('/edit-mahasiswa/{id}', [MasterMahasiswaController::class, 'edit']);
    Route::put('/update-mahasiswa/{id}', [MasterMahasiswaController::class, 'update']);
    Route::get('/delete-mahasiswa/{id}', [MasterMahasiswaController::class, 'destroy']);

    Route::get('page-prodi', [ProdiController::class, 'index']);
    Route::post('store-prodi', [ProdiController::class, 'store']);
    Route::get('/edit-prodi/{id}', [ProdiController::class, 'edit']);
    Route::put('/update-prodi/{id}', [ProdiController::class, 'update']);
    Route::get('/delete-prodi/{id}', [ProdiController::class, 'destroy']);

    Route::get('page-tracer', [TracerStudiController::class, 'index']);

    Route::get('page-fasilitas', [FasilitasController::class, 'index']);
    Route::post('store-fasilitas', [FasilitasController::class, 'store']);
    Route::get('show-fasilitas/{fasilitas}', [FasilitasController::class, 'show']);
    Route::get('/edit-fasilitas/{id}', [FasilitasController::class, 'edit']);
    Route::put('/update-fasilitas/{id}', [FasilitasController::class, 'update']);
    Route::get('/delete-fasilitas/{id}', [FasilitasController::class, 'destroy']);

    Route::post('store-jenis-fasilitas', [FasilitasController::class, 'storeJenis']);

    Route::get('/delete-galery-fasilitas/{id}', [FasilitasGaleryController::class, 'destroy']);
    Route::get('/delete-video/{id}', [FasilitasGaleryController::class, 'destroyVideo']);

    Route::post('store-galery', [FasilitasGaleryController::class, 'store']);
    Route::post('store-video', [FasilitasGaleryController::class, 'videoStore']);

    Route::get('page-form', [BagianController::class, 'index']);
    Route::post('store-form', [BagianController::class, 'store']);
    Route::get('/detail/{id}', [BagianController::class, 'detail']);
    Route::put('/update-form/{id}', [BagianController::class, 'update']);
    Route::get('/delete-form/{id}', [BagianController::class, 'destroy']);
    Route::get('hasil-survey', [BagianController::class, 'hasil']);
    Route::get('show/{id}', [BagianController::class, 'show']);


    Route::get('page-soal', [SoalController::class, 'index']);
    Route::post('store-soal', [SoalController::class, 'store']);
    Route::get('/edit-soal/{id}', [SoalController::class, 'edit']);
    Route::put('/update-soal/{soal}', [SoalController::class, 'update']);
    Route::get('/delete-soal/{id}', [SoalController::class, 'destroy']);

    Route::post('store-jawaban', [JawabanController::class, 'store']);
    Route::put('/update-jawaban/{jawaban}', [JawabanController::class, 'update']);

    Route::post('store-jenis-pedoman', [PedomanController::class, 'pedomanStore']);
    Route::get('show-jenis-pedoman/{jenis_pedoman}', [PedomanController::class, 'pedomanShow']);
    Route::get('edit-jenis-pedoman/{jenis_pedoman}', [PedomanController::class, 'pedomanEdit']);
    Route::put('update-jenis-pedoman/{jenis_pedoman', [PedomanController::class, 'pedomanUpdate']);

    Route::get('page-pedoman', [PedomanController::class, 'index']);
    Route::post('store-pedoman', [PedomanController::class, 'store']);
    Route::get('/edit-pedoman/{id}', [PedomanController::class, 'edit']);
    Route::put('/update-pedoman/{id}', [PedomanController::class, 'update']);
    Route::get('/delete-pedoman/{id}', [PedomanController::class, 'destroy']);


    Route::get('page-pbl', [PblController::class, 'index']);
    Route::post('store-pbl', [PblController::class, 'store']);
    Route::put('/update-pbl/{pbl}', [PblController::class, 'update']);
    Route::get('/delete-pbl/{pbl}', [PblController::class, 'destroy']);

    Route::get('page-penelitian', [PenelitianController::class, 'index']);
    Route::post('store-penelitian', [PenelitianController::class, 'store']);
    Route::put('/update-penelitian/{penelitian}', [PenelitianController::class, 'update']);
    Route::get('/delete-penelitian/{penelitian}', [PenelitianController::class, 'destroy']);

    Route::get('page-pengabdian', [PengabdianController::class, 'index']);
    Route::post('store-pengabdian', [PengabdianController::class, 'store']);
    Route::put('/update-pengabdian/{pengabdian}', [PengabdianController::class, 'update']);
    Route::get('/delete-pengabdian/{pengabdian}', [PengabdianController::class, 'destroy']);

    Route::get('page-survei', [SurveiController::class, 'index']);
    Route::post('store-survei', [SurveiController::class, 'store']);
    Route::get('/show-survei/{survei}', [SurveiController::class, 'show']);
    Route::get('/edit-survei/{survei}', [SurveiController::class, 'edit']);
    Route::put('/update-survei/{survei}', [SurveiController::class, 'update']);
    Route::get('/delete-survei/{survei}', [SurveiController::class, 'destroy']);

    Route::get('page-tugas-akhir', [TugasAkhirController::class, 'index']);
    Route::post('store-tugas-akhir', [TugasAkhirController::class, 'store']);
    Route::get('/show-tugas-akhir/{id}', [TugasAkhirController::class, 'show']);
    Route::get('/edit-tugas-akhir/{tugas_akhir}', [TugasAkhirController::class, 'edit']);
    Route::put('/update-tugas-akhir/{tugas_akhir}', [TugasAkhirController::class, 'update']);
    Route::get('/delete-tugas-akhir/{tugas_akhir}', [TugasAkhirController::class, 'destroy']);
});

Route::group(['middleware' => 'auth:mahasiswa'], function () {

    Route::get('mahasiswa-page', [MahasiswaController::class, 'index']);
    Route::get('profil', [MahasiswaController::class, 'profil']);
    Route::put('update-profil/{id}', [MahasiswaController::class, 'update']);


    Route::get('tracer-study', [MahasiswaController::class, 'tracer']);
    Route::get('tracer-study-form-ii', [MahasiswaController::class, 'formTwo']);
    Route::get('tracer-study-form-iii', [MahasiswaController::class, 'form3']);
    Route::get('tracer-study-form-iv', [MahasiswaController::class, 'form4']);
    Route::get('tracer-study-form-v', [MahasiswaController::class, 'form5']);


    Route::post('store-form-I', [MahasiswaController::class, 'tracerForm_I']);
    Route::post('store-form-II', [MahasiswaController::class, 'tracerForm_II']);
    Route::post('store-form-III', [MahasiswaController::class, 'tracerForm_III']);
    Route::post('store-form-IV', [MahasiswaController::class, 'tracerForm_IV']);
    Route::post('store-form-V', [MahasiswaController::class, 'tracerForm_V']);
});



Route::get('/', [HomeController::class, 'index']);
Route::get('prodi', [HomeController::class, 'prodi']);
Route::get('profil-dosen', [HomeController::class, 'dosen']);
Route::get('profil-pimpinan', [HomeController::class, 'pimpinan']);
Route::get('profil-staff', [HomeController::class, 'staff']);
Route::get('profil-lulusan', [HomeController::class, 'lulusan']);
Route::get('visi-misi', [HomeController::class, 'visimisi']);

Route::get('akreditasi', [HomeController::class, 'akreditasi']);
Route::get('kurikulum', [HomeController::class, 'kurikulum']);

Route::get('berita', [HomeController::class, 'indexberita']);
Route::get('berita-show/{id}', [HomeController::class, 'showberita']);

Route::get('/show-pelayanan/{id}', [HomeController::class, 'showpelayanan']);


Route::get('fasilitas/{jenis_fasilitas}', [HomeController::class, 'showJenisFasilitas']);
Route::get('detail-fasilitas/{fasilitas}', [HomeController::class, 'showFasilitas']);

Route::get('pedoman-akademik', [HomeController::class, 'akademik']);
Route::get('pedoman-non-akademik', [HomeController::class, 'nonakademik']);

Route::get('/show-pedoman/{jenis_pedoman}', [HomeController::class, 'showPedoman']);

Route::get('tracer', [HomeController::class, 'homeTracer']);

Route::get('project/pbl', [HomeController::class, 'pbl']);
Route::get('project/tugas-akhir', [HomeController::class, 'tugasAkhir']);
Route::get('project/penelitian', [HomeController::class, 'penelitian']);
Route::get('project/pengabdian', [HomeController::class, 'pengabdian']);

Route::get('pelayanan/survei', [HomeController::class, 'survei']);

Route::get('pelayanan/survei-kepuasan-dosen', [HomeController::class, 'surveiDosen']);
Route::get('pelayanan/survei-kepuasan-teknisi', [HomeController::class, 'surveiTeknisi']);
Route::get('pelayanan/survei-kepuasan-mahasiswa', [HomeController::class, 'surveiMahasiswa']);





Route::get('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);
