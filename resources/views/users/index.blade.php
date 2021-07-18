@extends('layout.v_template')
@section('title', 'User Page')

@section('content')
{{-- <div class="card card-info card-outline">
    <div class="card-header">
        <form class="card-title" method="GET" action="{{ url('user')}}">
            <input type="text" name="keyword" value="{{ $keyword}}" placeholder="Search" />
            <button type="submit" class="btn btn-sm btn-outline-info"><i class="fas fa-search"></i> Search</button>
        </form>
        <div class="card-tools">
            <a href="{{ url('user/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            <a href="{{ url('cetak_suppliers')}}" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Cetak Table</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="text-center" colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $value)
                    <tr>
                    </tbody>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->role->first()}}</td>
                    <td>{{ print_r($roles[0], 1) }}</td>
                    <td><a href="{{ url('user/' .$value->id .'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a></td>
                    <td>
                        <form action="{{ url('user/'.$value->id)}}" role="alert" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
        <br>
        {{ $datas->links()}}
    </div>
</div> --}}
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-6">
                   <form action="" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="{{ $keyword }}" type="search" class="form-control" placeholder="Search">
                         <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6">
                   <a href="{{ route('users.create')}}" class="btn btn-primary float-right" role="button">
                      Create
                      <i class="fas fa-user-plus"></i>
                   </a>
                </div>
             </div>
          </div>
          <div class="card-body">
             <div class="row">
                <!-- list users -->
                @forelse ($users as $user)
                <div class="col-md-6">
                    <div class="card my-1">
                       <div class="card-body">
                          <div class="row">
                             <div class="col-md-2">
                                <i class="fas fa-id-badge fa-5x"></i>
                             </div>
                             <div class="col-md-10">
                                <table>
                                   <tr>
                                      <th>
                                         Name
                                      </th>
                                      <td>:</td>
                                      <td>
                                         {{$user->name}}
                                      </td>
                                   </tr>
                                   <tr>
                                      <th>
                                         Email
                                      </th>
                                      <td>:</td>
                                      <td>
                                        {{$user->email}}
                                      </td>
                                   </tr>
                                   <tr>
                                      <th>
                                         Role
                                      </th>
                                      <td>:</td>
                                      <td>
                                        {{$user->roles->first()->name}}
                                      </td>
                                   </tr>
                                </table>
                             </div>
                          </div>
                          <div class="float-right">
                             <!-- edit -->
                             <a href="{{ route('users.edit', ['user' => $user] )}}" class="btn btn-sm btn-info" role="button">
                                <i class="fas fa-edit"></i>
                             </a>
                             <!-- delete -->
                             <form action="{{ route('users.destroy', ['user' => $user] )}}" method="POST" role="alert" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-trash-alt"></i></button>
                             </form>
                          </div>
                       </div>
                    </div>
                </div>
                @empty
                    {{'Data Tidak Ditemukan'}}
                @endforelse
             </div>
          </div>
          <div class="card-footer">
            {{ $users->links()}}
          </div>
       </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $("form[role='alert']").submit(function(event){
            event.preventDefault();
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Kamu tidak akan bisa mengembalikan data yang telah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
                });
            });
        });
</script>
@endpush

