@extends('layouts.Login') @section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Prueba</b>WAYNI movi</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Iniciar seccion</p>

            <form method="POST" action="{{ route('login') }}">
                <div class="input-group mb-3">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span> @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="current-password"> @error('password')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Recuerdame
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                    </div>

                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- O -</p>

                <a href="{{ url('/auth/redirect/google') }}" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Iniciar con Google
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                @if (Route::has('password.request'))
                <a class="text-center" href="{{ route('password.request') }}">
              {{ __('Olvide mi clave') }}
          </a> @endif
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Registrar</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection