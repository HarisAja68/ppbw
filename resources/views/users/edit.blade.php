@extends('layout.v_template')
@section('title', 'Edit Data User')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{route ('users.update', $user )}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                   <label class="font-weight-bold">
                      Nama
                   </label>
                   <input value="{{ $user->name }}" name="name" type="text" class="form-control" readonly/>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">
                       Email
                    </label>
                    <input value="{{ $user->email }}" name="email" type="email" class="form-control" autocomplete="email" readonly/>
                </div>
                <div class="form-group">
                   <label class="font-weight-bold">
                      Role
                   </label>
                   <select name="role" data-placeholder="Pilih Role" class="custom-select w-100">
                    @foreach ($roleSelected as $role)
                        <option value="{{ $role->id }}"> {{ $role->name }} </option>
                    @endforeach
                   </select>
                     @foreach ($errors->get('role') as $msg)
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
