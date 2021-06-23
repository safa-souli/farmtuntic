@extends('layout')

@section('content')

<section class="our-articles bg-light-theme section-padding pt-0">
  <div class="blog-page-banner"></div>
  <div class="container-fluid"  style="margin-top:3ex;">
    <div class="row">
      <aside class="col-lg-3 mb-md-40">
        
        <div class="advertisement-slider swiper-container h-auto swiper-container-initialized swiper-container-horizontal">
          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" style="width: 764px;">
                  <div class="large-product-box p-relative pb-0">
                      <img src="{{ URL::asset('assets/img/sidebanner-1.jpg')}}" class="img-fluid full-width" alt="image">
                      <div class="overlay padding-20">
                          <div class="tag-box">
                              <span class="text-custom-white rectangle-tag bg-gradient-red">Trending</span>
                          </div>
                          <div class="content-wrapper">
                              <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                              <a href="#" class="btn-submit btn-second">Get Deals</a>
                          </div>
                      </div>
                      <div class="overlay overlay-bg"></div>
                  </div>
              </div>
              <div class="swiper-slide swiper-slide-next" style="width: 764px;">
                  <div class="large-product-box p-relative pb-0">
                      <img src="assets/img/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
                      <div class="overlay padding-20">
                          <div class="tag-box">
                              <span class="text-custom-white rectangle-tag bg-gradient-red">New</span>
                          </div>
                          <div class="content-wrapper">
                              <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                              <a href="#" class="btn-submit btn-second">Get Deals</a>
                          </div>
                      </div>
                      <div class="overlay overlay-bg"></div>
                  </div>
              </div>
              <div class="swiper-slide" style="width: 764px;">
                  <div class="large-product-box p-relative pb-0">
                      <img src="assets/img/sidebanner-3.jpg" class="img-fluid full-width" alt="image">
                      <div class="overlay padding-20">
                          <div class="tag-box">
                              <span class="text-custom-white rectangle-tag bg-gradient-red">Trending</span>
                          </div>
                          <div class="content-wrapper">
                              <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                              <a href="#" class="btn-submit btn-second">Get Deals</a>
                          </div>
                      </div>
                      <div class="overlay overlay-bg"></div>
                  </div>
              </div>
              <div class="swiper-slide" style="width: 764px;">
                  <div class="large-product-box p-relative pb-0">
                      <img src="assets/img/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
                      <div class="overlay padding-20">
                          <div class="tag-box">
                              <span class="text-custom-white rectangle-tag bg-gradient-red">New</span>
                          </div>
                          <div class="content-wrapper">
                              <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                              <a href="#" class="btn-submit btn-second">Get Deals</a>
                          </div>
                      </div>
                      <div class="overlay overlay-bg"></div>
                  </div>
              </div>
          </div>
          <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
          <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </aside>
      <div class="col-lg-6 blog-inner clearfix">
        <div class="main-box padding-20 full-width">
          <div class="breadcrumb-wrpr">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html" class="text-light-black">Acceuil</a></li>
              <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="text-light-black">Produit</a></li>
              <li class="breadcrumb-item active" aria-current="page">Vos commandes</li>
            </ul>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Prix totale</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->total }}</td>
                    <td>{{ $time->inWords($order->created_at)}}</td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('order.edit', $order->id) }}">Modifier</a>
                            <a class="dropdown-item" href="{{ route('order.delete', $order->id) }}" onclick="return confirm('Voulez-vous sûr du supprimer?');">Supprimer</a>
                        </div>
                    </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="col-lg-3">
        <div class="advertisement-slider swiper-container h-auto swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active" style="width: 764px;">
                    <div class="large-product-box p-relative pb-0">
                        <img src="{{ URL::asset('assets/img/sidebanner-1.jpg')}}" class="img-fluid full-width" alt="image">
                        <div class="overlay padding-20">
                            <div class="tag-box">
                                <span class="text-custom-white rectangle-tag bg-gradient-red">Trending</span>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                                <a href="#" class="btn-submit btn-second">Get Deals</a>
                            </div>
                        </div>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next" style="width: 764px;">
                    <div class="large-product-box p-relative pb-0">
                        <img src="assets/img/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
                        <div class="overlay padding-20">
                            <div class="tag-box">
                                <span class="text-custom-white rectangle-tag bg-gradient-red">New</span>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                                <a href="#" class="btn-submit btn-second">Get Deals</a>
                            </div>
                        </div>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="width: 764px;">
                    <div class="large-product-box p-relative pb-0">
                        <img src="assets/img/sidebanner-3.jpg" class="img-fluid full-width" alt="image">
                        <div class="overlay padding-20">
                            <div class="tag-box">
                                <span class="text-custom-white rectangle-tag bg-gradient-red">Trending</span>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                                <a href="#" class="btn-submit btn-second">Get Deals</a>
                            </div>
                        </div>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="width: 764px;">
                    <div class="large-product-box p-relative pb-0">
                        <img src="assets/img/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
                        <div class="overlay padding-20">
                            <div class="tag-box">
                                <span class="text-custom-white rectangle-tag bg-gradient-red">New</span>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="text-custom-white">50% Discount on All New Farms</h3>
                                <a href="#" class="btn-submit btn-second">Get Deals</a>
                            </div>
                        </div>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div> 
    </div>
  </div>
</section>
@endsection