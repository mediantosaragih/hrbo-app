<?php

namespace App\Http\Imports;
// use Carbon\Carbon;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

// use Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;


class DataKaryawanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['general_firstname'])){
            return NULL;
        }
    
        return new Employee([
            'general_karyawan_id' => $row['general_karyawan_id'],
            'general_nomor_kartu_akses' => $row['general_nomor_kartu_akses'],
            'general_firstname' => $row['general_firstname'],
            'general_lastname' => $row['general_lastname'],
            'general_nickname' => $row['general_nickname'],
            'general_nik' => $row['general_nik'],
            'general_tempat_lahir' => $row['general_tempat_lahir'],
            'general_tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_tanggal_lahir']),
            'general_jenis_kelamin' => $row['general_jenis_kelamin'],
            'general_status_perkawinan' => $row['general_status_perkawinan'],
            'general_agama' => $row['general_agama'],
            'general_tinggi_badan' => $row['general_tinggi_badan'],
            'genaral_berat_badan' => $row['genaral_berat_badan'],
            'general_golongan_darah' => $row['general_golongan_darah'],
            'general_alamat_ktp' => $row['general_alamat_ktp'],
            'general_alamat_domisili' => $row['general_alamat_domisili'],
            'general_npwp' => $row['general_npwp'],
            'general_bpjs_ketenagakerjaan' => $row['general_bpjs_ketenagakerjaan'],
            'general_bpjs_kesehatan' => $row['general_bpjs_kesehatan'],
            'general_no_rek' => $row['general_no_rek'],
            'general_no_hp' => $row['general_no_hp'],
            'general_email' => $row['general_email'],
            'general_medsos' => $row['general_medsos'],
            'general_ukuran_baju' => $row['general_ukuran_baju'],
            'general_ukuran_celana' => $row['general_ukuran_celana'],
            'general_ukuran_sepatu' => $row['general_ukuran_sepatu'],
            'general_bahasa' => $row['general_bahasa'],
            'general_pendidikan_a' => $row['general_pendidikan_a'],
            'general_pendidikan_b' => $row['general_pendidikan_b'],
            'general_keterampilan' => $row['general_keterampilan'],
            'general_izin_tipe' => $row['general_izin_tipe'],
            'general_izin_nomor' => $row['general_izin_nomor'],
            'general_izin_masa' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_izin_masa']),
            'general_nama_kontak_darurat' => $row['general_nama_kontak_darurat'],
            'general_nohp_kontak_darurat' => $row['general_nohp_kontak_darurat'],
            'general_lokasi_perusahaan' => $row['general_lokasi_perusahaan'],
            'general_lokasi_negara' => $row['general_lokasi_negara'],
            'general_lokasi_site' => $row['general_lokasi_site'],
            'general_department' => $row['general_department'],
            'general_riwayat_jabatan' => $row['general_riwayat_jabatan'],
            'general_riwayat_first_join' => $row['general_riwayat_first_join'],
            'general_riwayat_kontrak_1_mulai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_1_mulai']),
            'general_riwayat_kontrak_1_berakhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_1_berakhir']),
            'general_riwayat_kontrak_2_mulai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_2_mulai']),
            'general_riwayat_kontrak_2_berakhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_2_berakhir']),
            'general_riwayat_kontrak_3_mulai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_3_mulai']),
            'general_riwayat_kontrak_3_berakhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_riwayat_kontrak_3_berakhir']),
            'general_kontrak_berjalan_mulai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_kontrak_berjalan_mulai']),
            'general_kontrak_berjalan_berakhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['general_kontrak_berjalan_berakhir']),
            'general_catatan' => $row['general_catatan'],
        ]);
    }
}
