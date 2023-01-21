<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function store(Request $request){
        Pegawai::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            'nomor_hp' => $request->nomor,
            'email' => $request->email,
        ]);

        return redirect()->route('home')->with("success", 'Berhasil menambah data');
    }

    public function edit($id){
        $pegawai = Pegawai::where('id', $id)->first();

        return view("edit", compact('pegawai'));
    }

    public function update(Request $request){
        // dd($request);
        Pegawai::where('id', $request->id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            'nomor_hp' => $request->nomor,
            'email' => $request->email,
        ]);

        return redirect()->route('home')->with("success", 'Berhasil menambah data');
    }

    public function delete($id){
        Pegawai::where('id', $id)->delete();

        return redirect()->route('home')->with("success", 'Berhasil mengupdate data');
    }
}
