@extends('layout.v_template')
@section('title', 'Poco Page')
@section('barang_open', 'menu-open')
@section('xiaomi_open', 'menu-open')

@section('content')
<div class="card card-info card-outline">
    <div class="card-header">
        <form class="card-title" method="GET" action="{{ url('poco')}}" enctype="multipart/form-data">
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
            @can('barang_create')
            <a href="{{ url('poco/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            <a href="{{ url('cetak_poco')}}" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Cetak Table</a>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode Barang</th>
                    <th>Foto</th>
                    <th>Nama Handphone</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $value)
                    <tr>
                        <td>{{ (($key+1) + ($datas->currentPage() * $datas->perPage()) - $datas->perPage()) }}</td>
                        <td>{{$value->kode}}</td>
                        <td>
                            <img src="{{ asset('images/foto_poco/'.$value->foto)}}" width="75px"/>
                        </td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->harga}}</td>
                        <td>{{$value->stok}}</td>
                        <td>
                            @can('barang_update')
                            <a href="{{ url('poco/' .$value->id .'/edit')}}" style="margin-bottom: 10px" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            @endcan
                            @can('barang_delete')
                            <form action="{{ url('poco/'.$value->id)}}" role="alert" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
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

