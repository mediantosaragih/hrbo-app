<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Divisi;


class DivisiController extends Controller
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

    public function Create(Request $request){
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        Divisi::create($data_divisi);

        return redirect('divisi');
    }

    // public function DetailDataKaryawan($general_karyawan_id){
    //     $detail_karyawan = Employee::where('general_karyawan_id', $general_karyawan_id)->get();
        
    //     return view('main/employee/detail_data')->with('detail_karyawan', $detail_karyawan);
    // }
}
