<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use App\Models\Model;
use App\Models\TracerStudy;


class Mahasiswa extends ModelAuthenticate
{

	public $table = "ms_mahasiswa";
	
 
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "mahasiswa";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function TracerStudy(){
		return $this->belongsTo(TracerStudy::class, 'id');
	}

  
    

}
