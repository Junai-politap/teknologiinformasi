<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\JenisFasilitas;


class Fasilitas extends Model
{

	protected $table = "fasilitas";
	
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "fasilitas";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }    

    function Galeri_fasilitas(){
		return $this->belongsTo('\App\Models\Galeri_fasilitas', 'id');
	}

    
    function Video(){
		return $this->belongsTo('\App\Models\Video', 'id');
	}

    function JenisFasilitas(){
		return $this->belongsTo(JenisFasilitas::class, 'id_jenis_fasilitas');
	}

}
