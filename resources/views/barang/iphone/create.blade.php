@extends('layout.v_template')
@section('title', 'Iphone Page')
@section('iphone_active', 'active')
@section('barang_open', 'menu-open')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Iphone</h3>
        </div>
        <form action="{{ url('iphone')}}" method="POST" class="form-karyawan" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="kode" class="form-control" value="{{ old('kode')}}" placeholder="Silahkan isi kode barang" >
                    @foreach ($errors->get('kode') as $msg)
                        <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Nama Handphone</label>
                    <input name="nama" class="form-control" value="{{ old('nama')}}" placeholder="Silahkan isi nama handphone" >
                    @foreach ($errors->get('nama') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" onchange="preview('.tampil-foto', this.files[0])">
                    {{-- <span class="help-block with-errors"></span>
                    <div class="tampil-foto">
                        <img src="{{ url($model->foto ?? '/') }}" width="200">
                    </div> --}}
                    @foreach ($errors->get('foto') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga')}}" placeholder="Silahkan isi Harga" >
                    @foreach ($errors->get('harga') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input name="stok" class="form-control" value="{{ old('stok')}}" placeholder="Silahkan isi stok" >
                    @foreach ($errors->get('stok') as $msg)
                    <div class="alert alert-danger">{{$msg}}</div>
                    @endforeach
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
<div class="col-md-6">
@endsection

@push('scripts')
<script>
    $(function (){
        $('.form-karyawan').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('.form-karyawan').attr('action'),
                    type: $('.form-karyawan').attr('method'),
                    data: new FormData($('.form-karyawan')[0]),
                    async: false,
                    processData: false,
                    contentType: false
                })
                .done(Response => {
                    $('.tampil-foto').html(`<img src="{{ url('/') }}${response.foto}" width="200">`);
                })
            }
        });
    });
</script>
@endpush
