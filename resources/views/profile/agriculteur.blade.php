@extends('layout')

@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <div class="sidebar-tabs main-box padding-20 mb-md-40">
            <div id="add-restaurent-tab" class="step-app">
              <div class="row">
                <div class="col-xl-4 col-lg-5 mb-md-40">
                  <ul class="step-steps steps-2">
                    <li class="add-res-tab active" id="stepbtn1"><a href="#" class="add-res-tab">Général Info</a>
                    </li>
                    <li class="add-res-tab" id="stepbtn2"><a href="#" class="add-res-tab">Fermes</a>
                    </li>
                  </ul>
                </div>
                <div class="col-xl-8 col-lg-7">
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
                              <label class="text-light-black fw-700">Domaines</label>
                              <h6 class="fw-100"> {{ $client->agriculteur->domaine }} </h6>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="text-light-black fw-700">Certification</label>
                              <h1 class="fw-100"> {{ $client->agriculteur->certificate }} </h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="step-tab-panel" id="steppanel2">
                      <div class="package-sec">
                        <div class="row">
                          @foreach($client->agriculteur->fermes as $ferme)
                            <div class="col-xl-6 col-lg-12 col-sm-6">
                              <div class="testimonial-wrapper" style="margin-top: 10px;">
                                <div class="testimonial-box">
                                  <div class="testimonial-img p-relative">
                                    <img src='{{ URL::asset("assets/img/farms/$ferme->image")}}' class="img-fluid full-width" alt="testimonial-img">
                                  </div>
                                  
                                  <div class="post-content padding-20">
                                    <h5 class="no-margin"><a href="blog-details.html" class="text-light-black">{{ $ferme->nom }}</a></h5>
                                    <div class="rating">
                                      @inject('note', 'App\Http\Controllers\FermeController')
                                      @if($note->avg($ferme->id))
                                        @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                                          <i class="fas fa-star text-yellow"></i>
                                        @endfor
                                        @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                                          <i class="fas fa-star-half-alt text-yellow"></i>
                                        @endif
                                      @endif
                                      @if($note->etoiles($ferme->id))
                                        <span class="text-light-black fs-12 rate-data" style="top:0;">{{ $note->etoiles($ferme->id) }} évaluations</span>
                                      @endif
                                    </div>
                                    <br>
                                    <p style="margin-top: 10px;">{{ substr($ferme->description, 0, 100) }}...</p>
                                    <div class="blog-link-wrap"><a href="{{ route('farm.show', ['ferme' => $ferme]) }}" class="btn-first white-btn">Afficher plus</a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          @endforeach
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
                      <img src='{{ URL::asset("assets/img/user/$client->photo") }}' class="img-fluid full-width" alt="image">
                    </div>
                  </div>
                  @auth
                    @if($client->id == Auth::user()->id)
                      <a href="{{ route('profile.edit') }}">
                        <div class="card-footer p-0 modify-order">
                          <button class="text-custom-white full-width fw-500 bg-light-green"><i class="fas fa-chevron-left mr-2"></i> Modifier profil</button>
                        </div>
                      </a>
                    @endif
                  @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

@endsection
