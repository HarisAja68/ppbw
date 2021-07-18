@extends('layout.v_template')
@section('title', 'Tambah Data user')

@section('content')
{{-- <div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form user</h3>
        </div>
        <form action="{{ url('user')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" class="form-control" value="{{ old('name')}}" placeholder="Silahkan isi nama karyawan" />
                    @foreach ($errors->get('name') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" value="{{ old('email')}}" placeholder="Silahkan isi email user" />
                    @foreach ($errors->get('email') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Silahkan isi password" />
                    @foreach ($errors->get('password') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Silahkan ulangi password" />
                    @foreach ($errors->get('password_confirmation') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
<div class="col-md-6"> --}}

<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
               <!-- name -->
               <div class="form-group">
                  <label for="input_user_name" class="font-weight-bold">
                     Name
                  </label>
                  <input id="input_user_name" value="{{ old('name')}}" name="name" type="text" class="form-control" placeholder="Masukkan nama" />
                    @foreach ($errors->get('name') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <!-- role -->
               <div class="form-group">
                <label for="select_user_role" class="font-weight-bold">
                    Role
                 </label>
                 <select id="select_user_role" name="role" data-placeholder="Isi Role" class="custom-select w-100">
                 </select>
               </div>
               <!-- email -->
               <div class="form-group">
                  <label for="input_user_email" class="font-weight-bold">
                     Email
                  </label>
                  <input id="input_user_email" value="{{ old('email')}}" name="email" type="email" class="form-control" placeholder="masukkan email"
                     autocomplete="email" />
                    @foreach ($errors->get('email') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <!-- password -->
               <div class="form-group">
                  <label for="input_user_password" class="font-weight-bold">
                     Password
                  </label>
                  <input id="input_user_password" name="password" type="password" class="form-control" placeholder="Masukkan Password"
                     autocomplete="new-password" />
                    @foreach ($errors->get('password') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <!-- password_confirmation -->
               <div class="form-group">
                  <label for="input_user_password_confirmation" class="font-weight-bold">
                     Password confirmation
                  </label>
                  <input id="input_user_password_confirmation" name="password_confirmation" type="password"
                     class="form-control" placeholder="Ulang Password" autocomplete="new-password" />
                    @foreach ($errors->get('password_confirmation') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
               </div>
               <div class="float-right">
                  <a href="{{ route('users.index')}}" class="btn btn-warning px-4 mx-2">
                     Back
                  </a>
                  <button type="submit" class="btn btn-primary float-right px-4">
                     Save
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('template')}}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{asset('template')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush
@push('js')
<script src="{{asset('template')}}/plugins/select2/js/select2.min.js"></script>
@endpush
@push('scripts')
<script>
    $(function() {
       $('#select_user_role').select2({
          theme: 'bootstrap4',
          allowClear: true,
          ajax: {
             url: "{{ route('roles.select') }}",
             dataType: 'json',
             delay: 250,
             processResults: function(data) {
                return {
                   results: $.map(data, function(item) {
                      return {
                         text: item.name,
                         id: item.id
                      }
                   })
                };
            }
          }
       });
    });
</script>
@endpush
