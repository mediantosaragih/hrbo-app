<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Divisi;


class DivisiControllers extends Controller
{
    //

    // public function index(){
    //     $data_divisi = DB::table('general_divisi')->orderBy('id', 'asc')->get();

    //     return view('main/divisi/divisi', ['data_divisi' => $data_divisi]);
    // }

    public function index()
    {
        $title = "Divisi";
        $data_divisi = Divisi::all();
        return view ('main/divisi/divisi', [
            'data_divisi' => $data_divisi
        ], compact('title'));
    }

    public function tambahDivisi(Request $request){
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        Divisi::create($data_divisi);

        return redirect('divisi');
    }

    public function edit($name_divisi){
        $detail_divisi = Divisi::where('name_divisi', $name_divisi)->get();
        
        return view('main/divisi/detail')->with('detail_divisi', $detail_divisi);
    }

    public function update(Request $request){
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        DB::table('general_divisi')->where('name_divisi', $data_divisi['name_divisi'])->update($data_divisi);
        
        return redirect('divisi');

    }

    public function destroy(Request $request)
    {
        $name_divisi = $request -> name_divisi;

        DB::table('general_divisi')->where('name_divisi', $name_divisi)->delete();
        
        return redirect('divisi');
    }

    // public function DetailDataKaryawan($general_karyawan_id){
    //     $detail_karyawan = Employee::where('general_karyawan_id', $general_karyawan_id)->get();
        
    //     return view('main/employee/detail_data')->with('detail_karyawan', $detail_karyawan);
    // }
}
