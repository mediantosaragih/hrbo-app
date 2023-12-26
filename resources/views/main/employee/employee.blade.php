@extends('layouts.app')

@section('title', 'Employee')

@section('content')

<div class="row">
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Data Karyawan</h1>
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
                        <div class="col-lg-12">
                            <div class=''>
                                <form action="#" method="GET">
                                    <div class="search-form search-form--light mb-3">
                                        <input type="text" class="form-control search" placeholder="Search">
                                        <!-- <button class="btn" type="button" role="button"><i class="material-icons">search</i></button> -->
                                    </div>
                                </form>

                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th style="text-transform: uppercase; font-size:16px">NO</th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nama-karyawan" style="text-transform: uppercase; font-size:16px">NIP</a>
                                            </th>
                                            <th style="width: 25px;">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nik" style="text-transform: uppercase; font-size:16px">NAMA KARYAWAN</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-jabatan" style="text-transform: uppercase; font-size:16px">NO HP/TELP</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-divisi" style="text-transform: uppercase; font-size:16px">ALAMAT</a>
                                            </th>                                         </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="list" id="search">
                                        <tr>
                                           <td>1</td>
                                           <td>12345</td>
                                           <td>Jaka Suwandi</td>
                                           <td>081243546576</td>
                                           <td>Tanggerang, Banten</td>
                                        </tr>
                                        <tr>
                                           <td>2</td>
                                           <td>12346</td>
                                           <td>Kenzi Tan</td>
                                           <td>087665544332</td>
                                           <td>Kertajati, Jawa Barat</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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