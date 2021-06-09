@extends('layout')
@section('content')
  <!-- restaurent top -->
  <div class="page-banner p-relative smoothscroll" id="menu">
    <img src='{{ URL::asset("assets/img/farms/$ferme->image")}}' class="img-fluid full-width" alt="ferme">
    <div class="overlay-2">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="back-btn">
              <button type="button" class="text-light-green"><i class="fas fa-chevron-left"></i>
              </button>
            </div>
          </div>
          <div class="col-6">
            <div class="tag-share"> <span class="text-light-green share-tag">
                <i class="fas fa-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- restaurent top -->
  <!-- restaurent details -->
  <section class="restaurent-details  u-line">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading padding-tb-10">
            <h3 class="text-light-black title fw-700 no-margin">{{ $ferme->nom }}</h3>
            <p class="text-light-black sub-title no-margin">{{ $ferme->adresse }}
            </p>
            <div class="head-rating">
              <div class="rating">
                @inject('note', 'App\Http\Controllers\FermeController')
                @if($note->avg($ferme->id))
                  @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                    <i class="fas fa-star text-yellow"></i>
                  @endfor
                  @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                    <i class="fas fa-star-half-alt text-yellow"></i>
                  @endif
                  <span class="text-light-black fs-12 rate-data">{{ $note->etoiles($ferme->id) }} évaluations</span>
                @endif
              </div>
              <div class="product-review">
                <div class="restaurent-details-mob">
                  <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                    <span class="text-dark-white">info</span>
                  </a>
                </div>
                <div class="restaurent-details-mob">
                  <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                    <span class="text-dark-white">info</span>
                  </a>
                </div>
                <div class="restaurent-details-mob">
                  <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                    <span class="text-dark-white">info</span>
                  </a>
                </div>
                <div class="restaurent-details-mob">
                  <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                    <span class="text-dark-white">info</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="restaurent-logo">
            <img src='{{ URL::asset("assets/img/user/{$ferme->client->photo}")}}' class="img-fluid" title="{{ $ferme->client->prenom }} {{ $ferme->client->nom }}">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- restaurent details -->
  <!-- restaurent tab -->
  <div class="restaurent-tabs u-line">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="restaurent-menu scrollnav">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active text-light-white fw-700" data-toggle="pill" href="#menu">Menu</a>
              </li>
              <li class="nav-item"><a class="nav-link text-light-white fw-700" data-toggle="pill" href="#about">à propos</a>
              </li>
              <li class="nav-item"><a class="nav-link text-light-white fw-700" data-toggle="pill" href="#review">Avis</a>
              </li>
              <li class="nav-item"><a class="nav-link text-light-white fw-700" data-toggle="pill" href="#mapgallery">Map & Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- restaurent tab -->
  <!-- restaurent meals -->
  <section class="section-padding restaurent-meals bg-light-theme">
    <div class="container-fluid">
      <div class="row">
        <aside class="col-lg-3 mb-md-40">
          <div class="filter-sidebar mb-5">
            <div class="sidebar-tab">
              <ul class="nav nav-pills mb-xl-20">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#filtre">Filtre</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="filtre">
                  <div class="siderbar-innertab">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#delivery-restaurents">Delivery</a>
                      </li>
                      <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#pickup-restaurents">Pickup</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="delivery-restaurents">
                      <p class="text-light-black delivery-type p-relative">Delivery my food <a href="#">Today, ASAP</a>
                      </p>
                      <div class="filters">
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseOne">
                              Feature
                            </a>
                          </div>
                          <div id="deliverycollapseOne" class="collapse show">
                            <div class="card-body">
                              <form>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(3)</span>
                                </label>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Order Tracking <span class="text-light-white">(6)</span>
                                </label>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [6:05am] <span class="text-light-white">(10)</span>
                                </label>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Free Delivery <span class="text-light-white">(6)</span>
                                </label>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseTwo">
                              Rating
                            </a>
                          </div>
                          <div id="deliverycollapseTwo" class="collapse show">
                            <div class="card-body">
                              <div class="rating">
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseThree">
                              Price
                            </a>
                          </div>
                          <div id="deliverycollapseThree" class="collapse show">
                            <div class="card-body">
                              <div class="rating">
                                <button class="text-success">$</button>
                                <button class="text-success">$$</button>
                                <button class="text-success">$$$</button>
                                <button class="text-success">$$$$</button>
                                <button class="text-success">$$$$$</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseFour">
                              Delivery time
                            </a>
                          </div>
                          <div id="deliverycollapseFour" class="collapse show">
                            <div class="card-body">
                              <div class="delivery-slider">
                                <input type="text" class="delivery-range-slider" value=""/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pickup-restaurents">
                      <p class="text-light-black delivery-type p-relative">Pick my food <a href="#">Today, ASAP</a>
                      </p>
                      <div class="filters">
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseOne">
                              Feature
                            </a>
                          </div>
                          <div id="pickupcollapseOne" class="collapse show">
                            <div class="card-body">
                              <form>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Coupons <span class="text-light-white">(1)</span>
                                </label>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(26)</span>
                                </label>
                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [7:08am] <span class="text-light-white">(236)</span>
                                </label>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseTwo">
                              Rating
                            </a>
                          </div>
                          <div id="pickupcollapseTwo" class="collapse show">
                            <div class="card-body">
                              <div class="rating">
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseThree">
                              Price
                            </a>
                          </div>
                          <div id="pickupcollapseThree" class="collapse show">
                            <div class="card-body">
                              <div class="rating">
                                <button class="text-success">$</button>
                                <button class="text-success">$$</button>
                                <button class="text-success">$$$</button>
                                <button class="text-success">$$$$</button>
                                <button class="text-success">$$$$$</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header"><a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseFour">
                              Distance
                            </a>
                          </div>
                          <div id="pickupcollapseFour" class="collapse show">
                            <div class="card-body">
                              <div class="delivery-slider">
                                <input type="text" class="distance-range-slider" value=""/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="col-xl-6 col-lg-6">
          <div class="row">
            <div class="col-lg-12 restaurent-meal-head mb-md-40">
              <div class="card">
                <div id="collapseOne" class="collapse show">
                  <div class="card-body no-padding">
                    <div class="row">
                      @foreach($produits as $produit)
                        <div class="col-lg-12">
                          <div class="restaurent-product-list">
                            <div class="restaurent-product-detail">
                              <div class="restaurent-product-left">
                                <div class="restaurent-product-title-box">
                                  <div class="restaurent-product-box">
                                    <div class="restaurent-product-title">
                                      <h6 class="mb-2 text-light-black">{{ $produit->nom }}</h6>
                                      <p class="text-light-white">{{ $time->inWords($produit->created_at) }}</p>
                                    </div>
                                    <div class="restaurent-product-label">
                                      <span class="rectangle-tag bg-gradient-red text-custom-white">10%</span>
                                    </div>
                                  </div>
                                  <div class="restaurent-product-rating text-right">
                                    @inject('note', 'App\Http\Controllers\ProduitController')
                                    @if($note->avg($ferme->id))
                                      @for($i = 0; $i <  number_format($note->avg($produit->id)); $i++)
                                        <i class="fas fa-star text-yellow"></i>
                                      @endfor
                                      @if(($note->avg($produit->id) %  number_format($note->avg($produit->id))) > 0.5)
                                        <i class="fas fa-star-half-alt text-yellow"></i>
                                      @endif
                                      <div class="rating-text">
                                        <p class="text-light-white fs-12 text-right" title="Nombre d'évaluations">{{ $note->etoiles($produit->id) }} évals</p>
                                      </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="restaurent-product-caption-box"><span class="text-light-white">{{ substr($produit->description, 0, 100) }}...</span>
                                </div>
                                <div class="restaurent-tags-price">
                                  <a href="{{ route('product.show', ['produit' => $produit]) }}" class="btn-first white-btn">Afficher plus</a>
                                  <div class="restaurent-product-price">
                                    <h6 class="text-success fw-600 no-margin">{{$produit->prix}}<sup>dt</sup></h6>
                                  </div>
                                </div>
                              </div>
                              <div class="restaurent-product-img">
                                <img src='{{ URL::asset("assets/img/dish/$produit->image")}}' class="img-fluid" alt="#">
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3">
          <div class="sidebar">
            <div class="video-box mb-xl-20">
              <div class="video_wrapper video_wrapper_full js-videoWrapper">
                <iframe class="videoIframe js-videoIframe" src="https://www.youtube.com/embed/AdZrEIo6UYU"
                        data-src="https://www.youtube.com/embed/AdZrEIo6UYU?autoplay=1&amp;rel=0" allow="autoplay"></iframe>
                <div class="videoPoster js-videoPoster">
                  <div class="video-inner">
                    <i class="far fa-play-circle"></i>
                  </div>
                </div>
              </div>
              <div class="discount-box main-box padding-tb-10">
                <div class="discount-price padding-10">
                  <div class="left-side">
                    <h6 class="text-light-black fw-600 no-margin">Watch Now and get 50% discount</h6>
                    <p class="text-light-white no-margin">The hung-over foody (2019)</p>
                  </div>
                  <div class="right-side justify-content-end">
                    <div class="dis-text">
                      <span class="badge bg-light-green text-custom-white fw-400">Discount</span>
                      <h4 class="text-light-black no-margin">50%</h4>
                    </div>
                    <a href="restaurent.html">
                      <img src="assets/img/logo-3.jpg" class="img-fluid" alt="logo">
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <div class="cart-detail-box">
              <div class="card">
                <div class="card-header padding-15 fw-700">Your Order</div>
                <div class="card-body no-padding" id="scrollstyle-4">
                  <div class="cat-product-box">
                    <div class="cat-product">
                      <div class="cat-name">
                        <a href="#">
                          <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Fresh Free Range Egss</p> <span class="text-light-white fw-700">small, Oragnic Fresh</span>
                        </a>
                      </div>
                      <div class="delete-btn">
                        <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                        </a>
                      </div>
                      <div class="price"><a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="cat-product-box">
                    <div class="cat-product">
                      <div class="cat-name">
                        <a href="#">
                          <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Fresh Free Range Egss</p> <span class="text-light-white fw-700">small, Oragnic Fresh</span>
                        </a>
                      </div>
                      <div class="delete-btn">
                        <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                        </a>
                      </div>
                      <div class="price"><a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="cat-product-box">
                    <div class="cat-product">
                      <div class="cat-name">
                        <a href="#">
                          <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Fresh Free Range Chicken</p> <span class="text-light-white fw-700">small, Oragnic Fresh</span>
                        </a>
                      </div>
                      <div class="delete-btn">
                        <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                        </a>
                      </div>
                      <div class="price"><a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="cat-product-box">
                    <div class="cat-product">
                      <div class="cat-name">
                        <a href="#">
                          <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Fresh Free Egss</p> <span class="text-light-white fw-700">small, Oragnic Fresh</span>
                        </a>
                      </div>
                      <div class="delete-btn">
                        <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                        </a>
                      </div>
                      <div class="price"><a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item-total">
                    <div class="total-price border-0"><span class="text-dark-white fw-700">Items subtotal:</span>
                      <span class="text-dark-white fw-700">$9.00</span>
                    </div>
                    <div class="empty-bag padding-15 fw-700"><a href="#">Empty bag</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer padding-15"><a href="checkout.html" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- restaurent meals -->
  <!-- restaurent about -->
  <section class="section-padding restaurent-about smoothscroll" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="text-light-black fw-700 title">{{ $ferme->nom }}</h3>
          <p class="text-light-white no-margin">{{ $ferme->description }}</p>
          <ul class="about-restaurent">
            <li><i class="fas fa-map-marker-alt"></i>
              <span>
                <a href="#" class="text-light-white">{{ $ferme->adresse }} </a>
              </span>
            </li>
            <li><i class="fas fa-phone-alt"></i>
              <span><a href="tel:" class="text-light-white">{{ $ferme->telephone }}</a></span>
            </li>
            <li><i class="far fa-envelope"></i>
              <span><a href="mailto:" class="text-light-white">{{ $ferme->email }}</a></span>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="restaurent-schdule">
            <div class="card">
              <div class="card-header text-light-white fw-700 fs-16">Hours</div>
              <div class="card-body">
                <div class="schedule-box">
                  <div class="day text-light-black">Monday</div>
                  <div class="time text-light-black">Delivery: 7:00am - 10:59pm</div>
                </div>
                <div class="collapse" id="schdule">
                  <div class="schedule-box">
                    <div class="day text-light-black">Tuesday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                  <div class="schedule-box">
                    <div class="day text-light-black">Wednesday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                  <div class="schedule-box">
                    <div class="day text-light-black">Thursday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                  <div class="schedule-box">
                    <div class="day text-light-black">Friday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                  <div class="schedule-box">
                    <div class="day text-light-black">Saturday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                  <div class="schedule-box">
                    <div class="day text-light-black">Sunday</div>
                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                  </div>
                </div>
              </div>
              <div class="card-footer"><a class="fw-500 collapsed" data-toggle="collapse" href="#schdule">See the full schedule</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- restaurent about -->
  <!-- map gallery -->
  <div class="map-gallery-sec section-padding bg-light-theme smoothscroll" id="mapgallery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="main-box">
            <div class="row">
              <div class="col-md-6 map-pr-0">
                <iframe id="locmap"
                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
              <div class="col-md-6 map-pl-0">
                <div class="gallery-box padding-10">
                  <ul class="gallery-img">
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-1.jpg" title="Image title">
                        <img src="assets/img/gallery/img-1.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-2.jpg" title="Image title">
                        <img src="assets/img/gallery/img-2.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-3.jpg" title="Image title">
                        <img src="assets/img/gallery/img-3.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-4.jpg" title="Image title">
                        <img src="assets/img/gallery/img-4.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-5.jpg" title="Image title">
                        <img src="assets/img/gallery/img-5.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                    <li>
                      <a class="image-popup" href="assets/img/gallery/img-6.jpg" title="Image title">
                        <img src="assets/img/gallery/img-6.jpg" class="img-fluid full-width" alt="9.jpg"/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- map gallery -->

  <!-- restaurent reviews -->
  <section class="section-padding restaurent-review smoothscroll" id="review">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-light-black header-title title">Avis de {{ $ferme->nom }}</h3>
          </div>
          @isset($ferme->avis)
            <div id="my-notice">
              <div class="restaurent-rating mb-xl-20">
                <div class="star">
              <span class="text-yellow fs-16">
                @inject('note', 'App\Http\Controllers\FermeController')
                @if($note->avg($ferme->id))
                  @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                    <i class="fas fa-star text-yellow"></i>
                  @endfor
                  @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                    <i class="fas fa-star-half-alt text-yellow"></i>
                  @endif
                @endif
              </span>
                </div>
                <span class="fs-12 text-light-black">{{ $note->etoiles($ferme->id) }} évaluations</span>
              </div>
              <p class="text-light-black mb-xl-20">Exprimez votre opinion sur la {{ $ferme->nom }}:</p>
              <div class="u-line" style="margin-bottom: 30px;"></div>
              @isset($ferme_avis)
                <?php $user = Auth::user()?>
                <div id="notice-box" class="review-box">
                  <div class="review-user">
                    <div class="review-user-img">
                      <img src='{{ URL::asset("assets/img/user/$user->photo") }}' class="rounded-circle" alt="#">
                      <div class="reviewer-name">
                        <p class="text-light-black fw-600">{{ $user->prenom }} {{ $user->nom }}
                          <small class="text-light-white fw-500">{{ $user->adresse }}</small>
                        </p>
                        <div class="ratings">
                        <span class="text-yellow fs-16">
                          @for($i = 0; $i <  $ferme_avis->etoiles; $i++)
                            <i class="fas fa-star text-yellow"></i>
                          @endfor
                        </span>
                          <span class="ml-2 text-light-white">{{ $time->inWords($ferme_avis->created_at) }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="review-date">
                    <span class="text-light-white">
                      <a id="notice-delete">Supprimer </a>
                    </span>
                    </div>
                    <div class="review-date"><span class="text-light-white"><a id="notice-edit">Modifier</a></span></div>
                  </div>
                  <p class="text-light-black">{{ $ferme_avis->avis }}</p>
                </div>
                <div id="notice-div" class="comment-form" style="display: none;">
                  <form id="notice-form">
                    @csrf
                    <div class="row">
                      @auth
                        <?php $photo = Auth::user()->photo; ?>
                        <div class="review-user col-md-1">
                          <div class="review-user-img">
                            <img src='{{ URL::asset("assets/img/user/$photo") }}' class="rounded-circle" alt="profil-user">
                          </div>
                        </div>
                      @endauth
                      <div class="col-md-6">
                        <div class="form-group">
                          <fieldset class="rating" style="margin: -10px 0 10px 0;"><input type="radio" id="star5" name="rating"
                                                                                          value="5" {{ ($ferme_avis->etoiles == 5) ?  'checked': '' }} />
                            <label class="full" for="star5" title="Impressionnant - 5 stars"></label>
                            <input type="radio" id="star4half" name="etoiles" value="4.5" {{ ($ferme_avis->etoiles == 4.5) ?  'checked': '' }}/>
                            <label class="half" for="star4half" title="Assez bien - 4.5 stars"></label>
                            <input type="radio" id="star4" name="etoiles" value="4" {{ ($ferme_avis->etoiles == 4) ?  'checked': '' }} />
                            <label class="full" for="star4" title="Assez bien - 4 stars"></label>
                            <input type="radio" id="star3half" name="etoiles" value="3.5" {{ ($ferme_avis->etoiles == 3.5) ?  'checked': '' }} />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="etoiles" value="3" {{ ($ferme_avis->etoiles == 3) ?  'checked': '' }}/>
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="etoiles" value="2.5" {{ ($ferme_avis->etoiles == 2.5) ?  'checked': '' }}/>
                            <label class="half" for="star2half" title="Un peu mauvais- 2.5 stars"></label>
                            <input type="radio" id="star2" name="etoiles" value="2" {{ ($ferme_avis->etoiles == 2) ?  'checked': '' }}/>
                            <label class="full" for="star2" title="Un peu mauvais - 2 stars"></label>
                            <input type="radio" id="star1half" name="etoiles" value="1.5" {{ ($ferme_avis->etoiles == 1.5) ?  'checked': '' }}/>
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="etoiles" value="1" {{ ($ferme_avis->etoiles == 1) ?  'checked': '' }} />
                            <label class="full" for="star1" title="mauvais - 1 star"></label>
                            <input type="radio" id="starhalf" name="etoiles" value="0.5" {{ ($ferme_avis->etoiles == 0.5) ?  'checked': '' }}/>
                            <label class="half" for="starhalf" title="mauvais - 0.5 stars"></label>
                          </fieldset>
                          <textarea class="form-control form-control-submit" name="avis" rows="2" placeholder="Votre avis" required>{{ $ferme_avis->avis }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="form-group"></div>
                          <input type="hidden" name="ferme_id" value="{{ $ferme->id }}">
                          <button type="submit" class="btn-second btn-submit" style="margin-top: 10px">Valider</button>
                          <button id="notice-cancel" type="button" class="btn-second btn-submit" style="margin-top: 10px">Annuler</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              @else
                <div id="notice-div-store" class="comment-form">
                  <form id="notice-form-add">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      @auth
                        <?php $photo = Auth::user()->photo; ?>
                        <div class="review-user col-md-1">
                          <div class="review-user-img">
                            <img src='{{ URL::asset("assets/img/user/$photo") }}' class="rounded-circle" alt="profil-user">
                          </div>
                        </div>
                      @endauth
                      <div class="col-md-6">
                        <div class="form-group">
                          <fieldset class="rating" style="margin: -10px 0 10px 0;"><input type="radio" id="star5" name="rating" value="5"/>
                            <label class="full" for="star5" title="Impressionnant - 5 stars"></label>
                            <input type="radio" id="star4half" name="etoiles" value="4.5"/>
                            <label class="half" for="star4half" title="Assez bien - 4.5 stars"></label>
                            <input type="radio" id="star4" name="etoiles" value="4"/>
                            <label class="full" for="star4" title="Assez bien - 4 stars"></label>
                            <input type="radio" id="star3half" name="etoiles" value="3.5"/>
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="etoiles" value="3"/>
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="etoiles" value="2.5"/>
                            <label class="half" for="star2half" title="Un peu mauvais- 2.5 stars"></label>
                            <input type="radio" id="star2" name="etoiles" value="2"/>
                            <label class="full" for="star2" title="Un peu mauvais - 2 stars"></label>
                            <input type="radio" id="star1half" name="etoiles" value="1.5"/>
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="etoiles" value="1"/>
                            <label class="full" for="star1" title="mauvais - 1 star"></label>
                            <input type="radio" id="starhalf" name="etoiles" value="0.5"/>
                            <label class="half" for="starhalf" title="mauvais - 0.5 stars"></label>
                          </fieldset>
                          <textarea class="form-control form-control-submit" name="avis" rows="2" placeholder="Votre avis" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="form-group"></div>
                          <input type="hidden" name="ferme_id" value="{{ $ferme->id }}">
                          <button type="submit" class="btn-second btn-submit" style="margin-top: 10px">Valider</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              @endisset
              <p class="text-light-black mb-xl-20">Voici ce que les gens avis:</p>
              <div class="u-line"></div>
            </div>
            @foreach($ferme->avis as $avis)
              <div class="review-box u-line">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src='{{ URL::asset("assets/img/user/{$avis->photo}") }}' class="rounded-circle" alt="#">
                    <div class="reviewer-name">
                      <p class="text-light-black fw-600">{{ $avis->prenom }} {{ $avis->nom }}<small
                          class="text-light-white fw-500">{{ $avis->adresse }}</small>
                      <div class="ratings">
                        <span class="text-yellow fs-16">
                          @for($i = 0; $i <  $avis->pivot->etoiles; $i++)
                            <i class="fas fa-star text-yellow"></i>
                          @endfor
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="review-date"><span class="text-light-white">{{ $time->inWords($avis->pivot->created_at) }}</span>
                  </div>
                </div>
                <p class="text-light-black">{{ $avis->pivot->avis }}</p>
              </div>
            @endforeach
          @else
            <div class="col-md-12">
              <div class="col-12">
                <div class="review-img">
                  <img src="{{ URL::asset('assets/img/review-footer.png') }}" class="img-fluid" alt="#">
                  <div class="review-text">
                    <h2 class="text-light-white mb-2 fw-600">Soyez l'un des premiers à donner votre avis</h2>
                    <p class="text-light-white">Commandez maintenant et écrivez une critique pour donner aux autres le scoop intérieur.</p>
                  </div>
                </div>
              </div>
            </div>
          @endisset
        </div>
      </div>
    </div>
  </section>
  <!-- restaurent reviews -->
  <script>
    $(document).ready(function () {
      <?php if(isset($ferme_avis)) { ?>
      $(document).on("click", "#notice-edit", function () {
        $("#notice-box").hide();
        $("#notice-div").show();
      });
      $(document).on("click", "#notice-cancel", function () {
        $("#notice-div").hide();
        $("#notice-box").show();
      });
      $(document).on("click", "#notice-delete", function () {
        if (confirm("Voulez-vous sûr de supprimer?")) {
          $.ajax({
            type: 'GET',
            url: '<?php echo url('ferme/delete/avis/'); ?>/' + '<?php echo $ferme_avis->id; ?>',
            success: function () {
              $("#review").load(" #review");
            },
            error: function () {
              alert("delete error");
            }
          });
        } else return false;
      });
      $(document).on("submit", "#notice-form", function (e) {
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: '<?php echo url('ferme/update/avis/'); ?>/' + '<?php echo $ferme_avis->id; ?>',
          data: $("#notice-form").serialize(),
          success: function () {
            $("#review").load(" #review");
          },
          error: function () {
            alert("update error");
          }
        });
      });
      <?php } else {?>
      $(document).on("submit", "#notice-form-add", function (e) {
        e.preventDefault();
        <?php if(isset(Auth::user()->id)) { ?>
        $.ajax({
          type: 'POST',
          url: '<?php echo url('ferme/donner/avis'); ?>',
          data: $("#notice-form-add").serialize(),
          success: function () {
            $("#review").load(" #review");
          },
          error: function (error) {
            console.log(error);
          }
        });
        <?php } else { ?>
          location.href = '/login';
        <?php } ?>
      });
      <?php } ?>
    });
  </script>
@endsection
