<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;


class TugasAkhir extends Model
{

	protected $table = "tugas_akhir";
	
 
    function handleUploadFileTA()
    {
        if (request()->hasFile('file_pdf')) {
            $file_pdf = request()->file('file_pdf');
            $destination = "ta";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_pdf->extension();
            $url = $file_pdf->storeAs($destination, $filename);
            $this->file_pdf = "app/" . $url;
            $this->save();

        }
    }

}
