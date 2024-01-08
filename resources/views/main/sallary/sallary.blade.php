@extends('layouts.main')

@section('title', 'Sallary')

@section('content')

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
                                <th>Nama </th>
                                <th>Departemen</th>
                                <th>Jabatan</th>
                                <th>Gaji</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop