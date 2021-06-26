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
              <form method="POST" action="{{ route('farm.store') }}">
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
                                <input  name="nom_ferme" class="form-control form-control-submit" placeholder="i.e Mazraa">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Téléphone de ferme <sup class="fs-16">*</sup></label>
                                <input  name="telephone" class="form-control form-control-submit" placeholder="i.e 21 828 662">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Contact Email <sup class="fs-16">*</sup></label>
                                <input type="email" name="email" class="form-control form-control-submit" placeholder="i.e alard@example.com ">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Photo ferme</label>
                                <input type="file" name="#" class="custom-file">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Description</label>
                                <textarea name="description_ferme" class="form-control form-control-submit" rows="3" placeholder="i.e est une bonne ferme"></textarea>
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
                                <input  name="nom_produit" class="form-control form-control-submit" placeholder="i.e tomate">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Prix(dt)</label>
                                <input type="number" name="prix" class="form-control form-control-submit" placeholder="i.e 32 828 662">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Stock</label>
                                <input  name="stock" class="form-control form-control-submit" placeholder="i.e 2kg">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Image de produit</label>
                                <input type="file" name="#" class="form-control-file">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Description</label>
                                <textarea name="description_produit" class="form-control form-control-submit" rows="3" placeholder="i.e très bonne produit"></textarea>
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
