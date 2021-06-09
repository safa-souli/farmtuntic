@extends('auth.layout', ['bg' => 'banner-1.jpg'])

@section('content')
    
<div class="col-md-6">
  <div class="section-2 user-page main-padding" >
    <div class="login-sec">
      <div class="login-box" style="box-shadow: 2px 2px 20px  hsl(0, 9%, 83%);">
        <form method="POST">
          <h4 class="form-group text-light-black fw-600">Connectez-vous avec votre compte Farmtuntic </h4>
          
          @error('email')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur de connexion : </strong>{{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @enderror
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-submit" placeholder="Email" value="{{ old('email') }}" required>
              </div>
              <div class="form-group">
                <input type="password" id="password-field" name="password" placeholder="Mot de passe" class="form-control form-control-submit" required>
                <div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
              </div>
              
              <div class="form-group text-center">
                <label class="form-group text-center mb-0">
                  
                <p class="text-light-black mb-0">mot de passe oublié?
                   <a href="password/reset">le réinitialiser</a>
                </p>
              </div>
              <div class="form-group">
                <button type="submit" class="btn-second btn-submit full-width">
                  <img src="{{ asset('assets/img/logo/icon.png') }}" alt="btn logo">Se connecter
                </button>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <hr>
              <div class="form-group text-center mb-0">
                <p class="text-light-black mb-0">vous n'avez pas un compte? 
                  <a href="register">Créez votre compte</a>
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
