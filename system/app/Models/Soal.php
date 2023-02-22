<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Jawaban;


class Soal extends Model
{

	protected $table = "soal";

	function Bagian(){
		return $this->belongsTo(Bagian::class, 'id_bagian');
	}

    function Jawaban(){
		return $this->belongsTo(Jawaban::class, 'id');
	}

	function TracerStudy(){
		return $this->belongsTo(TracerStudy::class, 'id');
	}
}
