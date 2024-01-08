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

@stop