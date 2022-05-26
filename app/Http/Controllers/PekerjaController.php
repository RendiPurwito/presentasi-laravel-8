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
        return view('tambahdatapekerja');
    }

    public function insertdatapekerja(Request $request){
        pekerja::create($request->all());
        return redirect()->route('pekerja');
    }

    public function tampilkandatapekerja($id){

        $data = pekerja::find($id);
        return view('editdatapekerja', compact('data'));
    }

    public function updatedatapekerja(Request $request, $id){
        $data = pekerja::find($id);
        $data->update($request->all());
        return redirect()->route('pekerja');
    }

    public function deletedatapekerja($id){
        $data = pekerja::find($id);
        $data->delete();
        return redirect()->route('pekerja');
    }
}
