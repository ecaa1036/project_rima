<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    function show(){
        $data['table_absensikaryawan'] = Karyawan::all();
        return view('karyawan',$data);
    }
    function add(){
        $data=[
            'action'=>url('karyawan/create'),
            'tombol'=>'simpan',
            'karyawan'=>(object)[
                'id_karyawan'=>'',
                'nama_karyawan'=>'',
                'jk'=>'',
                'tanggal'=>'',
                'keterangan'=>'',
            ],
        ];
        return view('formkaryawan',$data);
    }

  

    function create(Request $request){
        Karyawan::create([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'jk' => $request->jk,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ]);

        return redirect('karyawan');
    }

    function hapus($id){
        Karyawan::where('id_karyawan',$id)-delete();
        return redirect('karyawan');

    }
    
    function edit($id){
        $data['karyawan']= Karyawan::find($id);
        $data['action']= url('Karyawan/update').'/'.$data['table_absensikaryawan']->id_karyawan;
        $data['tombol']= 'update';
        return view('formkaryawan');
    }

    function update(Request $request){
        Karyawan::where('id_karyawan',$request->id_karyawan)->update([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'jk' => $request->jk,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ]);
        return redirect('karyawan');
    }
   
}
