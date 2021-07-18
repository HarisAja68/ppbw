@extends('layout.v_template')
@section('title', 'Edit Data Suppliers')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Suppliers</h3>
        </div>
        <form method="POST" action="{{ url('suppliers/'.$model->id)}}" >
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Id Suppliers</label>
                    <input name="kode" class="form-control" value="{{ $model->kode}}" readonly>
                    @foreach ($errors->get('kode') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama Suppliers</label>
                    <input name="nama" class="form-control" value="{{ $model->nama}}">
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama barang</label>
                    <input name="barang" class="form-control" value="{{ $model->barang}}">
                    @foreach ($errors->get('barang') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input name="alamat" class="form-control" value="{{ $model->alamat}}">
                    @foreach ($errors->get('alamat') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>NO Handphone</label>
                    <input name="no_hp" class="form-control" value="{{ $model->no_hp}}">
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
</div>
@endsection
