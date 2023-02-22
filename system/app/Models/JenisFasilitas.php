<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Fasilitas;


class JenisFasilitas extends Model
{

	protected $table = "jenis_fasilitas";

	function Fasilitas(){
		return $this->belongsTo(Fasilitas::class, 'id');
	}
}
