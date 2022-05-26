<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $data = Siswa::all();
        return view('datasiswa', compact('data'));
    }

    public function tambahsiswa(){
        return view('tambahdatasiswa');
    }

    public function insertdatasiswa(Request $request){
        // dd($request->all());
        Siswa::create($request->all());
        return redirect()->route('siswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatasiswa($id) {
        $data = Siswa::find($id);
        return view('formeditdatasiswa', compact('data'));
    }

    public function updatedatasiswa(Request $request, $id) {
        $data = Siswa::find($id);
        $data->update($request->all());

        return redirect()->route('siswa')->with('success', 'Data Berhasil Diupdate');
    }

    public function deletedatasiswa($id){
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success', 'Data Berhasil Dihapus');
    }
}
