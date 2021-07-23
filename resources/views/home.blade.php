@extends('layout.v_template')
@section('title', 'Home')
@section('home_active', 'active')

@section('content')
<h1 class="text-center">Selamat datang {{ Auth::user()->name }} </h1> <br>
@role('owner|karyawan')
<!-- Small boxes (Stat box) -->
<div class="row">
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
        <div class="inner">
            <h3>{{ $suppliers }}</h3>
            <p>Data Suppliers</p>
        </div>
        <div class="icon">
            <i class="ion ion-android-cart"></i>
        </div>
        <a href="{{ route('suppliers.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange">
        <div class="inner">
            <h3>{{ $iphone }}</h3>
            <p>Data IPhone</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('iphone.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $samsung }}</h3>
            <p>Data Samsung</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('samsung.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
        <div class="inner">
            <h3>{{ $oppo }}</h3>
            <p>Data Oppo</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('oppo.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-indigo">
        <div class="inner">
            <h3>{{ $vivo }}</h3>
            <p>Data Vivo</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('vivo.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-teal">
        <div class="inner">
            <h3>{{ $realme }}</h3>
            <p>Data Realme</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('realme.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-pink">
        <div class="inner">
            <h3>{{ $huawei }}</h3>
            <p>Data Huawei</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('huawei.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-lime">
        <div class="inner">
            <h3>{{ $redmi }}</h3>
            <p>Data Redmi</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('redmi.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
        <div class="inner">
            <h3>{{ $poco }}</h3>
            <p>Data Poco</p>
        </div>
        <div class="icon">
            <i class="ion ion-iphone"></i>
        </div>
        <a href="{{ route('poco.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @role('owner')
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $karyawan }}</h3>
            <p>Data Karyawan</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-stalker"></i>
        </div>
        <a href="{{ route('karyawan.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
        <div class="inner">
            <h3>{{ $user }}</h3>
            <p>Data User</p>
        </div>
        <div class="icon">
            <i class="ion ion-person"></i>
        </div>
        <a href="{{ route('users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{ $role }}</h3>
            <p>Data Role</p>
        </div>
        <div class="icon">
            <i class="ion ion-android-settings"></i>
        </div>
        <a href="{{ route('roles.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    @endrole
</div>
<!-- /.row -->
@endrole

@endsection

@push('css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
