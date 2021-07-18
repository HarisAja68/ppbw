@extends('layout.v_template')
@section('title', 'Create Role Page')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <form action="{{ route('roles.store')}}" method="POST">
            @csrf
             <div class="card-body">
                <div class="form-group">
                   <label for="input_role_name" class="font-weight-bold">
                      Role name
                   </label>
                   <input id="input_role_name" value="{{ old('name')}}" name="name" type="text" class="form-control" placeholder="Silahkan isi Nama Role" />
                    @foreach ($errors->get('name') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <!-- permission -->
                <div class="form-group">
                   <label for="input_role_permission" class="font-weight-bold">
                      permission
                   </label>
                   <div class="form-control overflow-auto h-100 " id="input_role_permission">
                      <div class="row">
                         <!-- list manage name:start -->
                         @foreach ($authorities as $manageName => $permissions)
                            <ul class="list-group mx-1">
                                <li class="list-group-item bg-dark text-white">
                                    {{$manageName}}
                                </li>
                                <!-- list permission:start -->
                                @foreach ($permissions as $permission)
                                <li class="list-group-item">
                                    <div class="form-check">
                                        @if (old('permissions'))
                                            <input id="{{$permission}}" name="permissions[]" class="form-check-input" type="checkbox"
                                            value="{{$permission}}" {{in_array($permission,old('permissions')) ? 'checked':null}}>
                                        @else
                                            <input id="{{$permission}}" name="permissions[]" class="form-check-input" type="checkbox"
                                            value="{{$permission}}" >
                                        @endif
                                        <label for="{{$permission}}" class="form-check-label">
                                            {{$permission}}
                                        </label>
                                    </div>
                                </li>
                                <!-- list permission:end -->
                                @endforeach
                            </ul>
                         @endforeach
                         <!-- list manage name:end  -->
                      </div>
                   </div>
                    @foreach ($errors->get('permissions') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="float-right mb-4">
                   <a href="{{ route('roles.index')}}" class="btn btn-warning px-4 mx-2">
                      Back
                   </a>
                   <button type="submit" class="btn btn-primary px-4">
                      Save
                   </button>
                </div>
             </div>
          </form>
       </div>
    </div>
</div>
@endsection
