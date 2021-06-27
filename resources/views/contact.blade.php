@extends('layout')

@section('content')

    <section id="content" class="page-content">>
        <section class="contact-form section-padding banner-bottom-sec">
            
            <div style="box-shadow: 0 0 0 1px rgb(67 41 163 / 8%), 0 1px 5px 0 rgb(67 41 163 / 8%);  margin: 0 3in 0 3in;">
                <form action="contact" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="col-md-12 form-fields" style="padding: 1cm">
                    <div class="form-group row">
                        <div class="col-md-12 col-md-offset-3">
                            <h3  class="text-light-black header-title">Contactez-nous</h3>
                            <p>Partager avec nous vos options ou vos suggestions nous aidera à progresser.</p>
                            <p>Pour demander d'être un agriculteur au livreur vous devez nous envoyer le certificat en tant que fichier.</p>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            Merci pour votre opinion we will answer you! it will help us
                        </div>
                    @endif
                    @if (session('valid-mail'))                        
                      <div class="alert alert-danger" role="alert">
                          <strong>Whoops!! Email non valid: </strong> Something went wrong please check the email validity
                          so we can answer you
                      </div>
                    @endif
                    <hr style="margin-top:-1ch 0 3ch">
                    
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700">Nom<sup class="fs-16" style="color: red">*</sup>
                            </label>
                            <input name="nom" class="form-control @error('nom') is-invalid @enderror " placeholder="i.e Tomate" value="{{Auth::user()->nom ??  old('nom') }}">
                            @error('nom')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700">Prénom <sup class="fs-16" style="color: red">*</sup></label>
                            <input name="prenom" class="form-control @error('prenom') is-invalid @enderror " placeholder="i.e 7.32" value="{{ Auth::user()->prenom ?? old('prenom') }}">
                            @error('prenom')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700"> Email <sup class="fs-16" style="color: red">*</sup></label>
                            <input name="email" class="form-control @error('email') is-invalid @enderror " placeholder="i.e 10" value="{{ Auth::user()->email ?? old('email')}}">
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700"> Téléphone</label>
                            <input name="telephone" class="form-control @error('telephone') is-invalid @enderror" placeholder="i.e 10" value="{{ old('promotion')}}">
                            @error('telephone')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700"> Objet</label>
                            <select name="subject" class="form-control form-control-select">
                                <option value="O">Opinion</option>
                                <option value="S">Suggestion</option>
                                <option value="G">Demande d'être un agriculteur</option>
                                <option value="L">Demande d'être un livreur</option>
                                <option value="A">Autre</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="text-light-black fw-700">ficher</label>
                            <input type="file" name="image" class="custom-file">
                            @error('file')
                              <span style="font-size: 80%;color: #dc3545;">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="text-light-black fw-700">Message<sup class="fs-16" style="color: red">*</sup></label>
                            <textarea type="text" name="message" class="form-control @error('message') is-invalid @enderror " rows="3" placeholder="i.e est une produit internationnale">{{ old('description') }}</textarea>
                            @error('message')
                              <span style="font-size: 80%;color: #dc3545;">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    <footer class="text-sm-right">
                        <input type="hidden" name="token" value="2699eab29c6b0741fb5e170320633008">
                        <input type="hidden" name="client_id" value={{ Auth::user()->id ?? null }}>
                        <input class="btn-second btn-submit" type="submit" name="submitMessage" value="Envoyer"
                            style="margin-top: 3ch">
                    </footer>
                </section>

            </form>
            </div>
        </section>

    </section>

@endsection
