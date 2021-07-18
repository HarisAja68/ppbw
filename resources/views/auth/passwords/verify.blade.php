@extends('auth.master')
@section('title', 'verifikasi')

@section('content')
    <div class="card-body">
      <p class="login-box-msg">email anda belum terverifikasi, silahkan verifikasi terlebih dahulu.</p>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Kode verifikasi yang baru telah dikirim ke email anda.') }}
                        </div>
                    @endif

                    {{ __('Kirim ulang kode verifikasi') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click sini') }}</button>.
                    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
