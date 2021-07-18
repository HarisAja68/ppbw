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
                                    @foreach ($errors->get('name') as $msg)
                                    <div class="alert alert-danger">{{$msg}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" >Foto</label>
                                <div class="col-lg-6">
                                    <input type="file" name="foto" class="form-control" >
                                    @foreach ($errors->get('foto') as $msg)
                                    <div class="alert alert-danger">{{$msg}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="old_password" class="col-lg-2 control-label">Password Lama</label>
                                <div class="col-lg-6">
                                    <input type="password" name="old_password" class="form-control"
                                    minlength="6">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-6">
                                    <input type="password" name="password" class="form-control"
                                    minlength="6">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-lg-2 control-label">Konfirmasi Password</label>
                                <div class="col-lg-6">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        data-match="#password">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <a href="{{ route('home') }}" style="margin-left: 10px" class="btn btn-warning float-right"> Kembali</a>
                            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
