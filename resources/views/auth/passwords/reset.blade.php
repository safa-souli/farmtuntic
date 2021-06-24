@extends('auth.layout', ['bg' => 'banner-6.jpg'])

@section('content')
<div class="col-md-6">
  <div class="section-2 user-page main-padding">
    <div class="login-sec">
      <div class="login-box">
        <h4 class="form-group text-light-black fw-600">{{ __('Réinitialiser mot de passe') }} </h4>
        <form method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="form-group">
            <label class="text-light-white fs-14">Adresse e-mail</label>
            
            <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ $email ?? old('email') }}" required
                    autocomplete="email" readonly>

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label class="text-light-white fs-14">Mot de passe</label>
            
            <input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" required
                    autocomplete="new-password" autofocus>

            
            @error('password')
            <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
            @enderror
          </div>
          <div class="form-group">
            <label class="text-light-white fs-14">Confirmer mot de passe</label>
            
            <input id="password-confirm" type="password"
                    class="form-control" name="password_confirmation"
                    required autocomplete="new-password">
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
              <button type="submit" class="btn-second btn-submit full-width">
                <img src="{{ asset('assets/img/logo/white-icon.png') }}" alt="btn logo">{{ __('Rénitialiser') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
