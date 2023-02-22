<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Soal;


class Jawaban extends Model
{

	protected $table = "jawaban";

    function TracerStudy(){
		return $this->belongsTo(TracerStudy::class, 'id_soal');
	}

	
	function Soal(){
		return $this->belongsTo(Soal::class, 'id_soal');
	}

	
}
