@extends('layout.v_template')
@section('title', 'Karyawan')


@section('content')
<div class="card card-info card-outline">
    <div class="card-header">
        <form class="card-title" method="GET" enctype="multipart/form-data">
            <div class="input-group">
                <input type="search" class="form-control" name="keyword" value="{{ $keyword}}" placeholder="Search" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                       <i class="fas fa-search"></i>
                    </button>
                 </div>
            </div>
        </form>
        <div class="card-tools">
            @can('karyawan_create')
                <a href="{{ route('karyawan.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <a href="{{ url('cetak_karyawan')}}" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Cetak Table</a>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama Karyawan</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $value)
                    <tr>
                        <td>{{ (($key+1) + ($datas->currentPage() * $datas->perPage()) - $datas->perPage()) }}</td>
                        <td>{{$value->nip}}</td>
                        <td>
                            <img src="{{ asset('images/foto_karyawan/'.$value->foto)}}" width="75px"/>
                        </td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->no_hp}}</td>
                        <td>
                            @can('karyawan_update')
                            <a href="{{ route('karyawan.edit', $value->id)}}" style="margin-bottom: 10px" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            @endcan
                            @can('karyawan_delete')
                            <form action="{{ route('karyawan.destroy', $value->id)}}" role="alert" method="POST">
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
        <br>
        {{ $datas->links()}}
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
