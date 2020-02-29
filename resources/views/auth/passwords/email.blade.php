@extends('layouts.Login') @section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Prueba</b>WAYNI movi</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="card-header">{{ __('Reset Password') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label text-md-right">Email</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Enviar link para recetiar la contraseña
                    </button>
                    <br>
                    <p class="mb-0">
                        <a href="{{ route('login') }}" class="text-center">Atras</a>
                    </p>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection