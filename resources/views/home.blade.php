@extends('layout')

@section('content')

  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="banner-1 p-relative">
    <img src="assets/img/banner/banner-3.jpg" class="img-fluid full-width" alt="Banner">
    <div class="transform-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="content-wrapper bg-white padding-20">
              <div class="content-box padding-tb-10">
                <h2 class="text-light-black fw-700">Find Fresh Product Farms Near You and Order Online For Free.</h2>
                <label class="text-light-black fw-700">Find a location near you</label>
                <div class="input-group row">
                  <div class="input-group2 col-xl-8">
                    <input type="search" class="form-control form-control-submit" placeholder="Enter street address or zip code"
                           value="1246 57th St, Brooklyn, NY, 11219">
                    <div class="input-group-prepend">
                      <button class="input-group-text text-light-green"><i class="fab fa-telegram-plane"></i>
                      </button>
                    </div>
                  </div>
                  <div class="input-group-append col-xl-4">
                    <button class="btn-second btn-submit full-width" type="button">Find food</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay overlay-bg"></div>
  </section>
  <!-- banner-bottom -->
  <section class="section-padding banner-bottom-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="infor-box mb-md-40">
            <div class="infor-box-wrapper">
              <div class="icon-box">
                <i class="flaticon-truck"></i>
              </div>
              <div class="text-box">
                <h6 class="text-light-black">Free Shipping</h6>
                <span class="text-light-white">With $50 or more orders</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="infor-box mb-md-40">
            <div class="infor-box-wrapper">
              <div class="icon-box">
                <i class="flaticon-wallet-1"></i>
              </div>
              <div class="text-box">
                <h6 class="text-light-black">Free Refund</h6>
                <span class="text-light-white">100% Refund within 3 days</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="infor-box">
            <div class="infor-box-wrapper">
              <div class="icon-box">
                <i class="flaticon-help"></i>
              </div>
              <div class="text-box">
                <h6 class="text-light-black">Support 24x7</h6>
                <span class="text-light-white">Call us anytime you want</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-bottom -->
  <!-- Browse by category -->
  <section class="browse-cat u-line section-padding bg-light-green">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-custom-white header-title title">Browse by cuisine <span class="fs-14"><a href="farm.html" class="text-white">See all farm</a></span></h3>
          </div>
        </div>
        <div class="col-12">
          <div class="category-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-1.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Garlic</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-2.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Strawberry</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-3.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Cuccumber</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-4.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Bannana</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-5.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Brockley</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-6.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Carrot</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-7.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Pineapple</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="farm.html" class="categories">
                  <div class="icon text-custom-white bg-light-green ">
                    <img src="assets/img/farms/125x125/cuisine-8.jpg" class="rounded-circle" alt="categories">
                  </div>
                  <span class="text-custom-white cat-name">Mango</span>
                </a>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Browse by category -->
  <!-- your previous order -->
  <section class="section-padding sale-products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-light-black header-title title">Your previous orders <span class="fs-14"><a href="order-details.html">See all past orders</a></span></h3>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box mb-xl-20">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-1.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Parsely</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                <span>
                  <i class="fas fa-star text-yellow"></i>
                  <i class="fas fa-star text-yellow"></i>
                  <i class="fas fa-star text-yellow"></i>
                  <i class="fas fa-star text-yellow"></i>
                  <i class="fas fa-star text-yellow"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box mb-xl-20">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-2.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Palmitto</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                            <span>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                            </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box mb-xl-20">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-3.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Dragon Fruit</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                            <span>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                            </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box mb-md-20">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-9.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Green Onion</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                            <span>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                            </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box mb-xs-20">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-5.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Radish</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                            <span>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                            </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="product-item main-box">
            <div class="img">
              <a href="#">
                <img src="assets/img/dish/150x151/dish-6.jpg" alt="image">
              </a> <span><a href="#">
                            <i class="fas fa-shopping-bag"></i></a></span>
            </div>
            <div class="product-info">
              <h5><a href="#" class="text-light-black">Malana</a></h5>
              <p class="text-light-green fw-600">$90 <span class="line-through text-light-white fs-16">$180</span><span
                  class="save-price text-light-green fs-12">save $90</span>
              </p>
              <div class="rating">
                            <span>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                                <i class="fas fa-star text-yellow"></i>
                            </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- your previous order -->
  <div class="container">
    <!-- advertisement banner-->
    <div class="row">
      <div class="col-12">
        <div id="banner-adv2" class="banner-adv2">
          <img src="assets/img/farms/1110x100/vbanner-2.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img
              src="assets/img/tag.jpg" alt="logo"> <a href="farm.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
          <span class="close-banner"></span>
          <div class="overlay overlay-bg"></div>
        </div>
      </div>
    </div>
    <!-- advertisement banner-->
  </div>
  <!-- Explore collection -->
  <section class="ex-collection section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-light-black header-title title">Explore our collections</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="ex-collection-box mb-xl-20">
            <img src="assets/img/farms/540x300/collection-1.jpg" class="img-fluid full-width" alt="image">
            <div class="overlay overlay-bg"></div>
            <div class="transform-center">
              <div class="ex-collection-box-text padding-15">
                <h6 class="text-light-green">Organic</h6>
                <h4 class="text-custom-white">Jersey Frams</h4>
                <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <button class="category-btn">40% Off</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="ex-collection-box mb-xl-20">
            <img src="assets/img/farms/540x300/collection-2.jpg" class="img-fluid full-width" alt="image">
            <div class="overlay overlay-bg"></div>
            <div class="transform-center">
              <div class="ex-collection-box-text padding-15">
                <h6 class="text-light-green">Organic</h6>
                <h4 class="text-custom-white">Joe's Farm</h4>
                <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <button class="category-btn">40% Off</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="ex-collection-box mb-sm-20">
            <img src="assets/img/farms/540x300/collection-3.jpg" class="img-fluid full-width" alt="image">
            <div class="overlay overlay-bg"></div>
            <div class="transform-center">
              <div class="ex-collection-box-text padding-15">
                <h6 class="text-light-green">Organic</h6>
                <h4 class="text-custom-white">NYC Farms</h4>
                <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <button class="category-btn">40% Off</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="ex-collection-box">
            <img src="assets/img/farms/540x300/collection-4.jpg" class="img-fluid full-width" alt="image">
            <div class="overlay overlay-bg"></div>
            <div class="transform-center">
              <div class="ex-collection-box-text padding-15">
                <h6 class="text-light-green">Organic</h6>
                <h4 class="text-custom-white">Fresh Big Farm</h4>
                <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <button class="category-btn">40% Off</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Explore collection -->
  <!-- Features Listing -->
  <section class="ex-collection section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-light-black header-title title">Features farms around You</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="large-product-box mb-xl-20 p-relative">
            <img src="assets/img/farms/255x587/Banner-12.jpg" class="img-fluid full-width" alt="image">
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-23.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Great Burger</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">American, Fast Food</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/006-chili.svg" alt="tag">
                    </span>

                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-2.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Flavor Town</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                        2.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-3.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Big Bites</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Pizzas, Fast Food</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-4.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Smile N’ Delight</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Desserts, Beverages</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-5.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          20%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Lil Johnny’s</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                        2.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Continental & Mexican</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-6.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="text-custom-white type-tag bg-gradient-orange">
                        NEW
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Choice Foods</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Indian, Chinese, Tandoor</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- advertisement banner-->
      <div class="row">
        <div class="col-12">
          <div class="banner-adv2 mb-xl-20">
            <img src="assets/img/farms/1110x100/vbanner-2.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img
                src="assets/img/tag.jpg" alt="logo">
                            <a href="farm.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
            <span class="close-banner"></span>
            <div class="overlay overlay-bg"></div>
          </div>
        </div>
      </div>
      <!-- advertisement banner-->
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-7.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Great Burger</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">American, Fast Food</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/006-chili.svg" alt="tag">
                    </span>

                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-8.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Flavor Town</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                        2.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-9.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Big Bites</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Pizzas, Fast Food</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/004-leaf.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-10.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black "> Smile N’ Delight</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Desserts, Beverages</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-24.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          20%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black ">Lil Johnny’s</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                        2.1
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Continental & Mexican</p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product-box mb-xl-20">
                <div class="product-img">
                  <a href="farm.html">
                    <img src="assets/img/farms/255x150/shop-12.jpg" class="img-fluid full-width" alt="product-img">
                  </a>
                  <div class="overlay">
                    <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                      <span class="text-custom-white type-tag bg-gradient-orange">
                        NEW
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-caption">
                  <div class="title-box">
                    <h6 class="product-title"><a href="farm.html" class="text-light-black ">Choice Foods</a></h6>
                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                    </div>
                  </div>
                  <p class="text-light-white">Indian, Chinese, Tandoor </p>
                  <div class="product-details">
                    <div class="price-time"><span class="text-light-black time">30-40 min</span>
                      <span class="text-light-white price">$10 min</span>
                    </div>
                    <div class="rating"> <span>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                        <i class="fas fa-star text-yellow"></i>
                      </span>
                      <span class="text-light-white text-right">4225 ratings</span>
                    </div>
                  </div>
                  <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/008-protein.svg" alt="tag">
                    </span>
                    <span class="text-custom-white square-tag">
                      <img src="assets/img/svg/009-lemon.svg" alt="tag">
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="large-product-box mb-xl-20 p-relative">
            <img src="assets/img/farms/255x587/Banner-1.jpg" class="img-fluid full-width" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Listing -->
  <!-- footer -->
  <div class="footer-top section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
            <span class="text-light-black">100% Payment<br>Secured</span>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
            <span class="text-light-black">Support lots<br> of Payments</span>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-help"></i></span>
            <span class="text-light-black">24 hours / 7 days<br>Support</span>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-truck"></i></span>
            <span class="text-light-black">Free Delivery<br>with $50</span>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-guarantee"></i></span>
            <span class="text-light-black">Best Price<br>Guaranteed</span>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
          <div class="icon-box"><span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
            <span class="text-light-black">Mobile Apps<br>Ready</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
