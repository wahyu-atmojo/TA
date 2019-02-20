<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin2;
use App\Desa;

class LoginController extends Controller
{
    public function log(){
    	return view('login');
    }

    public function loginPost(Request $request){
        $a = Desa::All();
        $username = $request->nama;
        $password = $request->password;
        $data = Admin2::where(['nama' => $request->username , 'password' => $request->password])->first();
            // dd($data);
        if(count($data) > 0){ //apakah username tersebut ada atau tidak
                // echo ('masuk sebagai '. $username);
                return view('admin.index', ['ab'=> $a]);
       		}

	        else{
	            return view('login');
	        }
    }
}
