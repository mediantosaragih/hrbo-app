@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Divisi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Detail Divisi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Divisi</h4>
            </div>
            @foreach($detail_divisi as $detail_divisi)
            <div class="card-body">
                <form action="{{route('divisi.update')}}" method="post">
                    
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Detail Divisi</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">ID DIVISI</label>
                                <input  name="divisi_id" value="{{$detail_divisi->divisi_id}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">NAMA DIVISI</label>
                                <input  name="name_divisi" value="{{$detail_divisi->name_divisi}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">JUMLAH DIVISI</label>
                                <input  name="jumlah" value="{{$detail_divisi->jumlah}}" type="text" class="form-control" required>
                            </div><br>
                            <div class="col-md-8">
                                <label></label>
                                <div class="" style="d-flex justify-content-center align-items-center text-align:center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>   
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</div>

@stop