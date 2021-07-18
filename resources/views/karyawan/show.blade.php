@extends('layout.v_template')
@section('title', 'Detail Karyawan')
@section('karyawan_active', 'active')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Detail Pegawai</h3>
        </div>
        <form method="POST" action="{{ url('suppliers/'.$model->id)}}" readonly>
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" value="{{ $model->nip}}" readonly>
            </div>
            <div class="form-group">
                <label>Nama karyawan</label>
                <input class="form-control" value="{{ $model->nama}}" readonly>
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input class="form-control" value="{{ $model->alamat}}" readonly>
            </div>
            <div class="form-group">
                <label>NO Handphone</label>
                <input class="form-control" value="{{ $model->no_hp}}" readonly>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <br>
                <img src="{{ asset('images/foto_karyawan/'.$model->foto)}}" width="100px"/>
            </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('karyawan')}}" class="btn btn-primary"><i class="fas fa-backward"></i> Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
