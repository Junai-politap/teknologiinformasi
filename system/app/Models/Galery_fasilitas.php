<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;


class Galery_fasilitas extends Model
{

	protected $table = "galery_fasilitas";

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "galery";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }   

    function handleUploadVideo()
    {
        if (request()->hasFile('video')) {
            $video = request()->file('video');
            $destination = "video";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $video->extension();
            $url = $video->storeAs($destination, $filename);
            $this->video = "app/" . $url;
            $this->save();

        }
    }   

	function Fasilitas(){
		return $this->belongsTo('\App\Models\Fasilitas', 'id_fasilitas');
	}

}
