@extends('layout.v_template')
@section('title', 'User Page')

@section('content')
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
                    @can('user_create')
                    <a href="{{ route('users.create')}}" class="btn btn-primary float-right" role="button">
                        <i class="fas fa-user-plus"></i> Tambah
                    </a>
                    @endcan
                </div>
             </div>
          </div>
          <div class="card-body">
             <div class="row">
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
                                         Nama
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
                             @can('user_update')
                             <a href="{{ route('users.edit', $user )}}" class="btn btn-sm btn-warning" role="button">
                                <i class="fas fa-edit"></i>
                             </a>
                             @endcan
                             @can('user_delete')
                             <form action="{{ route('users.destroy', $user )}}" method="POST" role="alert" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-trash-alt"></i></button>
                             </form>
                             @endcan
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
            {{ $users->links() }}
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

