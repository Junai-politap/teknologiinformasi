<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasAkhir;

class ApiTaController extends Controller
{
    public function search($param)
    {
    	$tugas_akhir = TugasAkhirr::where(function($q) use ($param){
                $q->where('judul', 'like', "%".$param."%");
            })->get();

            $list = [];
            foreach ($tugas_akhir as $item) {
                $list[] = $item;
            }
            
            $data['list_tugas_akhir'] = collect($list);
            return view('api.bankdul_result', $data);
    }
}
