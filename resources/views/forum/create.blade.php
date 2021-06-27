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
                <form method="POST" action="{{ route('forum.store') }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-xl-12 col-lg-8">
                      <div class="step-content">
                        <div class="step-tab-panel active" id="steppanel1">
                          <div class="payment-sec">
                            <div class="section-header-left">
                              <h3 class="text-light-black header-title">Ajouter un forum</h3>
                              <p class="text-light-black fw-400">Avez un question? Publier un post ici.</p>
                              <hr>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Objet<sup class="fs-16" style="color: red">*</sup>
                                  </label>
                                  <input name="objet" class="form-control @error('nom') is-invalid @enderror" placeholder="i.e Tomate" value="{{ old('objet') }}">
                                  @error('objet')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Fichier</label>
                                  <input type="file" name="fichier" class="custom-file">
                                  @error('fichier')
                                    <span style="font-size: 80%;color: #dc3545;">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="text-light-black fw-700">Description<sup class="fs-16" style="color: red">*</sup></label>
                                  <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="i.e est une produit internationnale">{{ old('description') }}</textarea>
                                  @error('description')
                                    <span style="font-size: 80%;color: #dc3545;">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-12 text-right">
                                <hr>
                                <button class="btn-second btn-submit">Publier</button>
                              </div>
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
