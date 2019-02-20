<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

use App\Desa;
use App\Admin2;


class AdminController extends Controller
{
    //
    public function fd(){
    	$a = Desa::all();
    return view('admin.form_desa', ['ab'=> $a]);
    }
    public function index(){
        $a = Desa::all();
    return view('admin.index', ['ab'=> $a]);
    }
    public function tambah(Request $request){
        $a = new Desa;
        $this->validate($request, ['nama'=>'required|unique:desas']);
        $a->nama = $request->nama;
        $a->save();
        

        return redirect()->to('tanitani/admin');
    }
    public function tampil($id){
        $a = Desa::all();
    	return view('admin.data_desa',['ab' => $a]);
    }
    public function edit($id){
        $a = Desa::find($id);
        return view('admin.edit_desa')->with('ab', $a);
        
    }
    public function update(Request $request, $id){
        $a = Desa::find($id);
        $this->validate($request, ['nama'=>'required']);
        $a->nama = $request->nama;
        $a->save();

        return redirect()->to('tanitani/admin');
    }
    public function hapus($id){
        $a = Desa::find($id);
        $a->delete();
        return redirect()->to('tanitani/admin')->with('success', 'Data berhasil terhapus');
    }
    public function h(){
        return view('admin.default_admin');
    }
    public function d(){
        $a = Desa::all();
        return view('admin.data_desa')->with('ab', $a);
    }
    public function daftar($id){

        return view('admin.daftar_pengepul');
    }
    public function log(){
        return view('admin.login');
    }

}   
