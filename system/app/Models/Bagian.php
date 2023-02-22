<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;


class Bagian extends Model
{

	protected $table = "bagian";

	function Soal(){
		return $this->belongsTo('\App\Models\Soal', 'id');
	}

}
