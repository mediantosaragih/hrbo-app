@extends('layouts.app')

@section('title', 'Employee')

@section('content')
<<<<<<< Updated upstream

<div class="row">
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Data Karyawan</h1>
=======
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
>>>>>>> Stashed changes
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <a href="{{ route('tambah_data') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="tab-content card-body">
                <div class="tab-pane active" id="employee">
                    <div class="row">
                        <div class="col-md-12">
                                <form action="#" method="GET">
                                    <div class="search-form search-form--light mb-3">
                                        <input type="text" class="form-control search" placeholder="Search">
                                        <!-- <button class="btn" type="button" role="button"><i class="material-icons">search</i></button> -->
                                    </div>
                                </form>

                                <table class="table table-bordered; table-responsive" data-role="table">
                                    <thead>
                                        <tr>
                                            <th style="text-transform: uppercase; font-size:16px">NO</th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-general-karyawan-id" style="text-transform: uppercase; font-size:16px">NO ID KARYAWAN</a>
                                            </th>
                                            <th style="width: 25px;">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nama" style="text-transform: uppercase; font-size:16px">Nama</a>
                                            </th>
                                            <th style="width: 25px;">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-email" style="text-transform: uppercase; font-size:16px">Email</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-no-hp" style="text-transform: uppercase; font-size:16px">Mobile Number</a>
                                            </th>
                                            <th style="width: 25px;">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-departmen" style="text-transform: uppercase; font-size:16px">Department</a>
                                            </th>
                                            <th style="width: 25px;">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-jabatan" style="text-transform: uppercase; font-size:16px">Jabatan</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="list" id="search">
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
                                            <td style="width: 10px;" align="center">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="./detail_data">Detail</a>
                                                <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Hapus Data</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- <tr>
                                           <td>1</td>
                                           <td>12341</td>
                                           <td>Jaka Suwandi</td>
                                           <td>jaka@gmail.com</td>
                                           <td>081243546576</td>
                                           <td>Sosial</td>
                                           <td>Direktur</td>
                                        </tr>
                                        <tr>
                                           <td>2</td>
                                           <td>12342</td>
                                           <td>Kenzi Tan</td>
                                           <td>kenzi@gmail.com</td>
                                           <td>087665544332</td>
                                           <td>Pendidikan</td>
                                           <td>Staff Pendidikan</td>
                                        </tr>
                                        <tr>
                                           <td>3</td>
                                           <td>12343</td>
                                           <td>Gumilang Suharja Dion</td>
                                           <td>gum@gmail.com</td>
                                           <td>089776555444</td>
                                           <td>Agama</td>
                                           <td>Staff Agama</td>
                                        </tr>
                                        <tr>
                                           <td>4</td>
                                           <td>12344</td>
                                           <td>Hariarto Yunifid Jakob</td>
                                           <td>hari@gmail.com</td>
                                           <td>089776651223</td>
                                           <td>Pendidikan</td>
                                           <td>Staff Pendidikan</td>
                                        </tr>
                                        <tr>
                                           <td>5</td>
                                           <td>12345</td>
                                           <td>Ferdi Utama Santo</td>
                                           <td>ferdi@gmail.com</td>
                                           <td>081332244567</td>
                                           <td>Harian</td>
                                           <td>Staff Harian</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
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