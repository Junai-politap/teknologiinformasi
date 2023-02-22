<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Jenis_pedoman extends Model
{

	protected $table = "jenis_pedoman";
	
    function Pedoman(){
		return $this->belongsTo('\App\Models\Tracer\Pedoman', 'id');
	}

}
