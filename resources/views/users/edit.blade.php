@extends('layout.v_template')
@section('title', 'Edit Data User')

@section('content')
{{-- <div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Suppliers</h3>
        </div>
        <form method="POST" action="{{ url('user/'.$model->id)}}" >
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" class="form-control" value="{{ $model->name}}" readonly>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" value="{{ $model->email}}" readonly>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control" >
                        <option selected disabled>Choseee...</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Permission</label>
                    <select name="permission[]" multiple class="form-control" >
                        <option selected disabled>Choseee...</option>
                        @foreach ($permissions as $permission)
                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
</div> --}}

<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{route('users.update', ['user' => $user]) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- name -->
                <div class="form-group">
                   <label for="input_user_name" class="font-weight-bold">
                      Name
                   </label>
                   <input id="input_user_name" value="{{ $user->name }}" name="name" type="text" class="form-control" readonly/>
                </div>
                <!-- email -->
                <div class="form-group">
                    <label for="input_user_email" class="font-weight-bold">
                       Email
                    </label>
                    <input id="input_user_email" value="{{ $user->email }}" name="email" type="email" class="form-control" autocomplete="email" readonly/>
                </div>
                <!-- role -->
                <div class="form-group">
                   <label for="select_user_role" class="font-weight-bold">
                      Role
                   </label>
                   <select id="select_user_role" name="role" data-placeholder="Pilih Role" class="custom-select w-100">
                       @if (old('role', $roleSelected))
                           <option value="{{ old('role', $roleSelected)->id }}" selected>
                             {{old('role', $roleSelected)->name}}
                           </option>
                       @endif
                   </select>
                     @foreach ($errors->get('role') as $msg)
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
$(function(){
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
