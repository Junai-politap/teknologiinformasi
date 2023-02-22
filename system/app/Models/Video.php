<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;


class Video extends Model
{

	protected $table = "video";


	function Fasilitas(){
		return $this->belongsTo('\App\Models\Fasilitas', 'id_fasilitas');
	}

}
