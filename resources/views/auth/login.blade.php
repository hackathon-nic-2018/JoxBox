@extends('layouts.principal')

@section('content')
<div id="services" class="services-area area-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8-4 col-sm-8 col-xs-8">
        <div class="section-headline services-head text-center">
            <img src="/images/Jobbox logo 100px.png" style="margin-top:20px;" width="150px"><br/>
            <h2 style="margin-top:20px;">Iniciar sesión</h2>
        </div>
        <div class="section-headline services-head text-right">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Guardar contraseña') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="section-headline services-head text-center">
                    <button type="submit" class="btn btn-primary" style="border:none;">
                        {{ __('Iniciar sesión') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvidé mi contraseña') }}
                    </a>
                    @endif

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
