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
                   <a href="{{ route('roles.create')}}" class="btn btn-primary float-right" role="button">
                      Add new
                      <i class="fas fa-plus-square"></i>
                   </a>
                </div>
             </div>
          </div>
          <div class="card-body">
                <ul class="list-group list-group-flush">
                    <!-- list role -->
                    @forelse ($roles as $role)
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center pr-0">
                            <label class="mt-auto mb-auto">
                            {{ $role->name}}
                            </label>
                            <div>
                                <!-- detail -->
                                <a href="{{ route('roles.show', ['role' => $role] )}}" class="btn btn-sm btn-primary" role="button">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <!-- edit -->
                                <a href="{{ route('roles.edit', ['role' => $role] )}}" class="btn btn-sm btn-warning" role="button">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- delete -->
                                <form class="d-inline" action="{{ route('roles.destroy', ['role' => $role] )}}" role="alert" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </li>
                    @empty
                        <p>
                        <strong>
                            {{'Data tidak ada'}}
                        </strong>
                        </p>
                    @endforelse
                    <!-- list role -->
                </ul>
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
