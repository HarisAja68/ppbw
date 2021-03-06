@extends('layout.v_template')
@section('title', 'Suppliers')

@section('content')
<div class="card card-info card-outline">
    <div class="card-header">
        <form class="card-title" method="GET" action="{{ url('suppliers') }}" enctype="multipart/form-data">
            <div class="input-group">
                <input type="search" class="form-control" name="keyword" value="{{ $keyword }}" placeholder="Search" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="card-tools">
            @can('suppliers_create')
            <a href="{{ url('suppliers/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            <a href="{{ url('cetak_suppliers') }}" target="_blank" class="btn btn-success"><i class="fas fa-print"></i>
                Cetak Table</a>
            <a href="{{ url('cetak_excel') }}" target="_blank" class="btn btn-info"><i class="fas fa-print"></i>
                Cetak Excel</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Import
            </button>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID suppliers</th>
                    <th>Nama Toko</th>
                    <th>Barang</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $value)
                <tr>
                    <td>{{ $key + 1 + $datas->currentPage() * $datas->perPage() - $datas->perPage() }}</td>
                    <td>{{ $value->kode }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->barang }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->no_hp }}</td>
                    <td>
                        @can('suppliers_update')
                        <a href="{{ url('suppliers/' . $value->id . '/edit') }}" style="margin-bottom: 10px"
                            class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        @endcan
                        @can('suppliers_delete')
                        <form action="{{ url('suppliers/' . $value->id) }}" role="alert" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                Delete</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $datas->links() }}
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data"></form>
                @csrf
                <div class="form-group">
                    <input type="file" name="file" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $("form[role='alert']").submit(function (event) {
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
