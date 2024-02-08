@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Indirizzo E-Mail -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Indirizzo E-Mail') }}</label>

                            <div class="col-md-6">
                                <input
                                  type="email"
                                  id="email"
                                  class="form-control @error('email') is-invalid @enderror"
                                  name="email"
                                  value="{{ old('email') }}"
                                  required
                                  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Passoword -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input
                                  type="password"
                                  id="password"
                                  class="form-control @error('password') is-invalid @enderror"
                                  name="password"
                                  required
                                  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Ricordami -->
                        <div class="row d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="col-auto">
                                <div class="form-check">
                                    <input
                                      type="checkbox"
                                      id="remember"
                                      class="form-check-input"
                                      name="remember"
                                      {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Login -->
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="col-auto">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Hai dimenticato la tua password?') }}
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
