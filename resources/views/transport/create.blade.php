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
                <form method="POST" action="{{ route('transport.store') }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-xl-12 col-lg-8">
                      <div class="step-content">
                        <div class="step-tab-panel active" id="steppanel1">
                          <div class="payment-sec">
                            <div class="section-header-left">
                              <h3 class="text-light-black header-title">Ajouter un transport</h3>
                              <p class="text-light-black fw-400">Vous pouvez ajouter un transport dans un votre spécifie ferme.</p>
                              <hr>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Matricule<sup class="fs-16" style="color: red">*</sup>
                                  </label>
                                  <input name="matricule" class="form-control @error('matricule') is-invalid @enderror" placeholder="i.e Tomate" value="{{ old('matricule') }}">
                                  @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Nom<sup class="fs-16" style="color: red">*</sup>
                                  </label>
                                  <input name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="i.e Tomate" value="{{ old('nom') }}">
                                  @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700"> Type <sup class="fs-16" style="color: red">*</sup></label>
                                  <input name="type" class="form-control @error('prix') is-invalid @enderror" placeholder="i.e 7.32" value="{{ old('prix') }}">
                                  @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Image<sup class="fs-16" style="color: red">*</sup></label>
                                  <input type="file" name="image" class="custom-file">
                                  @error('image')
                                    <span style="font-size: 80%;color: #dc3545;">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              
                              <div class="col-md-12 text-right">
                                <hr>
                                <button class="btn-second btn-submit">Ajouter transport</button>
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
