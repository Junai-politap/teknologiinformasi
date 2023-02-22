<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Survei extends Model
{

	protected $table = "survei";


    function handleUploadFile()
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "akreditasi";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }
    } 

}
