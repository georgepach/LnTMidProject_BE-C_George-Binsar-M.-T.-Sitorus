<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nama;

class NamaController extends Controller
{
    public function viewcreateform(){
        return view('addbook');
    }

    public function createnama(Request $request){
        Nama::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
        ]);
        return redirect('/');
    }

    public function view(){
        $nama = Nama::all();
        return view('welcome')->with('semuanama', $nama);

    }

    public function edit($id){
        $namaz = Nama::findOrFail($id);
        return view('update')->with('nama', $namaz);
    }

    public function update ($id, Request $request){
        $namaz = Nama::findOrFail($id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,            
        ]);
        return redirect('/');
    }
    public function delete($id){
        $namaz = Nama::destroy($id);
        return redirect('/');
    }
}
