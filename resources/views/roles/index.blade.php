@extends('layout.v_template')
@section('title', 'Role Page')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                   <form action="{{ route('roles.index')}}" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="{{ $keyword}}" type="search" class="form-control" placeholder="Search">
                         <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6">
                    @can('role_create')
                    <a href="{{ route('roles.create')}}" class="btn btn-primary float-right" role="button">
                        <i class="fas fa-plus"></i> Tambah
                    </a>
                    @endcan
                </div>
             </div>
          </div>
          <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Role</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ (($key+1) + ($roles->currentPage() * $roles->perPage()) - $roles->perPage()) }}</td>
                                <td>{{ $role->name}}</td>
                                <td>
                                    @can('role_update')
                                    <a href="{{ route('roles.edit', $role )}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"> Edit</i></a>
                                    @endcan
                                    @can('role_delete')
                                        <form class="d-inline" action="{{ route('roles.destroy', $role )}}" role="alert" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-trash-alt"></i> Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $roles->links()}}
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
                title: 'Apakah anda yakin untuk menghapus?',
                text: "Anda tidak akan bisa mengembalikan data yang telah dihapus!",
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
