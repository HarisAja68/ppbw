@extends('layout.v_template')
@section('title', 'Iphone Page')

@section('content')
<div class="card card-info card-outline">
    <div class="card-header">
        <form class="card-title" method="GET" action="{{ url('iphone')}}">
            <input type="text" name="keyword" value="{{ $keyword}}" placeholder="Search" />
            <button type="submit" class="btn btn-sm btn-outline-info"><i class="fas fa-search"></i> Search</button>
        </form>
        <div class="card-tools">
            <a href="{{ url('iphone/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            <a href="{{ url('cetak_iphone')}}" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Cetak Table</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode Barang</th>
                    <th>Nama Handphone</th>
                    <th>Foto</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="text-center" colspan="3">ACTION</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $value)
                    <tr>
                        <td>{{ (($key+1) + ($datas->currentPage() * $datas->perPage()) - $datas->perPage()) }}</td>
                        <td>{{$value->kode}}</td>
                        <td>{{$value->nama}}</td>
                        <td>
                            <img src="{{ asset('images/foto_iphone/'.$value->foto)}}" width="75px"/>
                        </td>
                        <td>{{$value->harga}}</td>
                        <td>{{$value->stok}}</td>
                        <td><a href="{{ url('iphone/' .$value->id)}}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Detail</a></td>
                        <td><a href="{{ url('iphone/' .$value->id .'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a></td>
                        <td>
                            <form action="{{ url('iphone/'.$value->id)}}" id="alert" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
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
           $("#alert").submit(function(event){
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

