<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Employee;


class SallaryController extends Controller
{
    //

    public function DataSallary(){
        $data_sallary = DB::table('general_sallary')->orderBy('id', 'asc')->get();

        return view('main/sallary/sallary', ['data_sallary' => $data_sallary]);
    }

    public function PostTambahDataKaryawan(Request $request){
        $data_karyawan = $request->only([
            'general_id',
            'general_karyawan_id',
            'general_nomor_kartu_akses',
            'general_firstname',
            'general_lastname',
            'general_nickname',
            'general_nik',
            'general_tempat_lahir',
            'general_tanggal_lahir',
            'general_jenis_kelamin',
            'general_status_perkawinan',
            'general_agama',
            'general_tinggi_badan',
            'genaral_berat_badan',
            'general_golongan_darah',
            'general_alamat_ktp',
            'general_alamat_domisili',
            'general_npwp',
            'general_bpjs_ketenagakerjaan',
            'general_bpjs_kesehatan',
            'general_no_rek',
            'general_no_hp',
            'general_email',
            'general_medsos',
            'general_ukuran_baju',
            'general_ukuran_celana',
            'general_ukuran_sepatu',
            'general_bahasa',
            'general_pendidikan_a',
            'general_pendidikan_b',
            'general_keterampilan',
            'general_izin_tipe',
            'general_izin_nomor',
            'general_izin_masa',
            'general_nama_kontak_darurat',
            'general_nohp_kontak_darurat',
            'general_lokasi_perusahaan',
            'general_lokasi_negara',
            'general_lokasi_site',
            'general_department',
            'general_riwayat_jabatan',
            'general_riwayat_first_join',
            'general_riwayat_kontrak_1_mulai',
            'general_riwayat_kontrak_1_berakhir',
            'general_riwayat_kontrak_2_mulai',
            'general_riwayat_kontrak_2_berakhir',
            'general_riwayat_kontrak_3_mulai',
            'general_riwayat_kontrak_3_berakhir',
            'general_kontrak_berjalan_mulai',
            'general_kontrak_berjalan_berakhir',
            'general_catatan',
        ]);

        Employee::create($data_karyawan);

        return redirect('employee');
    }

    public function DetailDataKaryawan($general_karyawan_id){
        $detail_karyawan = Employee::where('general_karyawan_id', $general_karyawan_id)->get();
        
        return view('main/employee/detail_data')->with('detail_karyawan', $detail_karyawan);
    }
}
