@extends('layout.v_template')
@section('title', 'Detail Page')
@section('suppliers_active', 'active')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Detail Suppliers</h3>
        </div>
        <form method="POST" action="{{ url('suppliers/'.$model->id)}}" readonly>
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Id Suppliers</label>
                <input class="form-control" value="{{ $model->kode}}" readonly>
            </div>
            <div class="form-group">
                <label>Nama sup</label>
                <input class="form-control" value="{{ $model->nama}}" readonly>
            </div>
            <div class="form-group">
                <label>Nama barang</label>
                <input class="form-control" value="{{ $model->barang}}" readonly>
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input class="form-control" value="{{ $model->alamat}}" readonly>
            </div>
            <div class="form-group">
                <label>NO Handphone</label>
                <input class="form-control" value="{{ $model->no_hp}}" readonly>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('suppliers')}}" class="btn btn-primary"><i class="fas fa-backward"></i> Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
