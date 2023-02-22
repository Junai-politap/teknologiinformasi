<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Slide;
use App\Models\Matakuliah;
use App\Models\Jenis_pelayanan;
use App\Models\Pelayanan;
use App\Models\Akreditasi;
use App\Models\Prodi;
use App\Models\Pegawai;
use App\Models\Pedoman;
use App\Models\Fasilitas;
use App\Models\Jenis_pedoman;
use App\Models\Visimisi;
use App\Models\Lulusan;
use App\Models\Galery_fasilitas;
use App\Models\Video;
use App\Models\JenisFasilitas;

use App\Models\Pbl;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\TugasAkhir;

use App\Models\Survei;

class HomeController extends Controller
{

    public function index()
    {

        $data['list_berita'] = Berita::orderBy('tanggal_kegiatan', 'DESC')->take(6)->get();
        $data['list_slide'] = Slide::orderBy('id', 'DESC')->get();
        $data['list_visimisi'] = Visimisi::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();
        return view('home.index', $data);
    }

    // Function Profil Prodi

    public function homeTracer()
    {
        $data['list_akreditasi'] = Akreditasi::orderBy('id', 'DESC')->get();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.tracer', $data);
    }

    // function Akademik

    public function akreditasi()
    {
        $data['list_akreditasi'] = Akreditasi::orderBy('id', 'DESC')->get();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home/akademik.akreditasi', $data);
    }



    public function kurikulum()
    {

        $data['list_matakuliah'] = Matakuliah::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home/akademik.kurikulum', $data);
    }

    // End function Profil Prodi

    // function Berita

    public function indexberita()
    {
        $data['list_berita'] = Berita::orderBy('tanggal_kegiatan', 'DESC')->get();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home/berita.index', $data);
    }

    public function showberita($id)
    {
        $data['berita'] = Berita::find($id);
        $data['list_berita'] = Berita::orderBy('tanggal_kegiatan', 'DESC')->get();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home/berita.show-berita', $data);
    }

    // End function Berita

    // function Pelayanan

    public function showpelayanan($id)
    {
        $data['list_pelayanan'] = Pelayanan::all();
        $data['jenis_pelayanan'] = Jenis_pelayanan::find($id);

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home/pelayanan.show-pelayanan', $data);
    }
    // End function Pelayanan

    // Function Fasilitas

    public function showJenisFasilitas(JenisFasilitas $jenis_fasilitas)
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_video'] = Video::all();
        $data['jenis_fasilitas'] = $jenis_fasilitas;
        $data['list_fasilitas'] = Fasilitas::all();
        $data['list_galery_fasilitas'] = Galery_fasilitas::all();
        return view('home.fasilitas.fasilitas', $data);
    }

    public function showFasilitas(Fasilitas $fasilitas)
    {

        $data['fasilitas'] = $fasilitas;
        $data['list_video'] = Video::all();
        $data['list_galery_fasilitas'] = Galery_fasilitas::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();
        return view('home.fasilitas.show', $data);
    }



    //End Function Fasilitas

    public function pimpinan()
    {

        $data['list_pegawai'] = Pegawai::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.profil.pimpinan', $data);
    }

    public function dosen()
    {

        $data['list_pegawai'] = Pegawai::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.profil.dosen', $data);
    }

    public function staff()
    {

        $data['list_pegawai'] = Pegawai::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.profil.staff', $data);
    }

    public function showPedoman(Jenis_pedoman $jenis_pedoman)
    {
        $data['jenis_pedoman'] = $jenis_pedoman;
        $data['list_pedoman'] = Pedoman::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();
        return view('home.pedoman.show-pedoman', $data);
    }
    public function akademik()
    {

        $data['list_berita'] = Berita::all();
        $data['list_pedoman'] = Pedoman::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.pedoman.akademik', $data);
    }

    public function nonakademik()
    {
        $data['list_berita'] = Berita::all();
        $data['list_pedoman'] = Pedoman::all();

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.pedoman.non-akademik', $data);
    }

    public function kerja()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_fasilitas'] = Fasilitas::all();
        return view('home.fasilitas.workspace', $data);
    }

    public function visimisi()
    {

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_visimisi'] = Visimisi::all();
        return view('home.profil.visi-misi', $data);
    }

    public function lulusan()
    {

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_lulusan'] = Lulusan::all();
        return view('home.profil.profil-lulusan', $data);
    }

    // Project

    public function pbl()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_pbl'] = Pbl::all();
        return view('home.project.pbl', $data);
    }

    public function penelitian()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_penelitian'] = Penelitian::orderBy('id', 'ASC')->get();
        $data['data_penelitian'] = Penelitian::orderBy('id', 'ASC')->get();

        $data['A'] = Penelitian::where('tahun', '2018')->count();
        $data['B'] = Penelitian::where('tahun', '2019')->count();
        $data['C'] = Penelitian::where('tahun', '2020')->count();
        $data['D'] = Penelitian::where('tahun', '2021')->count();
        $data['E'] = Penelitian::where('tahun', '2022')->count();
        return view('home.project.penelitian', $data);
    }


    public function pengabdian()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_pengabdian'] = Pengabdian::all();

        $data['A'] = Pengabdian::where('tahun', '2018')->count();
        $data['B'] = Pengabdian::where('tahun', '2019')->count();
        $data['C'] = Pengabdian::where('tahun', '2020')->count();
        $data['D'] = Pengabdian::where('tahun', '2021')->count();
        $data['E'] = Pengabdian::where('tahun', '2022')->count();
        return view('home.project.pengabdian', $data);
    }


    public function tugasAkhir()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();
        $data['list_tahun'] = tugasAkhir::all();
        $data['list_tugas_akhir'] = tugasAkhir::orderBy('nama_mahasiswa', 'ASC')->get();
        return view('home.project.tugas-akhir', $data);
    }

    // End Project

    public function survei()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        return view('home.pelayanan.survei', $data);
    }


    public function surveiMahasiswa()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_survei'] = Survei::where('jenis_survei', 'Mahasiswa')->get();
        return view('home.pelayanan.mahasiswa', $data);
    }

    public function surveiDosen()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_survei'] = Survei::where('jenis_survei', 'Tenaga Pendidik/Dosen')->get();
        return view('home.pelayanan.dosen', $data);
    }

    public function surveiTeknisi()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_jenis_fasilitas'] = JenisFasilitas::all();

        $data['list_survei'] = Survei::where('jenis_survei', 'Tenaga Pendidik/Teknisi')->get();
        return view('home.pelayanan.teknisi', $data);
    }
}
