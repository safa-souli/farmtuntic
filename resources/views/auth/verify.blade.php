@extends('auth.layout', ['bg' => 'banner-3.jpg'])

@section('content')
    <!-- about us -->
    
    <div class="col-md-6">
        <div class="section-2 user-page main-padding">
          <div class="login-sec">
            <div class="login-box">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="history-title mb-md-40">
                            <h2 class="text-light-black">{{ __('Vérifier votre email address') }} <span class="text-light-green">{{ Auth::user()->prenom }}</span></h2>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                </div>
                            @endif
                            <p class="text-light-white">{{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}</p>
                            @if (Route::has('verification.resend'))
                                <p class="text-light-white">{{ __('Si vous n\'avez pas reçu l\'e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici') }}</a> pour demander un autre</p>
                            @endif
                        </div>
                    </div> 
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- about us -->
@endsection