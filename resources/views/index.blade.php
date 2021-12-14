@extends('layouts.layout')

@section('content')

        {{-- inicio de video --}}
    <section class="section main-banner" id="top" data-section="section1" >
  <video autoplay muted loop id="bg-video">
    <source src="/images/videoinicio.mp4" type="video/mp4">
  </video>
        {{-- Fin de video --}}
<div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
              @auth
              {{-- Aqui se escribe el mensaje que sale en la pagina principal despues de iniciar sesión --}}

                    <h6>Hola {{Auth::user()->name}}<h6>
                    <h2>Bienvenido a FullPass</h2>
                    <p></p>


              @endauth

              {{-- Aqui inicia el form de iniciar sesión --}}
            @guest
          <div class="container">
          <div class="row justify-content-center ">
        <div class="col-lg-12">
            <div class="card" style="left: 50%; right:50%">

                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}" style="min-height: 300px; border-radius: 50px;width: 100%;border: 20px solid white; background-color: whi
">
                        @csrf

                        <div class="form-group row col-lg-12">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                        <br>
                        <div class="form-group row col-lg-12">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <br>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    @endguest
                    {{-- Aqui termina el form de iniciar sesión --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
    <div class="row" style="padding-top:50px;">
    </div>
  </div>
        </div>
      </div>
    </div>
</div>
</section>
@endsection
