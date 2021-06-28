@extends('layout')

@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme" style="margin-left: 300px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <div class="sidebar-tabs main-box padding-20 mb-md-40">
            <div id="add-restaurent-tab" class="step-app">
              <div class="row">
                <div class="col-xl-12 col-lg-7">
                  <div class="step-content">
                    <div class="step-tab-panel active" id="steppanel1">
                      <div class="general-sec">
                        <div class="row u-line">
                          <div class="col-12">
                            <h5 class="text-light-black fw-700">Général Information</h5>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Nom</label>
                              <h1 class="fw-100"> {{ $client->nom }} </h1>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Prénom</label>
                              <h1 class="fw-100"> {{ $client->prenom }} </h1>
                            </div>
                          </div>
                          @isset($client->datenai)
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Date de naissance</label>
                                <h1 class="fw-100"> {{ $client->datenai }} </h1>
                              </div>
                            </div>
                          @endisset
                          @isset($client->telephone)
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Téléphone</label>
                                <h1 class="fw-100"> {{ $client->telephone }} </h1>
                              </div>
                            </div>
                          @endisset
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Email</label>
                              <h1 class="fw-100"> {{ $client->email }} </h1>
                            </div>
                          </div>
                          @isset($client->adresse)
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Adresse</label>
                                <h1 class="fw-100"> {{ $client->adresse }} </h1>
                              </div>
                            </div>
                          @endisset
                          @isset($client->sexe)
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Sexe</label>
                                <h1 class="fw-100"> {{ $client->sexe }} </h1>
                              </div>
                            </div>
                          @endisset
                        </div>
                        <div class="row" style="margin-top: 30px;">
                          <div class="col-12">
                            <h5 class="text-light-black fw-700">Additional Information</h5>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Nom de l'entreprise</label>
                              <h1 class="fw-100"> {{ $client->livreur->nom_entreprise }} </h1>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Télephone de {{ $client->livreur->nom_entreprise }}</label>
                              <h1 class="fw-100"> {{ $client->livreur->telephone_entreprise }} </h1>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Adresse de {{ $client->livreur->nom_entreprise }}</label>
                              <h1 class="fw-100"> {{ $client->livreur->adresse_entreprise }} </h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="cart-detail-box">
            <div class="card">
              <div class="card-body no-padding" id="scrollstyle-4">
                <div class="cat-product-box">
                  <div class="cat-product">
                    <div class="cat-name">
                      <img src='{{ URL::asset("assets/img/user/$client->photo") }}' class="img-fluid full-width" alt="image" style="width: 1cm;height:1cm">
                    </div>
                  </div>
                  @if($client->id == Auth::user()->id)
                    <a href="{{ route('profile.show') }}">
                      <div class="card-footer p-0 modify-order">
                        <button class="text-custom-white full-width fw-500 bg-light-green"><i class="fas fa-chevron-left mr-2"></i> Modifier profil</button>
                      </div>
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
