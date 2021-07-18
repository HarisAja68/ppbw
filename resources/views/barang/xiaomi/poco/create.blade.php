@extends('layout.v_template')
@section('title', 'poco Page')
@section('poco_active', 'active')
@section('barang_open', 'menu-open')
@section('xiaomi_open', 'menu-open')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form poco</h3>
        </div>
        <form action="{{ url('poco')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="kode" class="form-control" value="{{ old('kode')}}" placeholder="Silahkan isi kode barang" >
                    @foreach ($errors->get('kode') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control"  value="{{ old('foto')}}">
                    @foreach ($errors->get('foto') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama Handphone</label>
                    <input name="nama" class="form-control" value="{{ old('nama')}}" placeholder="Silahkan isi nama handphone" >
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga')}}" placeholder="Silahkan isi Harga" >
                    @foreach ($errors->get('harga') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input name="stok" class="form-control" value="{{ old('stok')}}" placeholder="Silahkan isi stok" >
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
<div class="col-md-6">
@endsection
