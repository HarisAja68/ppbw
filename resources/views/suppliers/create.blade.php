@extends('layout.v_template')
@section('title', 'Tambah Data Suppliers')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Suppliers</h3>
        </div>
        <form action="{{ url('suppliers')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Id Suppliers</label>
                    <input name="kode" class="form-control" value="{{ old('kode')}}" placeholder="Silahkan isi kode barang" >
                    @foreach ($errors->get('kode') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama suppliers</label>
                    <input name="nama" class="form-control" value="{{ old('nama')}}" placeholder="Silahkan isi nama suppliers" >
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama barang</label>
                    <input name="barang" class="form-control" value="{{ old('barang')}}" placeholder="Silahkan isi Nama Barang" >
                    @foreach ($errors->get('barang') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input name="alamat" class="form-control" value="{{ old('alamat')}}" placeholder="Silahkan isi Alamat" >
                    @foreach ($errors->get('alamat') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>NO Handphone</label>
                    <input name="no_hp" class="form-control"  value="{{ old('no_hp')}}" placeholder="Silahkan isi No Handphone" >
                    @foreach ($errors->get('no_hp') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
<div class="col-md-6">

@endsection
