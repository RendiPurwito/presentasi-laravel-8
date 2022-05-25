<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pekerja;

class PekerjaController extends Controller
{
    public function index(){

        $data = pekerja::all();
        return view('datapekerja', compact('data'));
    }

    public function tambahpekerja(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        pekerja::create($request->all());
        return redirect()->route('pekerja');
    }

    public function tampilkandata($id){

        $data = pekerja::find($id);
        return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pekerja::find($id);
        $data->update($request->all());
        return redirect()->route('pekerja');
    }

    public function deletedata($id){
        $data = pekerja::find($id);
        $data->delete();
        return redirect()->route('pekerja');
    }
}
