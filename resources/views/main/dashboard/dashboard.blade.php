@extends('layouts.aps')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
<h2 class="mt-4">Dashboard</h2>
<div class="row">
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No ID Karyawan</th>
                                            <th>Nama</th>
                                            <th></th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

@stop