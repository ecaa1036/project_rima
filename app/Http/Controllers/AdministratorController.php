<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    function show(){
        $data['table_administrator'] = Administrator::all();
        return view('administrator',$data);
    }
    function add(){
        $data=[
            'action'=>url('administrator/create'),
            'tombol'=>'simpan',
            'administrator'=>(object)[
                'id_adm'=>'',
                'nama_adm'=>'',
                'jk'=>'',
                'alamat'=>'',
            ],
        ];
        return view('formadministrator',$data);
    }

    function create(Request $request){
        Administrator::create([
            'id_adm' => $request->id_adm,
            'nama_adm' => $request->nama_adm,
            'jk' => $request->jk,
            'alamat' => $request->alamat
        ]);

        return redirect('administrator');
    }

    function hapus($id_adm){
        Administrator::where('id_adm',$id_adm)->delete();
        return redirect('administrator');

    }
    
    function edit($id_adm){
        $data['table_administrator']= Administrator::find($id_adm);
        $data['action']= url('administrator/update').'/'.$data['table_administrator']->id_adm;
        $data['tombol']= 'update';
        return view('formadministrator');
    }

    function update(Request $request){
        Administrator::where('id_adm',$request->id_adm)->update([
            // 'id_adm' => $request->id_adm,
            'nama_adm' => $request->nama_adm,
            'jk' => $request->jk,
            'alamat' => $request->alamat
        ]);
        return redirect('administrator');
    }
   
}
