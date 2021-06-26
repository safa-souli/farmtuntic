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
                  <form method="POST" action="{{ route('product.update', $produit->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="step-content">
                      <div class="step-tab-panel active" id="steppanel1">
                        <div class="payment-sec">
                          <div class="section-header-left">
                            <h3 class="text-light-black header-title">Modifier {{ $produit->nom}} </h3>
                            <p class="text-light-black fw-400">Vous pouvez ajouter un produit dans un votre spécifie ferme.</p>
                            <hr>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-light-black fw-700">Information Générale</h5>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Nom du produit<sup class="fs-16" style="color: red">*</sup>
                                </label>
                                <input name="nom" class="form-control @error('nom') is-invalid @enderror" value=" {{ $produit->nom ?? old('nom')}} ">
                                @error('nom')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Prix du produit (dt) <sup class="fs-16" style="color: red">*</sup></label>
                                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror"  value="{{ $produit->prix ?? old('prix') }}">
                                @error('prix')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700"> Promotion (%) </label>
                                <input type="number" name="promotion" class="form-control  @error('promotion') is-invalid @enderror"  value="{{$produit->promotion ?? old('promotion')}}">
                                @error('promotion')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Image du produit<sup class="fs-16" style="color: red">*</sup></label>
                                <input type="file" name="image" class="custom-file">
                                @error('image')
                                  <span style="font-size: 80%;color: #dc3545;">
                                    <strong>{{$message}}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-light-black fw-700">Description<sup class="fs-16" style="color: red">*</sup></label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="i.e est une produit internationnale">{{ $produit->nom }}</textarea>
                                @error('description')
                                  <span style="font-size: 80%;color: #dc3545;">
                                    <strong>{{$message}}</strong>
                                  </span>
                                @enderror
                              </div>
                            </div>
                            <div class="step-tab-panel padding-20 active" id="steppanel1" >
                              <div class="payment-sec">
                                <div class="row field_wrapper">
                                  <div class="col-12">
                                    <h5 class="text-light-black fw-700">Information additionelle</h5>
                                    <p class="text-light-black fw-400" style="margin-top: -10px;">Pour plus de spécifications et de détails</p>
                                  </div>                        
                                  @if (isset($produit->caracteristics))
                                    @foreach ($produit->caracteristics as $caracteristic)
                                            
                                      @php
                                        $x = 0;
                                      @endphp             
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label class="text-light-black fw-700">Caratéristique du produit</label>
                                          <input name="car[nom_car][]" class="form-control" value="{{ $caracteristic['nom_car'] }}">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label class="text-light-black fw-700">La valeur de caractéristique entré
                                          </label>
                                          <input name="car[val_car][]" class="form-control" value="{{ $caracteristic['val_car'] }}">                          
                                        </div>                          
                                      </div>
                                      @php
                                          $x++;
                                      @endphp
                                    @endforeach                            
                                  @else
                                  @php
                                     $x = 0; 
                                  @endphp
                                  <div class="col-6">
                                    <div class="form-group">
                                      <label class="text-light-black fw-700">caratéristiques du produit</label>
                                      <input name="car[nom_car][0]" class="form-control" placeholder="i.e poid">
          
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <label class="text-light-black fw-700">caratéristiques du produit
                                      </label>
                                      <input name="car[val_car][0]" class="form-control" placeholder="i.e 6kg">                          
                                    </div>                          
                                  </div>
                                  @endif
                                </div>
                                <div class="col-6" style="margin-left:-2ex;">
                                  <div class="form-group">
                                  <a href="javascript:void(0);" class="btn-second btn-submit add_button" title="Add field">Ajouter caratéristique</a>
                                </div>
                                
                                  
                              </div>
                              <div class="col-md-12 text-right">
                                    <hr>
                                    <button class="btn-second btn-submit">Modifier produit</button>
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
        <div class="col-lg-3">
          <div class="advertisement-slider swiper-container h-auto">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="large-product-box p-relative pb-0">
                  <img src='{{ URL::asset("assets/img/farms/$produit->image") }}' class="img-fluid full-width" alt="image-produit">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
  
        var x =  "<?php echo $x ?>";  //Initial field counter is 1
        var fieldHTML = '<div class="col-6"><div class="form-group"><input type="text" name="caracteristics['+x+'][nom_car]" class="form-control"></div></div><div class="col-6 field_wrapper"><div class="form-group"><input type="text" name="caracteristics['+x+'][val_car]" class="form-control"></div></div>'
  
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
              x++;
              var fieldHTML = '<div class="col-6"><div class="form-group"><input type="text" name="caracteristics['+x+'][nom_car]" class="form-control"></div></div><div class="col-6 field_wrapper"><div class="form-group"><input type="text" name="caracteristics['+x+'][val_car]" class="form-control"></div></div>'
              $(wrapper).append(fieldHTML); //Add field html
            }
        });
    });
    </script>
  
@endsection
