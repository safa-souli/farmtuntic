@extends('auth.layout', ['bg' => 'banner-5.jpg'])

@section('content')
<div class="col-md-6">
  <div class="section-2 user-page main-padding">
    <div class="login-sec">
      <div class="login-box">
        <h4 class="form-group text-light-black fw-600">{{ __('Réinitialiser mot de passe') }}</h4>
        <p style="margin-top: -1ch">Nous vous enverrons un lien vers votre e-mail d'entrée depuis votre compte Farmtuntic.</p>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
              <label class="text-light-white fs-14">Adresse e-mail</label>
              
              <input id="email" type="email"
              class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}"
              required autocomplete="email" autofocus>

              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-5 offset-md-3">
                <button type="submit" class="btn-second btn-submit full-width">
                  <img src="{{ asset('assets/img/logo/white-icon.png') }}" alt="btn logo">Envoyer
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
