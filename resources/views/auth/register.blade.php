@extends('auth.layout', ['bg' => 'banner-2.jpg'])

@section('content')
    
<div class="col-md-6">
  <div class="section-2 user-page main-padding">
    <div class="login-sec">
      <div class="login-box">
        <form method="POST">
          <h4 class="text-light-black fw-600">Créez votre compte</h4>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <input name="nom" class="form-control form-control-submit @error('nom') is-invalid @enderror" placeholder="Nom" value="{{ old
                ('nom') }}" placeholder="Nom" required>
                @error('nom')
                <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
                @enderror
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <input name="prenom" class="form-control form-control-submit @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}"
                      placeholder="Prénom" required>
                @error('prenom')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input placeholder="Email" type="email" name="email" class="form-control form-control-submit @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>
              <div class="form-group">
                <input placeholder="Mot de passe" type="password" id="password-field" name="password" class="form-control form-control-submit @error('password') is-invalid @enderror"
                       required>
                @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>
              <div class="form-group">
                <input placeholder="Confirmer mot de passe" type="password" id="password-field" name="password_confirmation" class="form-control form-control-submit @error('password') is-invalid @enderror"
                       required>
              </div>
              <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn-second btn-submit full-width">S'inscrire</button>
              </div>
              <hr>
              <div class="form-group text-center">
                <p class="text-light-black mb-0">vous avez déjà un compte? <a href="login">S'identifier</a>
                </p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection