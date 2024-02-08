@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nome -->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nome') }} *</label>

                            <div class="col-md-6">
                                <input
                                  type="text"
                                  id="name"
                                  class="form-control @error('name') is-invalid @enderror"
                                  name="name"
                                  value="{{ old('name') }}"
                                  required
                                  autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Cognome -->
                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label">{{ __('Cognome') }} *</label>

                            <div class="col-md-6">
                                <input
                                  type="text"
                                  id="surname"
                                  class="form-control @error('surname') is-invalid @enderror"
                                  name="surname"
                                  value="{{ old('surname') }}"
                                  autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Indirizzo E-Mail -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Indirizzo E-Mail') }} *</label>

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

                        <!-- Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }} *</label>

                            <div class="col-md-6">
                                <input
                                  type="password"
                                  id="password"
                                  class="form-control @error('password') is-invalid @enderror"
                                  name="password"
                                  required
                                  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Conferma Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Conferma Password') }} *</label>

                            <div class="col-md-6">
                                <input
                                  type="password"
                                  id="password-confirm"
                                  class="form-control"
                                  name="password_confirmation"
                                  required
                                  autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Nome -->
                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label">{{ __('Data di nascita') }} *</label>

                            <div class="col-md-6">
                                <input
                                  type="date"
                                  id="date_of_birth"
                                  class="form-control @error('date_of_birth') is-invalid @enderror"
                                  name="date_of_birth"
                                  value="{{ old('date_of_birth') }}"
                                  required
                                  autocomplete="date_of_birth">

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Registrati -->
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection