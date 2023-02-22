<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Jawaban;
use App\Models\Soal;
use App\Models\Bagian;
use App\Models\Mahasiswa;


class TracerStudy extends Model
{

	protected $table = "tracer_study";


	function Jawaban(){
		return $this->belongsTo(Jawaban::class, 'id_soal');
	}

	function Soal(){
		return $this->belongsTo(Soal::class, 'id_jawaban');
	}

	function Bagian(){
		return $this->belongsTo(Bagian::class, 'id_bagian');
	}


	function Mahasiswa(){
		return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
	}
	
}
