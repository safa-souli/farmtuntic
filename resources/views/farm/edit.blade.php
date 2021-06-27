@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    <div class="container-fluid" style="margin-left: 150px;">
      <div class="row">
        <div class="col-lg-7">
          <div class="sidebar-tabs main-box padding-20 mb-md-40">
            <div id="add-restaurent-tab" class="step-app">
              <div class="row">
                <div class="col-xl-12 col-lg-7">
                  <form method="POST" action="{{ route('farm.update', ['ferme' => $ferme]) }}">
                    @csrf
                    <div class="step-content">
                      <div class="step-tab-panel active">
                        <div class="payment-sec">
                          <div class="section-header-left">
                            <h3 class="text-light-black header-title">Modifier {{ $ferme->nom }} ferme</h3>
                          </div>
                          <div class="row">
                              
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom de ferme <sup class="fs-16">*</sup>
                                </label>
                                <input  name="nom_ferme" class="form-control @error('nom_ferme') is-invalid @enderror" placeholder="i.e Mazraa" value={{$ferme->nom ?? old('nom_ferme')}}>
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
                                <input  name="telephone" class="form-control @error('telephone') is-invalid @enderror" placeholder="i.e 21 828 662" value="{{$ferme->telephone ?? old('telephone')}}">
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
                                <input  name="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="i.e souala hay hedi ben hsin" value="{{$ferme->adresse ?? old('adresse')}}">
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
                                <input  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="i.e alard@example.com " value="{{$ferme->email ?? old('email')}}">
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
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="i.e est une bonne ferme">{{$ferme->description ?? old('description')}}</textarea>
                                @error('description')
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
                                @error('image')
                                <span style="font-size: 80%;color: #dc3545;" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <hr>
                          <button class="btn-second btn-submit">Modifier</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="advertisement-slider swiper-container h-auto">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="large-product-box p-relative pb-0">
                  <img src='{{ URL::asset("assets/img/farms/$ferme->image") }}' class="img-fluid full-width" alt="ferme-image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
