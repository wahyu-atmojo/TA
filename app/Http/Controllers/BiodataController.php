<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder; 

class BiodataController extends Controller
{
    //
    public function index(){
    
    $a = Desa::all();	
	return view('petani.index',['ab'=> $a]); 
    }

    public function daftar(){

    	return view('petani.daftar_pengepul');

    	

    }
    public function tambah(Request $request){
    	$post = new Desa;
       
        $this->validate($request, ['nama'=>'required|unique:posts']);
        $post->id = $request->id;
        $post->nama = $request->nama;
        
        $post->save();

        return redirect()->to('tanitani/petani')->with('success','Data berhasil ditambahkan');
    }
}
