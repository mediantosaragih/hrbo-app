@extends('layout.main')

@section('title', 'Sallary')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
<div class="container-fluid px-4">
    <h2 class="mt-4">Sallary</h2>
    <div class="card shadow mb-4">
        
        <div class="card shadow mb-4">
            <div class="card-header mb-2">
                <i class="fas fa-table me-1"></i>
                    DataTable Example
                <div class="">
                    <a href="{{ route('tambah_data') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Karyawan</th>
                                <th>Departemen</th>
                                <th>Jenis Slip Gaji</th>
                                <th>Gaji Pokok</th>
                                <th>Net Sallary</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_sallary as $sallary)
                            <tr style="">
                                <td>{{$loop->iteration}}</td>
                                    <td>
                                        <span class="js-lists-values-general-karyawan-id">{{$sallary->nama_karyawan}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$sallary->departemen}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-email">{{$sallary->jenis_slip_gaji}}</span>
                                    </td>
                                    <td>
                                        <span class="js-lists-values-no-hp">{{$sallary->gaji_pokok}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-department">{{$sallary->net_sallary}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-jabatan">{{$sallary->status}}</span>
                                    </td>
                                    <td style="width: 10px;" align="center" >
                                        <a href="">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                        </span>
                                        </a>
                                        <a href="">
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
</section>
</div>

@stop