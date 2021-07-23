@extends('layout.v_template')
@section('title', 'Edit Profil')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <form method="POST" action="{{ route('user.edit_profil')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group row">
                                <label class="col-lg-2">Nama User</label>
                                <div class="col-lg-6">
                                    <input name="name" class="form-control" value="{{ $profil->name}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" >Foto</label>
                                <div class="col-lg-6">
                                    <input type="file" name="foto" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="old_password" class="col-lg-2 control-label">Password Lama</label>
                                <div class="col-lg-6">
                                    <input type="password" name="old_password" class="form-control" placeholder="Masukkan password lama anda">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-6">
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password baru anda">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label">Konfirmasi Password</label>
                                <div class="col-lg-6">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password">
                                </div>
                            </div>
                            <a href="{{ route('home') }}" style="margin-left: 10px" class="btn btn-warning float-right">
                                <i class="fas fa-undo"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">
                                <i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
