@extends('layouts.main')

@section('title', 'Tambah Data')

@section('content')

<div class="row">
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__container">
            <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                <div class="flex mb-2 mb-sm-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Divisi</h4>
                        </div>
                        <div class="card-body">
                            <form action="./create" method="post">
                                @csrf
                                <div class="container-fluid px-4">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="text">

                                        </div>
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