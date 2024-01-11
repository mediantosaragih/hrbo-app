@extends('layouts.main')

@section('title', 'Employee')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">Employee</h2>
    <div class="card shadow mb-4">
        
        <div class="card shadow mb-4">
            <div class="card-header mb-2">
                <div class="row">
                        <a href="{{ route('tambah_data') }}" class="btn btn-success">Tambah Data</a>
                        <a style="color:white">|</a>
                        <a class="btn btn-success" data-toggle="modal" data-target="#ImportExcel" class="btn btn-outline-secondary">Import Data</a> 
                        <a style="color:white">|</a>
                        <a href="{{ route('tambah_data') }}" class="btn btn-success">Export Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NO ID KARYAWAN</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Departemen</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_karyawan as $karyawan)
                            <tr style="">
                                <td>{{$loop->iteration}}</td>
                                    <td>
                                        <span class="js-lists-values-general-karyawan-id">{{$karyawan->general_karyawan_id}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$karyawan->general_firstname}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-email">{{$karyawan->general_email}}</span>
                                    </td>
                                    <td>
                                        <span class="js-lists-values-no-hp">{{$karyawan->general_no_hp}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-department">{{$karyawan->general_department}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-jabatan">{{$karyawan->general_riwayat_jabatan}}</span>
                                    </td>
                                    <td style="width: 10px;" align="center" >
                                        <a href="./detail_data/{{$karyawan->general_karyawan_id}}">
                                            <span class="icon">
                                                <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                            </span>
                                        </a>
                                        <a href="./hapus_data_karyawan/{{$karyawan->general_karyawan_id}}">
                                            <span class="icon">
                                                <i class="fas fa-trash-alt"></i> <!-- Icon tong sampah (trash) -->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('importExel')
        <div class="modal fade" id="ImportExcel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Import Excel</h4>
                        <button type="button"
                                class="close text-white"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="./tambah_data/import_excel" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="qtitle" class="col-form-label form-label col-md-3">Pilih File Excel</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="file_excel_data_karyawan" type="file" id="file_excel" class="custom-file-input" accept=".xlsx" required>
                                        <label for="file_excel" class="custom-file-label">Pilih FIle</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-success">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop