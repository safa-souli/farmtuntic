@extends('layout')

@section('content')
  <style>
    .pagination > li > a,
    .pagination > li > span {
      color: #6da830;
    }

    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover,
    .pagination > li > a:hover {
      background-color: #6da830;
      border-color: #6da830;
      color: white;
    }
  </style>
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid">
      <div class="row">
        <aside class="col-lg-3 mb-md-40">
          <div class="filter-sidebar mb-5">
            <div class="sidebar-tab" style="margin-top: 50px;">
              <ul class="nav nav-pills mb-xl-20">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#filtre">Filtre</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#categorie">Catégories</a>
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
                <div class="tab-pane fade" id="categorie">
                  <div class="main-box padding-20 trending-blog-cat mb-xl-20">
                    <ul>
                      @foreach($categories as $categorie)
                        <li class="pb-xl-20 u-line mb-xl-20">
                          <a href="{{ route('product.categorie', ['categorie'=> $categorie]) }}" class="text-light-black fw-600">{{ $categorie->nom }}
                            <span class="text-light-white fw-400">
                              (
                                @inject('nbp', 'App\Http\Controllers\ProduitController')
                              {{ $nbp->count($categorie->id)}}
                              )
                            </span>
                          </a>
                        </li>
                      @endforeach
                    </ul>
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
                <li class="breadcrumb-item"><a href="index-2.html" class="text-light-black">Acceuil</a></li>
                @isset($Categorie)
                  <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="text-light-black">Produit</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $categorie->nom }}</li>
                @else
                  <li class="breadcrumb-item active" aria-current="page">Produit</li>
                @endisset
              </ul>
            </div>

            <nav aria-label="Page navigation example" style="margin-bottom: 20px;">
              <ul class="pagination justify-content-center">
                {{ $produits->links() }}
              </ul>
            </nav>
            <div id="products-box" class="row">
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
                            @for($i = 0; $i <  number_format($note->avg($produit->id)); $i++)
                              <i class="fas fa-star text-yellow"></i>
                            @endfor
                            @if(((number_format($note->avg($produit->id)) != 0) && $note->avg($produit->id) %  number_format($note->avg($produit->id))) > 0.5)
                              <i class="fas fa-star-half-alt text-yellow"></i>
                            @endif
                            <div class="rating-text">
                              <p class="text-light-white fs-12 text-right" title="Nombre d'évaluations">{{ $note->etoiles($produit->id) }} évals</p>
                            </div>
                          </div>
                        </div>
                        <div class="restaurent-product-caption-box"><span class="text-light-white">{{ substr($produit->description, 0, 100) }}...</span>
                        </div>
                        <div class="restaurent-tags-price">
                          @inject('note', 'App\Http\Controllers\PanierController')
                          <a href="{{ route('product.show', ['produit' => $produit]) }}" class="btn-first white-btn">Afficher plus</a>
                          @if($note->exist($produit->id)->isEmpty())
                            <button id="add-cart{{ $produit->id }}" class="btn-first white-btn text-light-green" title="Ajouter au panier"
                                    style="margin-left:
                              -100px;"><i class="fas fa-shopping-bag"></i></button>
                            <button id="success-cart{{ $produit->id }}" class="btn-first btn-submit text-light"
                                    title="Supprimer du panier" style="margin-left: -100px; display: none;"><i class="fas fa-shopping-bag"></i></button>
                          @else
                            <button class="btn-first btn-submit text-light" title="Supprimer du panier" style="margin-left: -100px;"><i class="fas
                            fa-shopping-bag"></i></button>
                          @endif
                          <div class="restaurent-product-price">
                            <h6 class="text-success fw-600 no-margin">{{$produit->prix}}<sup>dt</sup></h6>
                          </div>
                        </div>
                      </div>
                      <div class="restaurent-product-img">
                        <img src='{{ URL::asset("assets/img/dish/$produit->image")}}' class="img-fluid" alt="{{ $produit->nom }}">
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <nav aria-label="Page navigation example" style="margin-bottom: 20px;">
              <ul class="pagination justify-content-center">
                {{ $produits->links() }}
              </ul>
            </nav>
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
                          <img src="assets/img/blog/438x180/shop-2.jpg" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="assets/img/user/user-1.png" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="assets/img/blog-details/40x40/user-2.png" class="rounded-circle" alt="#">
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
                          <img src="assets/img/blog/438x180/shop-3.jpg" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="assets/img/user/user-1.png" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="assets/img/blog-details/40x40/user-3.png" class="rounded-circle" alt="farm.html">
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
                          <img src="assets/img/blog/438x180/shop-1.jpg" class="img-fluid full-width" alt="testimonial-img">
                        </a>
                        <div class="overlay">
                          <div class="brand-logo">
                            <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                          </div>
                          <div class="add-fav text-light-white"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                        <h5 class="fw-600"><a href="farm.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                        <div class="testimonial-user-box">
                          <img src="assets/img/blog-details/40x40/user-1.png" class="rounded-circle" alt="farm.html">
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
              <img src="assets/img/blog/446x1025/ad-1.jpg" class="img-fluid full-width" alt="image">
              <div class="category-type overlay padding-15">
                <button class="category-btn">Most popular near you</button>
                <a href="farm.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
              </div>
            </div>
            <div class="inner-wrapper main-box">
              <div class="main-banner p-relative">
                <img src="assets/img/blog/446x501/ff-1.jpg" class="img-fluid full-width main-img" alt="banner">
                <div class="overlay-2 main-padding">
                  <img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo">
                </div>
                <img src="assets/img/banner/burger.png" class="footer-img" alt="footerimg">
              </div>
              <div class="section-2 main-page main-padding">
                <div class="login-box">
                  <h3 class="text-light-black fw-700">Organza food delivery every time</h3>
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
        </aside>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function () {
      <?php foreach($produits as $produit) { ?>
      $("#add-cart<?php echo $produit->id?>").click(function () {
        $.ajax({
          type: 'get',
          url: '<?php echo url('panier/add/produit'); ?>/' + <?php echo $produit->id ?>,
          success: function () {
            $("#add-cart<?php echo $produit->id?>").hide();
            $("#success-cart<?php echo $produit->id?>").show();
          }
        });
      });
      <?php } ?>
    });
  </script>
@endsection
