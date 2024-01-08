@extends('layouts.aps')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
<h2 class="mt-4">Dashboard</h2>
<div class="mb-2 mb-sm-2">
    <div class="flex mb-2 mb-sm-2">
        <a href="{{ route('tambah_data') }}" class="btn btn-success">Tambah Data</a>
    </div>
</div>
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
                                            <th>Nama Divisi</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data_divisi as $divisi)
                                        <tr style="">
                                            <td>
                                                <span class="js-lists-values-general-karyawan-id">{{$divisi->divisi_id}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-nama">{{$divisi->name_divisi}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-email">{{$divisi->jumlah}}</span>
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

@stop