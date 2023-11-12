@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:rgb(248, 115, 106)">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body" style="color :rgb(7, 7, 7)">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="color: rgb(7, 7, 7)">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="form-check-label" for="remember">
                                        {{ __('Ver contraseña') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0" >
                            <div class="col-md-8 offset-md-4" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"0 >
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a  class="btn btn-link"  href="{{ route('password.request')  }}" style="color: black">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
