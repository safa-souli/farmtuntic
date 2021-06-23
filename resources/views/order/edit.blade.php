@extends('layout')

@section('content')

<section class="checkout-page section-padding bg-light-theme">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="tracking-sec">
                  <div class="tracking-details padding-20 p-relative">
                      <h5 class="text-light-black fw-600">Great Burger</h5>
                      <span class="text-light-white">Estimated Delivery time</span>
                      <h2 class="text-light-black fw-700 no-margin">9:00pm-9:10pm</h2>
                      <div id="add-listing-tab" class="step-app">
                          <ul class="step-steps">
                              <li class="done">
                                  <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Order sent<br>8:38pm</span>
                                  </a>
                              </li>
                              <li class="active">
                                  <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">In the works</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Out of delivery</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"> <span class="number"></span>
                                      <span class="step-name">Delivered</span>
                                  </a>
                              </li>
                          </ul>
                          <button type="button" class="fullpageview text-light-black fw-600" data-modal="modal-12">Full Page View</button>
                      </div>
                  </div>
                  <div class="tracking-map">
                      <div id="pickupmap"></div>
                  </div>
              </div>
              <!-- recipt -->
              <div class="recipt-sec padding-20">
                  <div class="recipt-name title u-line full-width mb-xl-20">
                      <div class="recipt-name-box">
                          <h5 class="text-light-black fw-600 mb-2">Great Burger</h5>
                          <p class="text-light-white ">Estimated Delivery time</p>
                      </div>
                      <div class="countdown-box">
                          <div class="time-box"> <span id="mb-hours"></span>
                          </div>
                          <div class="time-box"> <span id="mb-minutes"></span>
                          </div>
                          <div class="time-box"> <span id="mb-seconds"></span>
                          </div>
                      </div>
                  </div>
                  <div class="u-line mb-xl-20">
                      <div class="row">
                          <div class="col-lg-4">
                              <div class="recipt-name full-width padding-tb-10 pt-0">
                                  <h5 class="text-light-black fw-600">Delivery (ASAP) to:</h5>
                                  <span class="text-light-white ">Jhon Deo</span>
                                  <span class="text-light-white ">Home</span>
                                  <span class="text-light-white ">314 79th St</span>
                                  <span class="text-light-white ">Rite Aid, Brooklyn, NY, 11209</span>
                                  <p class="text-light-white ">(347) 123456789</p>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="recipt-name full-width padding-tb-10 pt-0">
                                  <h5 class="text-light-black fw-600">Delivery instructions</h5>
                                  <p class="text-light-white ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing elit.</p>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="ad-banner padding-tb-10 h-100">
                                  <img src="assets/img/details/banner.jpg" class="img-fluid full-width" alt="banner-adv">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="u-line mb-xl-20">
                      <div class="row">
                          <div class="col-lg-12">
                              <h5 class="text-light-black fw-600 title">Your Order <span><a href="#" class="fs-12">Print recipt</a></span></h5>
                              <p class="title text-light-white">Nov 15, 2015 8:38pm <span class="text-light-black">Order #123456789012345</span>
                              </p>
                          </div>
                          <div class="col-lg-12">
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div class="product-img">
                                          <a href="#">
                                              <img src="assets/img/details/dish-1.jpg" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">2</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">Steak Burger</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">$20.99</span>
                                  </div>
                              </div>
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div class="product-img">
                                          <a href="#">
                                              <img src="assets/img/details/dish-2.jpg" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">2</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">Cheese Burger</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">$14.50</span>
                                  </div>
                              </div>
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div class="product-img">
                                          <a href="#">
                                              <img src="assets/img/details/dish-3.jpg" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">2</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">Double Burger</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">$15.50</span>
                                  </div>
                              </div>
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div class="product-img">
                                          <a href="#">
                                              <img src="assets/img/details/dish-4.jpg" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">2</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">Big Cheese Burger</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">$30.5</span>
                                  </div>
                              </div>
                              <div class="checkout-product">
                                  <div class="img-name-value">
                                      <div class="product-img">
                                          <a href="#">
                                              <img src="assets/img/details/dish-5.jpg" alt="#">
                                          </a>
                                      </div>
                                      <div class="product-value"> <span class="text-light-white">2</span>
                                      </div>
                                      <div class="product-name"> <span><a href="#" class="text-light-white">Cheesy Fries</a></span>
                                      </div>
                                  </div>
                                  <div class="price"> <span class="text-light-white">$5.45</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-7">
                          <div class="payment-method mb-md-40">
                              <h5 class="text-light-black fw-600">Payment Method</h5>
                              <div class="method-type"> <i class="far fa-credit-card text-dark-white"></i>
                                  <span class="text-light-white">Credit Card</span>
                              </div>
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
                              <div class="item"> <span class="text-light-white">Tax and fees:</span>
                                  <span class="text-light-white">$30.5</span>
                              </div>
                              <div class="item"> <span class="text-light-white">Driver tip:</span>
                                  <span class="text-light-white">$30.5</span>
                              </div>
                          </div>
                          <div class="total-price padding-tb-10">
                              <h5 class="title text-light-black fw-700">Total: <span>$33.36</span></h5>
                          </div>
                      </div>
                      <div class="col-12 d-flex"> <a href="#" class="btn-first white-btn fw-600 help-btn">Need Help?</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<
    
@endsection