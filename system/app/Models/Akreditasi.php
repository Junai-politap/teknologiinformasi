<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Akreditasi extends Model
{

	protected $table = "akreditasi";
	
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

    function handleUploadFilePdf()
    {
        if (request()->hasFile('pdf')) {
            $pdf = request()->file('pdf');
            $destination = "akreditasi";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $pdf->extension();
            $url = $pdf->storeAs($destination, $filename);
            $this->pdf = "app/" . $url;
            $this->save();

        }
    } 

}
