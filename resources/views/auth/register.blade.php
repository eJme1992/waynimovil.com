@extends('layouts.Login') 
@section('title','Home')
@section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Prueba</b>WAYNI movi</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">

            <p class="login-box-msg">Registro</p>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-12 col-form-label text-md-right">Nombre completo</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-12 col-form-label text-md-right">Email</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label text-md-right">Contraseña</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-12 col-form-label text-md-right">Confirma contraseña</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <hr>

                <button type="submit" class="btn-primary btn btn-block">
                   Registro
                </button>

                <div class="social-auth-links text-center mb-3">
                    <p>- O -</p>

                    <a href="{{ url('/auth/redirect/google') }}" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Registro con Google
                    </a>
                </div>
                <p class="mb-0">
                    <a href="{{ route('login') }}" class="text-center">Iniciar sesion</a>
                </p>
            </form>

            <!-- /.login-card-body -->
        </div>
    </div>

    @endsection