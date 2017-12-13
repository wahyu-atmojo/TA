<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Desa;


class AdminController extends Controller
{
    //
    public function index(){
    	$a = Desa::all();
    	return view('admin.index', ['ab' => $a]);
    }
    public function tambah(Request $request){
        $a = new Desa;
        $this->validate($request, ['nama'=>'required|unique:desas']);
        $a->nama = $request->nama;
        $a->save();

        return redirect()->to('tanitani/admin/data_desa');
    }
    public function tampil(){
        $a = Desa::all();
    	return view('admin.data_desa',['ab' => $a]);
    }
    public function edit($id){
        $a = Desa::find($id);
        return view('admin/data_desa' , ['ab' => $a]);
        
    }

}   
