<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengepul;
use App\Desa;
use Intervention\Image\Image;

class PengepulController extends Controller
{
    public function fp(){ 
        $a = Desa::all();
        return view('admin.form_pengepul')->with('a', $a);
    }
    public function tambah(Request $request){
      
        $this->validate($request, [
            'gb' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'idd' => 'required',
            'lt' => 'required',
            'la' => 'required',
            'desk' => 'required'
            ]);
// dd($request->all());
       if($request->hasFile('gb')){
            $gambar = $request->file('gb');
            $filename = time().'.'. $gambar->getClientOriginalExtension();
            // \Image::make($gambar)->resize(300,300)->save(public_path('/public/gambar/'. $filename));
             $gambar->move(public_path('/public/gambar/'), $filename);
        }
        $data = array(
          'nama_pengepul' => $request->nama,
          'id_desa'=> $request->idd,
          'longitude'=> $request->lt,
          'latitude'=> $request->la,
          'alamat'=>$request->alamat,
          'deskripsi'=> $request->desk,
          'foto'=> $filename
        );
        $save = Pengepul::create($data);
       return redirect()->to('tanitani/admin/data_pengepul');
    }
    public function tampil(){
        $a = Pengepul::All();
        $desa = Desa::All();
        return view('admin.data_pengepul',compact('a','desa'));
    }
    public function tampil_semua(){
        $a = Pengepul::All();
        $desa = Desa::All();
        return view('petani.semua_pengepul',compact('a','desa'));
    }
    public function daftar($id){
        $a = Pengepul::where($id)->get();
        return view('admin.data_pengepul', ['a' => $a]);
    }
    public function hapus($id){
        $a = Pengepul::find($id);
        $a->delete();  
        return redirect()->to('tanitani/admin/data_pengepul');
    }
    public function edit($id){
        $a = Pengepul::find($id);
        $desa = Desa::All();
        // print_r($a);
        return view('admin.edit_pengepul', compact('a','desa'));
        
        
    }
    public function update(Request $request, $id ){
      if($request->hasFile('gb')){
            $gambar = $request->file('gb');
            $filename = time().'.'. $gambar->getClientOriginalExtension();
            // \Image::make($gambar)->resize(300,300)->save(public_path('/public/gambar/'. $filename));
             $gambar->move(public_path('/public/gambar/'), $filename);
        }
        
        $a = Pengepul::find($id);
        $a->nama_pengepul=$request->nama;
        $a->id_desa=$request->idd;
        $a->longitude=$request->lt;
        $a->latitude=$request->la;
        $a->alamat=$request->alamat;
        $a->deskripsi=$request->desk;
        $a->foto = $filename;
        $a->save();
        return redirect()->to('tanitani/admin/data_pengepul');
    }

}
