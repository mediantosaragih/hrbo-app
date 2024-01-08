@extends('layouts.main')

@section('title', 'Detail Karyawan')

@section('content')

<div class="row">
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NO ID KARYAWAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_karyawan_id" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NOMOR KARTU AKSES</label>
                                <div class="col-sm-9">
                                    <input  name="general_nomor_kartu_akses" type="number" class="form-control" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NAMA KARYAWAN</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">FIRST NAME</label>
                                <div class="col-sm-9">
                                    <input  name="general_firstname" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">LAST NAME</label>
                                <div class="col-sm-9">
                                    <input  name="general_lastname" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">NICK NAME</label>
                                <div class="col-sm-9">
                                    <input  name="general_nickname" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input  name="general_nik" type="number" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">TEMPAT LAHIR</label>
                                <div class="col-sm-9">
                                    <input  name="general_tempat_lahir" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">TANGGAL LAHIR</label>
                                <div class="col-sm-3">
                                    <input  name="general_tanggal_lahir" type="date" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">JENIS KELAMIN</label>
                                <div class="col-sm-9">
                                    <input  name="general_jenis_kelamin" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">STATUS PERKAWINAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_status_perkawinan" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">AGAMA</label>
                                <div class="col-sm-9">
                                    <input  name="general_agama" type="text" class="form-control" required>
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">TINGGI BADAN</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input  name="general_tinggi_badan" type="number" class="form-control" required>
                                        <div class="input-group-append"> 
                                            <span class="input-group-text">CM</span>
                                        </div>
                                    </div>  
                                </div>
                            </div>                                                     
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">BERAT BADAN</label>
                                <div class="col-sm-3">
                                    <div class="input-group"> 
                                        <input  name="genaral_berat_badan" type="number" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">KG</span>
                                        </div>
                                    </div>  
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">GOLONGAN DARAH</label>
                                <div class="col-sm-3">
                                    <input  name="general_golongan_darah" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">ALAMAT SESUAI KTP</label>
                                <div class="col-sm-9">
                                    <input  name="general_alamat_ktp" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">ALAMAT DOMISILI</label>
                                <div class="col-sm-9">
                                    <input  name="general_alamat_domisili" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NPWP</label>
                                <div class="col-sm-9">
                                    <input  name="general_npwp" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NO. BPJS KETENAGAKERJAAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_bpjs_ketenagakerjaan" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NO. BPJS KESEHATAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_bpjs_kesehatan" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NO. REKENING</label>
                                <div class="col-sm-9">
                                    <input  name="general_no_rek" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">MOBILE NUMBER</label>
                                <div class="col-sm-9">
                                    <input  name="general_no_hp" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">EMAIL</label>
                                <div class="col-sm-9">
                                    <input  name="general_email" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">MEDIA SOSIAL</label>
                                <div class="col-sm-9">
                                    <input  name="general_medsos" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">UKURAN BAJU</label>
                                <div class="col-sm-3">
                                    <input  name="general_ukuran_baju" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">UKURAN CELANA</label>
                                <div class="col-sm-3">
                                    <input  name="general_ukuran_celana" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">UKURAN SEPATU</label>
                                <div class="col-sm-3">
                                    <input  name="general_ukuran_sepatu" type="text" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">BAHASA YANG DIKUASAI</label>
                                <div class="col-sm-9">
                                    <input  name="general_bahasa" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">PENDIDIKAN TERAKHIR</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">SMA/SMK/UNIVERSTAS/LAINNYA</label>
                                <div class="col-sm-9">
                                    <input  name="general_pendidikan_a" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">PROGRAM STUDI</label>
                                <div class="col-sm-9">
                                    <input  name="general_pendidikan_b" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">KETERAMPILAN KHUSUS</label>
                                <div class="col-sm-9">
                                    <input  name="general_keterampilan" type="text" class="form-control" required>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">IZIN MENGEMUDI</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">TIPE</label>
                                <div class="col-sm-9">
                                    <input  name="general_izin_tipe" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">NOMOR</label>
                                <div class="col-sm-9">
                                    <input  name="general_izin_nomor" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">MASA BERLAKU</label>
                                <div class="col-sm-3">
                                    <input  name="general_izin_masa" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NAMA KONTAK DARURAT</label>
                                <div class="col-sm-9">
                                    <input  name="general_nama_kontak_darurat" type="text" class="form-control" required>
                                </div>
                            </div>                                                  
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NOMOR HP KONTAK DARURAT</label>
                                <div class="col-sm-9">
                                    <input  name="general_nohp_kontak_darurat" type="text" class="form-control" required>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">LOKASI KERJA</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">PERUSAHAAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_lokasi_perusahaan" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">NEGARA</label>
                                <div class="col-sm-9">
                                    <input  name="general_lokasi_negara" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">SITE</label>
                                <div class="col-sm-9">
                                    <input  name="general_lokasi_site" type="text" class="form-control" required>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">DEPARTMENT</label>
                                <div class="col-sm-9">
                                    <input  name="general_department" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">RIWAYAT KONTRAK</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">JABATAN</label>
                                <div class="col-sm-9">
                                    <input  name="general_riwayat_jabatan" type="text" class="form-control" required>
                                </div>
                                <label class="col-sm-3 col-form-label form-label">FIRST JOIN</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_first_join" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">KONTRAK I</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label form-label">MULAI</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_1_mulai" type="date" class="form-control" required>
                                </div>
                                <label class="col-sm-2 col-form-label form-label">BERAKHIR</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_1_berakhir" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">KONTRAK II</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label form-label">MULAI</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_2_mulai" type="date" class="form-control" required>
                                </div>
                                <label class="col-sm-2 col-form-label form-label">BERAKHIR</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_2_berakhir" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">KONTRAK III</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label form-label">MULAI</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_3_mulai" type="date" class="form-control" required>
                                </div>
                                <label class="col-sm-2 col-form-label form-label">BERAKHIR</label>
                                <div class="col-sm-3">
                                    <input  name="general_riwayat_kontrak_3_berakhir" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">KONTRAK BERJALAN</label>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label form-label">MULAI</label>
                                <div class="col-sm-3">
                                    <input  name="general_kontrak_berjalan_mulai" type="date" class="form-control" required>
                                </div>
                                <label class="col-sm-2 col-form-label form-label">BERAKHIR</label>
                                <div class="col-sm-3">
                                    <input  name="general_kontrak_berjalan_berakhir" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">CATATAN</label>
                                <div class="col-sm-9">
                                    <textarea name="general_catatan" placeholder="" style="height: 250px; width:100%" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>                                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop