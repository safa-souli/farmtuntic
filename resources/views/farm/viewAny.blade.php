@extends('layout')

@section('content')
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid">
      <div class="row">
        <aside class="col-lg-3 mb-md-40">
          <div class="filter-sidebar mb-5" style="margin: 50px 0 0 3ch;">
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
        <div class="col-lg-6 blog-inner clearfix">
          <div class="main-box padding-20 full-width">
            <div class="breadcrumb-wrpr">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-light-black">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ferme</li>
              </ul>
            </div>
            <div class="row">
              @foreach($fermes as $ferme)
                <div class="col-xl-6 col-lg-12 col-sm-6">
                  <article class="blog-services-wrapper main-box mb-xl-20">
                    <div class="post-img">
                      <a href="blog-details.html">
                        <img src='{{ URL::asset("assets/img/farms/$ferme->image")}}' class="img-fluid full-width" alt="ferme">
                      </a>
                    </div>
                    <div class="post-meta">
                      <div class="author-img">
                        <img src='{{ URL::asset("assets/img/user/{$ferme->client->photo}") }}' class="rounded-circle" alt="image">
                      </div>
                      <div class="author-meta">
                        <h6 class="no-margin"><a href="#" class="text-light-black">{{ $ferme->client->prenom }} {{ $ferme->client->nom }}</a></h6>
                        <p class="no-margin text-light-white"><a href="#" class="text-light-white">{{ $time->inWords($ferme->created_at) }}</p>
                      </div>
                    </div>
                    <div class="post-content padding-20">
                      <h5 class="no-margin" "><a href="blog-details.html" class="text-light-black">{{ $ferme->nom }}</a></h5>
                      <div class="rating">
                        @inject('note', 'App\Http\Controllers\FermeController')
                        @if($note->avg($ferme->id))
                          @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                            <i class="fas fa-star text-yellow"></i>
                          @endfor
                          @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                            <i class="fas fa-star-half-alt text-yellow"></i>
                          @endif
                        @endif
                        @if($note->etoiles($ferme->id))
                          <span class="text-light-black fs-12 rate-data" style="top:0;">{{ $note->etoiles($ferme->id) }} évaluations</span>
                        @endif
                      </div>
                      <br>
                      <p style="margin-top: 10px;">{{ substr($ferme->description, 0, 100) }}...</p>
                      <div class="blog-link-wrap"><a href="{{ route('farm.show', ['ferme' => $ferme]) }}" class="btn-first white-btn">Afficher plus</a>
                      </div>
                    </div>
                  </article>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <aside class="col-lg-3">
          <div class="side-bar section-padding pb-0">
            <div class="advertisement-slider swiper-container h-auto mb-xl-20">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-wrapper">
                    <div class="testimonial-box">
                      <div class="testimonial-img p-relative">
                        <a href="farm.html">
                          <img src="{{URL::asset('assets/img/blog/438x180/shop-2.jpg')}}" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="{{URL::asset('assets/img/user/user-1.png')}}" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="{{URL::asset('assets/img/svg/013-heart-1.svg')}}" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="{{URL::asset('assets/img/blog-details/40x40/user-2.png')}}" class="rounded-circle" alt="#">
                          <div class="testimonial-user-name">
                            <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                          </div>
                        </div>
                        <div class="ratings"> <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                        </div>
                        <p class="text-light-black">Delivery was fast and friendly...</p>
                        <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>

                        <a href="checkout.html" class="btn-second btn-submit">Order Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-wrapper">
                    <div class="testimonial-box">
                      <div class="testimonial-img p-relative">
                        <a href="farm.html">
                          <img src="{{URL::asset('assets/img/blog/438x180/shop-3.jpg')}}" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="{{URL::asset('assets/img/user/user-1.png')}}" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="{{URL::asset('assets/img/svg/013-heart-1.svg')}}" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="{{URL::asset('assets/img/blog-details/40x40/user-3.png')}}" class="rounded-circle" alt="farm.html">
                          <div class="testimonial-user-name">
                            <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                          </div>
                        </div>
                        <div class="ratings"> <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-wrapper">
                    <div class="testimonial-box">
                      <div class="testimonial-img p-relative">
                        <a href="farm.html">
                          <img src="{{URL::asset('assets/img/blog/438x180/shop-1.jpg')}}" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="{{URL::asset('assets/img/user/user-2.png')}}" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="{{URL::asset('assets/img/svg/013-heart-1.svg')}}" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="{{URL::asset('assets/img/blog-details/40x40/user-1.png')}}" class="rounded-circle" alt="farm.html">
                          <div class="testimonial-user-name">
                            <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                          </div>
                        </div>
                        <div class="ratings"> <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="text-yellow fs-16">
                            <i class="fas fa-star"></i>
                          </span>
                        </div>
                        <p class="text-light-black">Delivery was fast and friendly...</p>
                        <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>
                        <a href="checkout.html" class="btn-second btn-submit">Order Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div class="large-product-box mb-xl-20">
              <img src="{{URL::asset('assets/img/blog/446x1025/ad-1.jpg')}}" class="img-fluid full-width" alt="image">
              <div class="category-type overlay padding-15">
                <button class="category-btn">Most popular near you</button>
                <a href="farm.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
              </div>
            </div>
            <div class="inner-wrapper main-box">
              <div class="main-banner p-relative">
                <img src="{{URL::asset('assets/img/blog/446x501/ff-1.jpg')}}" class="img-fluid full-width main-img" alt="banner">
                <div class="overlay-2 main-padding">
                  <img src="{{URL::asset('assets/img/logo-2.jpg')}}" class="img-fluid" alt="logo">
                </div>
                <img src="{{URL::asset('assets/img/banner/burger.png')}}" class="footer-img" alt="footerimg">
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

@endsection
