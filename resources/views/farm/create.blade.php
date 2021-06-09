@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    <div class="container-fluid" style="margin-left: 150px;">
      <div class="row">
        <div class="col-lg-9">
          <div class="sidebar-tabs main-box padding-20 mb-md-40">
            <div id="add-restaurent-tab" class="step-app">
              <form method="POST" action="{{ route('farm.store') }}">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-xl-4 col-lg-5 mb-md-40">
                    <ul class="step-steps steps-1">
                      <li class="stepbtn active" id="step1">
                        <a href="#"> <span class="number"></span>
                          <span class="step-name">Général Info</span>
                        </a>
                      </li>
                      <li class="stepbtn" id="step2">
                        <a href="#"> <span class="number"></span>
                          <span class="step-name">Location</span>
                        </a>
                      </li>
                      <li class="stepbtn" id="step3">
                        <a href="#"> <span class="number"></span>
                          <span class="step-name">Produit</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="step-steps steps-2">
                      <li class="add-res-tab active" id="stepbtn1"><a href="#" class="add-res-tab">Général Info</a></li>
                      <li class="add-res-tab" id="stepbtn2"><a href="#" class="add-res-tab">Location</a></li>
                      <li class="add-res-tab" id="stepbtn3"><a href="#" class="add-res-tab">Produit</a></li>
                    </ul>
                    <div class="step-footer">
                      <button class="btn-first white-btn none" id="prev-1">Previous</button>
                      <button class="btn-first white-btn none" id="prev-2">Previous</button>
                      <button class="btn-first white-btn" id="next-1">Next</button>
                      <button class="btn-first white-btn none" id="next-2">Next</button>
                      <button class="btn-first white-btn none" id="finish-1">Finish</button>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-7">
                    <div class="step-content">
                      <div class="step-tab-panel active" id="steppanel1">
                        <div class="payment-sec">
                          <div class="section-header-left">
                            <h3 class="text-light-black header-title">Ajouter ferme</h3>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Général Information</h5>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom de ferme <sup class="fs-16">*</sup>
                                </label>
                                <input type="text" name="nom_ferme" class="form-control form-control-submit" placeholder="i.e Mazraa">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Téléphone de ferme <sup class="fs-16">*</sup></label>
                                <input type="text" name="telephone" class="form-control form-control-submit" placeholder="i.e 21 828 662">
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
                                <textarea type="text" name="description_ferme" class="form-control form-control-submit" rows="3" placeholder="i.e est une bonne
                              ferme"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="step-tab-panel" id="steppanel2">
                        <div class="package-sec">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Location</h5>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Country <sup class="fs-16">*</sup>
                                </label>
                                <select class="form-control form-control-submit custom-select-2 full-width">
                                  <option value="">Select Country</option>
                                  <option value="brazil" data-name="">Brazil</option>
                                  <option value="canada" data-name="">Canada</option>
                                  <option value="france" data-name="">France</option>
                                  <option value="india" data-name="">India</option>
                                  <option value="italy" data-name="">Italy</option>
                                  <option value="spain" data-name="">Spain</option>
                                  <option value="united-kingdom" data-name="">United Kingdom</option>
                                  <option value="united-states" data-name="">United States</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">State</label>
                                <select class="form-control form-control-submit custom-select-2 full-width">
                                  <option value="">Select State</option>
                                  <option value="uttar-pradesh">Uttar Pradesh</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">City</label>
                                <select class="form-control form-control-submit custom-select-2 full-width">
                                  <option value="">Select City</option>
                                  <option value="uttar-pradesh">Uttar Pradesh</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Latitude</label>
                                <input type="text" name="#" class="form-control form-control-submit" value="40.4167754">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Longitude</label>
                                <input type="text" name="#" class="form-control form-control-submit" value="-3.7037901999999576">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Find On Map</label>
                                <input type="text" name="#" class="form-control form-control-submit" placeholder="Type Your Address">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="form-group"></div>
                                <button type="submit" class="btn-second btn-submit">Search Location</button>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <iframe id="locmap" class="w-100" height="300"
                                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="step-tab-panel" id="steppanel3">
                        <div class="payment-sec">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Produit Information</h5>
                              <p class="text-light-black fw-400" style="margin-top: -10px;">Au minimum un produit de ferme</p>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom de produit <sup class="fs-16">*</sup>
                                </label>
                                <input type="text" name="nom_produit" class="form-control form-control-submit" placeholder="i.e tomate">
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
                                <input type="text" name="stock" class="form-control form-control-submit" placeholder="i.e 2kg">
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
