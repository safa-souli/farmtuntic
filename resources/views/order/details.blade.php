@extends('layout')

@section('content')

<section class="checkout-page section-padding bg-light-theme">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <!-- recipt -->
              <div class="recipt-sec padding-20">
                @isset($order->livraison_id)
                    
                <div class="recipt-name title u-line full-width mb-xl-20">
                  <div class="recipt-name-box">
                    <h5 class="text-light-black fw-600 mb-2">{{$livreur->client->nom}} {{$livreur->client->prenom}}({{$livreur->nom_entreprise}})</h5>
                    <p class="text-light-white ">Temps de livraison estimé</p>
                      </div>
                      
                      <h2 class="text-light-black fw-700 no-margin">{{date('g:ia', strtotime($order->livraison->delivery_on))}}-{{date('g:ia', strtotime($order->livraison->delivery_at))}}</h2>
                      <div id="add-listing-tab" class="step-app">
                          <ul class="step-steps">
                              <li @if (in_array($order->livraison->etat, array('S','O','H','L'))) class="done" @endif >
                                <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Commande envoyée<br>{{ $order->delivery_on}}</span>
                                    </a>
                              </li>
                              <li @if (in_array($order->livraison->etat, array('O','H','L' ))) class="done" @endif >
                                  <a href="javascript:void(0)"> <span class="number"></span>
                                    <span class="step-name">Dans les ouvrages</span>
                                  </a>
                              </li>
                              <li @if (in_array($order->livraison->etat, array('H','L'))) class="done" @endif >
                                <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Hors livraison</span>
                                    </a>
                              </li>
                              <li @if (in_array($order->livraison->etat, array('L'))) class="done" @endif >
                                <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Livré<br>{{$order->delivery_at}}</span>
                                    </a>
                              </li>
                          </ul>
                        </div>
                  </div>
                  @endisset
                  <div class="u-line mb-xl-20">
                    <div class="row">
                          <div class="col-lg-6">
                              <div class="recipt-name full-width padding-tb-10 pt-0">
                                  <h5 class="text-light-black fw-600">Livraison (Dès que possible) à :</h5>
                                  <span class="text-light-white ">{{ $order->user->nom }} {{$order->user->prenom}}</span>
                                  <span class="text-light-white ">{{$order->user->adresse}}</span>
                                  <span class="text-light-white ">{{$order->user->mail}}</span>
                                  <p class="text-light-white ">{{$order->user->telephone}}</p>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="recipt-name full-width padding-tb-10 pt-0">
                                  <h5 class="text-light-black fw-600">Delivery instructions</h5>
                                  <p class="text-light-white ">{{$order->description}}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="u-line mb-xl-20">
                      <div class="row">
                          <div class="col-lg-12">
                              <h5 class="text-light-black fw-600 title">Your Order <span><a href="#" class="fs-12">Print recipt</a></span></h5>
                              <p class="title text-light-white"> {{date_format($order->created_at,"F j, Y, g:i a")}} <span class="text-light-black">Order #{{$order->id}}</span>
                              </p>
                          </div>
                          <div class="col-lg-12">
                            @foreach ($products as $product)                                
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div>
                                          <a href="{{ route('product.show', $product->id)}}">
                                              <img src='{{ URL::asset("assets/img/dish/$product->image")}}' style="height: 50px;" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">({{$product->pivot->quantite}})</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">{{$product->nom}}</a></span>
                                      </div>
                                      <div class="product-value"> <span><a href="#" class="text-green">{{$product->pivot->etat}}</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">{{ $product->prix }} <sup>dt</sup></span>
                                  </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-7">
                          <div class="payment-method mb-md-40">
                              <h5 class="text-light-black fw-600">Méthode de payment</h5>
                              @if ($order->methode = 'P')
                                
                              <div class="method-type"> <i class="fab fa-paypal text-dark-white"></i>
                                <span class="text-light-white">Paypal</span>
                            </div>
                              @else
                                  
                              <div class="method-type"> <i class="fas fa-coins text-dark-white"></i>
                                  <span class="text-light-white">Monnai</span>
                              </div>
                              @endif
                          </div>
                      </div>
                      <div class="col-lg-5">
                          <div class="price-table u-line">
                              <div class="item"> <span class="text-light-white">Item subtotal:</span>
                                  <span class="text-light-white">$30.5</span>
                              </div>
                              <div class="item"> <span class="text-light-white">Delivery fee:</span>
                                  <span class="text-light-white">$30.5</span>
                              </div>
                          </div>
                          <div class="total-price padding-tb-10">
                              <h5 class="title text-light-black fw-700">Total: <span>$33.36</span></h5>
                          </div>
                      </div>
                      @isset($order->livraison)
                      <div class="col-12"><p style="font-size: 80%;color: #dc3545;"><i class="fas fa-exclamation-circle"></i> <span> Vous n'avez pas modifier votre commande il est en livraison, nous avons besoin de vous en place !</span></p></div>
                      @else
                        <div class="col-12 d-flex"> <a href="#" class="btn-first white-btn fw-600 help-btn">Modifier?</a>
                        </div>
                      @endisset
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<script>
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
  
  // Update the count down every 1 second
  var x = setInterval(function() {
  
    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("mb-days").innerHTML = days;
    document.getElementById("mb-hours").innerHTML = hours;
    document.getElementById("mb-minutes").innerHTML = minutes;
    document.getElementById("mb-seconds").innerHTML = seconds;
    
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("alert").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
    
@endsection