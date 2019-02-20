<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder; 
use App\Pengepul;

class BiodataController extends Controller
{
    //
    public function index(Request $request){
        // var_dump($request->search); die();
        $a = Desa::where('nama', 'like','%'.$request->search.'%')->get();
    return view('petani.index', ['ab'=> $a]);	
    }
    public function daftar($id){
        $a = Pengepul::where('id_desa', $id)->get();
    	return view('petani.daftar_pengepul', ['ab' => $a]);
    }
    public function tambah(Request $request){
    	$post = new Desa;
       
        $this->validate($request, ['nama'=>'required|unique:posts']);
        $post->id = $request->id;
        $post->nama = $request->nama;
        
        $post->save();

        return redirect()->to('tanitani/petani')->with('success','Data berhasil ditambahkan');
    }
    public function profil(){
        return view('petani.profil');
    }
    public function lokasi($id){
        $ab = Pengepul::where('id', $id)->first();
        return view('petani.data_pengepul', compact('ab'));
    }
    public function peta_semua(){
        $companyInfo=[];
        // $price = Price::all();
        $peta = Pengepul::all();
        foreach ($peta as $key ) {
            $p = $key->longitude;
            $t = $key->latitude;
            $data = array($p, $t);
            $companyInfo = (array) $companyInfo;
            array_push($companyInfo, $data);
        }
        // var_dump($companyInfo); die();
        return response()->json($companyInfo);
    }

    public function tes(){
        $ab = Pengepul::where('id',8)->first();
        return view('tes',compact('ab'));
    }
}
