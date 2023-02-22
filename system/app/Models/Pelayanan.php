<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Pelayanan extends Model
{

	protected $table = "pelayanan";

    function handleUploadFile()
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "pelayanan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }
    }

    function Jenis_pelayanan(){
		return $this->belongsTo('\App\Models\Jenis_pelayanan', 'id_jenis_pelayanan');
	}

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

}
