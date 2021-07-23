@extends('layout.v_template')
@section('title', 'Tambah Data user')

@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
               <div class="form-group">
                  <label class="font-weight-bold">
                     Name
                  </label>
                  <input value="{{ old('name')}}" name="name" type="text" class="form-control" placeholder="Masukkan nama" />
                    @foreach ($errors->get('name') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <div class="form-group">
                <label class="font-weight-bold">
                    Role
                 </label>
                 <select name="role" data-placeholder="Isi Role" class="custom-select w-100">
                     @foreach ($roles as $role)
                        <option value="{{ $role->id }}"> {{ $role->name }} </option>
                     @endforeach
                 </select>
               </div>
               <div class="form-group">
                  <label class="font-weight-bold">
                     Email
                  </label>
                  <input value="{{ old('email')}}" name="email" type="email" class="form-control" placeholder="masukkan email"
                     autocomplete="email" />
                    @foreach ($errors->get('email') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <div class="form-group">
                  <label class="font-weight-bold">
                     Password
                  </label>
                  <input name="password" type="password" class="form-control" placeholder="Masukkan Password"
                     autocomplete="new-password" />
                    @foreach ($errors->get('password') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <div class="form-group">
                  <label class="font-weight-bold">
                     Password confirmation
                  </label>
                  <input name="password_confirmation" type="password"
                     class="form-control" placeholder="Ulang Password" autocomplete="new-password" />
                    @foreach ($errors->get('password_confirmation') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <div class="float-right">
                  <a href="{{ route('users.index')}}" class="btn btn-warning px-4 mx-2">
                    <i class="fas fa-undo"></i> Kembali
                  </a>
                  <button type="submit" class="btn btn-primary float-right px-4">
                    <i class="fas fa-save"></i> Simpan
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
