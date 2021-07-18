@extends('layout.v_template')
@section('title', 'Edit Data Karyawan')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Karyawan</h3>
        </div>
        <form method="POST" action="{{ url('karyawan/'.$model->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control" value="{{ $model->nip}}" readonly>
                    @foreach ($errors->get('nip') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input name="nama" class="form-control" value="{{ $model->nama}}">
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ $model->alamat}}">
                    @foreach ($errors->get('alamat') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input name="no_hp" class="form-control" value="{{ $model->no_hp}}">
                    @foreach ($errors->get('no_hp') as $msg)
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
                    <img src="{{ asset('images/foto_karyawan/'.$model->foto)}}" width="100px"/>
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
</div>
@endsection
