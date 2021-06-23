@extends('layout')

@section('content')
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid"  style="margin:0 10ex 0 7ex;">
      <div class="row">
        <aside class="col-lg-3 mb-md-40">
          <div class="filter-sidebar mb-5">
            <div class="sidebar-tab" style="margin: 50px 0 0 3ch;">
              <ul class="nav nav-pills mb-xl-20">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#categorie">Catégories</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="categorie">
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
        <div class="col-lg-5 blog-inner clearfix">
          <div class="main-box padding-20 full-width">
            <div class="breadcrumb-wrpr">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html" class="text-light-black">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="text-light-black">Produit</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $produit->nom }}</li>
              </ul>
            </div>

            <div class="post-wrapper mb-xl-20">
              <img src='{{URL::asset("assets/img/dish/$produit->image")}}' class="img-fluid full-width" alt="produit-img">
            </div>
            <div class="row">
              <div class="col-12">
                <div class="blog-meta mb-xl-20">
                  
                  <h2 class="blog-title text-light-black">
                    <div class="testimonial-caption padding-15" style="margin: -1.3ex 0 0 -0.7ch;">
                      <p class="text-light-white text-uppercase no-margin fs-12">{{ $time->inWords($produit->updated_at) }}</p>
                      <h5 class="fw-600 text-light-black"> {{ $produit->nom}} </h5>
                      <div class="head-rating" style="margin-top: -20px;">
                        <div class="rating">
                          @inject('note', 'App\Http\Controllers\ProduitController')
                          @for($i = 0; $i <  number_format($note->avg($produit->id)); $i++)
                            <i class="fas fa-star  fs-18 text-yellow"></i>
                          @endfor
                          @if((number_format($note->avg($produit->ferme->id) != 0)) && ($note->avg($produit->ferme->id) %  number_format($note->avg
                                ($produit->ferme->id))) > 0.5)
                            <i class="fas fa-star-half-alt  fs-18 text-yellow"></i>
                          @endif
                          <span class="text-light-black fs-12 rate-data">{{ $note->etoiles($produit->ferme->id) }} évaluations</span>
                        </div>
                    </div>
                    <div class="restaurent-product-rating text-right" style="margin-top: -20px;">                      
                      <div class="restaurent-tags-price">             
                        <div class="restaurent-product-price" style="margin: -0.7in 0 0 30px;">
                                    
              
                          <p class="text-light-green fw-600 text-right">
                            
                        @inject('note', 'App\Http\Controllers\PanierController')
                        $90 <span class="line-through text-light-white fs-16">{{$produit->prix}}<sup>dt</sup></span><span class="save-price text-light-green fs-12">save $90</span></p>
                        @if($note->exist($produit->id)->isEmpty())
                          <button id="add-cart{{ $produit->id }}" class="btn-second white-btn" title="Ajouter au panier">
                            <i class="fas fa-shopping-bag"></i>
                          </button>
                          <button id="success-cart{{ $produit->id }}" class="btn-second btn-submit text-light" title="Supprimer du panier">
                            <i class="fas fa-shopping-bag"></i>
                          </button>
                        @else
                          <button class="btn-second btn-submit text-light" title="Supprimer du panier">
                            <i class="fas fa-shopping-bag"></i>
                          </button>
                        @endif
                        </div>
                      </div>
                    </div>
                  </h2>
                  <div>    
                    @isset($produit->caracteristics)                        
                      <h6 class="text-light-green fw-600" style="margin-top: -0.2cm;">Les caratéristiques du produit</h6>
                        @foreach ($produit->caracteristics as $caracteristic)
                            
                        <p class="text-light-black"> {{ $caracteristic['nom_car'] }}: <span class="text-light-white">{{ $caracteristic['value_car'] }}</span></p>
                        @endforeach
                    @endisset         
                  </div>
                </div>
                <div>
                  <div>             
                  <h6 class="text-light-green fw-600" style="margin-top: -0.2cm;">Description</h6>
                  <p class="text-light-white"> {{ $produit->description }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-lg-3">
          <div class="side-bar section-padding pb-0">
            <div class="advertisement-slider swiper-container h-auto mb-xl-20">
              <div class="rating-box">
                @isset($client_note)
                  <center><h3 class="text-light-black fw-500">Votre note sur {{ $produit->nom }}  </h3></center>
                @else
                  <center><h3 class="text-light-black fw-500">Noter {{ $produit->nom }} </h3></center>
                @endisset
                <h4>
                  <form method="POST"
                        action="@isset($client_note) {{ route('note.update', ['note' =>  $client_note]) }}
                        @else {{ route('note.store') }} @endisset" id="rate-form">
                    @csrf
                    <fieldset class="rating" style="margin: -10px 0 10px 40px;">
                      <input type="radio" id="star5" name="etoiles" value="5" <?php if (isset($client_note)) if ($client_note->etoiles == 5) echo 'checked'; ?> />
                      <label class="full" for="star5" title="Impressionnant - 5 stars"></label>
                      <input type="radio" id="star4half" name="etoiles" value="4.5" <?php if (isset($client_note)) if ($client_note->etoiles == 4.5) echo 'checked'; ?>/>
                      <label class="half" for="star4half" title="Assez bien - 4.5 stars"></label>
                      <input type="radio" id="star4" name="etoiles" value="4" <?php if (isset($client_note)) if ($client_note->etoiles == 4) echo 'checked'; ?> />
                      <label class="full" for="star4" title="Assez bien - 4 stars"></label>
                      <input type="radio" id="star3half" name="etoiles" value="3.5" <?php if (isset($client_note)) if ($client_note->etoiles == 3.5) echo 'checked';?>/>
                      <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="etoiles" value="3" <?php if (isset($client_note)) if ($client_note->etoiles == 3) echo 'checked'; ?> />
                      <label class="full" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="etoiles" value="2.5" <?php if (isset($client_note)) if ($client_note->etoiles == 2.5) echo 'checked'; ?>/>
                      <label class="half" for="star2half" title="Un peu mauvais- 2.5 stars"></label>
                      <input type="radio" id="star2" name="etoiles" value="2" <?php if (isset($client_note)) if ($client_note->etoiles == 2) echo 'checked'; ?>/>
                      <label class="full" for="star2" title="Un peu mauvais - 2 stars"></label>
                      <input type="radio" id="star1half" name="etoiles" value="1.5" <?php if (isset($client_note)) if ($client_note->etoiles == 1.5) echo 'checked'; ?>/>
                      <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="etoiles" value="1" <?php if (isset($client_note)) if ($client_note->etoiles == 1) echo 'checked'; ?> />
                      <label class="full" for="star1" title="mauvais - 1 star"></label>
                      <input type="radio" id="starhalf" name="etoiles" value="0.5" <?php if (isset($client_note)) if ($client_note->etoiles == 0.5) echo 'checked'; ?>/>
                      <label class="half" for="starhalf" title="mauvais - 0.5 stars"></label>
                    </fieldset>
                    <span class="arrow" style="margin-left: 5px;">
                      <a href="@isset($client_note) {{ route('note.update', ['note' =>  $client_note]) }}
                      @else {{ route('note.store') }} @endisset"
                         onclick="event.preventDefault(); document.getElementById('rate-form').submit();">
                        <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                        <i class="fas fa-chevron-right"></i>
                      </a>
                    </span>
                  </form>
                </h4>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-wrapper">
                    <div class="testimonial-box">
                      <div class="testimonial-img p-relative">
                        <img src='{{ URL::asset("assets/img/farms/{$produit->ferme->image}")}}' class="img-fluid full-width" alt="testimonial-img">
                        <div class="overlay">
                          <div class="brand-logo">
                            <a href="{{ route('profile.show', ['client' => $produit->ferme->client]) }}">
                              <img src='{{ URL::asset("assets/img/user/{$produit->ferme->client->photo}") }}' class="img-fluid" alt="user-profile">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-caption padding-15">
                        <p class="text-light-white text-uppercase no-margin fs-12">Ferme de {{ $produit->nom }}</p>
                        <h5 class="fw-600 text-light-black"> {{ $produit->ferme->nom }} </h5>
                        <div class="head-rating" style="margin-top: -10px;">
                          <div class="rating">
                            @inject('note', 'App\Http\Controllers\FermeController')
                            @for($i = 0; $i <  number_format($note->avg($produit->ferme->id)); $i++)
                              <i class="fas fa-star text-yellow"></i>
                            @endfor
                            @if((number_format($note->avg($produit->ferme->id) != 0)) && ($note->avg($produit->ferme->id) %  number_format($note->avg
                            ($produit->ferme->id))) > 0.5)
                              <i class="fas fa-star-half-alt text-yellow"></i>
                            @endif
                            <span class="text-light-black fs-12 rate-data">{{ $note->etoiles($produit->ferme->id) }} évaluations</span>
                          </div>
                          <br>
                          <p class="text-light-black">{{ $produit->ferme->client->prenom }} {{ $produit->ferme->client->nom }}</p>
                          <p class="text-light-white fw-100">{{ substr($produit->ferme->description, 0, 50) }}...</p>
                          <a href="{{ route('farm.show', ['ferme' => $produit->ferme]) }}" class="btn-first white-btn">Afficher plus</a>
                        </div>
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

  <!-- offer near -->
  <section class="fresh-deals section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left">
            <h3 class="text-light-black header-title title">Produit de même catégorie</h3>
          </div>
        </div>
        <div class="col-12">
          <div class="fresh-deals-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-box">
                  <div class="product-img">
                    <a href="farm.html">
                      <img src='{{ URL::asset("assets/img/farms/255x150/shop-10.jpg") }}' class="img-fluid full-width" alt="product-img">
                    </a>
                  </div>
                  <div class="product-caption">
                    <div class="title-box">
                      <h6 class="product-title"><a href="farm.html" class="text-light-black">Great Burger</a></h6>
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
                  </div>
                  <div class="product-footer-2">
                    <div class="discount"><span class="text-success fs-12">$3 off</span>
                    </div>
                    <div class="discount-coupon"><span class="text-light-white fs-12">First order only</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-box">
                  <div class="product-img">
                    <a href="farm.html">
                      <img src='{{ URL::asset("assets/img/farms/255x150/shop-11.jpg") }}' class="img-fluid full-width" alt="product-img">
                    </a>
                  </div>
                  <div class="product-caption">
                    <div class="title-box">
                      <h6 class="product-title"><a href="farm.html" class="text-light-black">Flavor Town</a></h6>
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
                  </div>
                  <div class="product-footer-2">
                    <div class="discount"><span class="text-success fs-12">$3 off</span>
                    </div>
                    <div class="discount-coupon"><span class="text-light-white fs-12">First order only</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-box">
                  <div class="product-img">
                    <a href="farm.html">
                      <img src='{{ URL::asset("assets/img/farms/255x150/shop-22.jpg") }}' class="img-fluid full-width" alt="product-img">
                    </a>
                  </div>
                  <div class="product-caption">
                    <div class="title-box">
                      <h6 class="product-title"><a href="farm.html" class="text-light-black">Big Bites</a></h6>
                    </div>
                    <p class="text-light-white">Fruits, Vegitables, Milk, Eggs</p>
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
                  </div>
                  <div class="product-footer-2">
                    <div class="discount"><span class="text-success fs-12">$3 off</span>
                    </div>
                    <div class="discount-coupon"><span class="text-light-white fs-12">First order only</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-box">
                  <div class="product-img">
                    <a href="farm.html">
                      <img src='{{ URL::asset("assets/img/farms/255x150/shop-23.jpg") }}' class="img-fluid full-width" alt="product-img">
                    </a>
                  </div>
                  <div class="product-caption">
                    <div class="title-box">
                      <h6 class="product-title"><a href="farm.html" class="text-light-black">Smile N’ Delight</a></h6>
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
                  </div>
                  <div class="product-footer-2">
                    <div class="discount"><span class="text-success fs-12">$3 off</span>
                    </div>
                    <div class="discount-coupon"><span class="text-light-white fs-12">First order only</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-box">
                  <div class="product-img">
                    <a href="farm.html">
                      <img src='{{ URL::asset("assets/img/farms/255x150/shop-24.jpg") }}' class="img-fluid full-width" alt="product-img">
                    </a>
                  </div>
                  <div class="product-caption">
                    <div class="title-box">
                      <h6 class="product-title"><a href="farm.html" class="text-light-black">Lil Johnny’s</a></h6>
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
                  </div>
                  <div class="product-footer-2">
                    <div class="discount"><span class="text-success fs-12">$3 off</span>
                    </div>
                    <div class="discount-coupon"><span class="text-light-white fs-12">First order only</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            //didn't work
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- offer near -->
  <script type="text/javascript">
    $(document).ready(function () {
      $("#success-cart<?php echo $produit->id?>").hide();
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
    });
  </script>
@endsection
