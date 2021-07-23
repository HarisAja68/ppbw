@extends('layout.v_template')
@section('title', 'Tambah Data Karyawan')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Karyawan</h3>
        </div>
        <form action="{{ url('karyawan')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control" value="{{ old('nip')}}" placeholder="Silahkan isi NIP" >
                    @foreach ($errors->get('nip') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                    @foreach ($errors->get('foto') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input name="nama" class="form-control" value="{{ old('nama')}}" placeholder="Silahkan isi nama Karyawan" >
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ old('alamat')}}" placeholder="Silahkan isi Alamat" >
                    @foreach ($errors->get('alamat') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input name="no_hp" class="form-control" value="{{ old('no_hp')}}" placeholder="Silahkan isi No Handphone" >
                    @foreach ($errors->get('no_hp') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
<div class="col-md-6">

@endsection
