@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kehadiran Hari Ini</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Kehadiran Hari Ini</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-5">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Karyawan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-5">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Hadir</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-5">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Izin</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-5">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Sakit</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-plus-square"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-5">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Alpha</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-ban"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid px-4">
                <div class="card shadow mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header mb-2">
                            <a>Data Kehadiran Hari Ini</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NO ID KARYAWAN</th>
                                            <th>Nama</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="">
                                            <td>1</td>
                                            <td>
                                                <span class="js-lists-values-general-karyawan-id">123</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-nama">Jaka</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-date">13-1-2024</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-status">Hadir</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-keterangan">Hadir</span>
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
                                        <tr style="">
                                            <td>2</td>
                                            <td>
                                                <span class="js-lists-values-general-karyawan-id">124</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-nama">Henry</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-date">13-1-2024</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-status">Izin</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-keterangan">Memperbaiki Motor</span>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop