<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mahasiswa;

class AuthController extends Controller
{

    public function login(){
        return View ('login');
    }


    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('page-admin');
        }

        if (auth()->guard('mahasiswa')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('mahasiswa-page');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
		auth()->guard('mahasiswa')->logout();
        return redirect('/');
    }

    function test(){
		$user= new User;
		$user->nama= 'Super Admin';
		$user->username= 'teknikinformatika2021';
		$user->password=bcrypt('teknikinformatika2021');
		$user->save();

		return "Berhasil";


	}
}
