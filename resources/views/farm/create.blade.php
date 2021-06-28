@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    <div class="container-fluid" style="margin-left: 200px;">
      <div class="col-lg-8">
          <div class="row">
            <div class="sidebar-tabs main-box padding-20 mb-md-50">
              <div id="add-restaurent-tab" class="step-app">
              <form method="POST" action="{{ route('farm.store') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-xl-12 col-lg-7">
                    <div class="step-content">
                      <div class="step-tab-panel active" id="steppanel1">
                        <div class="payment-sec">
                          <div class="section-header-left">
                            <h3 class="text-light-black header-title">Ajouter ferme</h3>                           
                            <p class="text-light-black fw-400" style="margin-top: 10px;">Vous conseillez de saisir des vrais données pour gagner la confience du client.</p>
                            <hr>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Général Information</h5>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom de ferme <sup class="fs-16">*</sup>
                                </label>
                                <input  name="nom_ferme" class="form-control @error('nom_ferme') is-invalid @enderror" placeholder="i.e Mazraa" value={{ old('nom_ferme')}}>
                                @error('nom_ferme')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Téléphone de ferme <sup class="fs-16">*</sup></label>
                                <input  name="telephone" class="form-control @error('telephone') is-invalid @enderror" placeholder="i.e 21 828 662" value="{{old('telephone')}}">
                                @error('telephone')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700"> Adresse <sup class="fs-16">*</sup></label>
                                <input  name="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="i.e souala hay hedi ben hsin" value="{{old('adresse')}}">
                                @error('adresse')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Contact Email <sup class="fs-16">*</sup></label>
                                <input  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="i.e alard@example.com " value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Description</label>
                                <textarea name="description_ferme" class="form-control @error('description_ferme') is-invalid @enderror" rows="3" placeholder="i.e est une bonne ferme">{{old('description_ferme')}}</textarea>
                                @error('description_ferme')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Photo ferme</label>
                                <input type="file" name="image_ferme" class="custom-file">
                                @error('image_ferme')
                                    <span style="font-size: 80%;color: #dc3545;" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Produit Information</h5>
                              <p class="text-light-black fw-400" style="margin-top: -10px;"> un ferme doit être au minimum un produit.</p>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom de produit <sup class="fs-16">*</sup>
                                </label>
                                <input  name="nom_produit" class="form-control @error('nom_produit') is-invalid @enderror" placeholder="i.e tomate" value="{{old('nom_produit')}}">
                                @error('nom_produit')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Prix(dt)</label>
                                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" placeholder="i.e 32 828 662" value="{{old('prix')}}">
                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Promotion(%)</label>
                                <input type="number" name="promotion" class="form-control @error('promotion') is-invalid @enderror" placeholder="i.e 32 828 662" value="{{old('promotion')}}">
                                @error('promotion')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Image de produit</label>
                                <input type="file" name="image_produit" class="form-control-file">
                                  @error('image_produit')
                                    <span style="font-size: 80%;color: #dc3545;" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Description</label>
                                <textarea name="description_produit" class="form-control @error('description_produit') is-invalid @enderror" rows="3" placeholder="i.e très bonne produit">{{old('description_produit')}}</textarea>
                                @error('description_produit')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <button class="btn-second btn-submit">Ajouter</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
