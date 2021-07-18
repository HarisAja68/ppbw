@extends('layout.v_template')
@section('title', 'Edit Data Redmi')
@section('redmi_active', 'active')
@section('barang_open', 'menu-open')
@section('xiaomi_open', 'menu-open')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Redmi</h3>
        </div>
        <form method="POST" action="{{ url('redmi/'.$model->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="kode" class="form-control" value="{{ $model->kode}}" readonly>
                    @foreach ($errors->get('kode') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" >
                    <br>
                    @foreach ($errors->get('foto') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                    <img src="{{ asset('images/foto_redmi/'.$model->foto)}}" width="100px"/>
                </div>
                <div class="form-group">
                    <label>Nama Handphone</label>
                    <input name="nama" class="form-control" value="{{ $model->nama}}">
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ $model->harga}}">
                    @foreach ($errors->get('harga') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input name="stok" class="form-control" value="{{ $model->stok}}">
                    @foreach ($errors->get('stok') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
</div>
@endsection
