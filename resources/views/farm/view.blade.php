@extends('layout')
@section('content')
  <!-- restaurent top -->
  <div class="page-banner p-relative smoothscroll" id="menu">
    <img src='{{ URL::asset("storage/assets/img/farms/$ferme->image")}}' class="img-fluid full-height" alt="ferme">
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
            <p class="text-light-black sub-title no-margin"><i class="fas fa-map-marker-alt"></i> {{ $ferme->adresse }}
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
            <img src='{{ URL::asset("storage/assets/img/user/{$ferme->client->photo}")}}' class="img-fluid" title="{{ $ferme->client->prenom }} {{ $ferme->client->nom }}" style="width: 1in;height:1in;">
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
              <li class="nav-item"><a class="nav-link text-light-white fw-700" href="#review">Avis</a>
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
    <div class="container-fluid" style="margin-left: 1.2in">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
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
                                    @if (!is_null($produit->promotion))
                                      <div class="restaurent-product-label">
                                        <span class="rectangle-tag bg-gradient-red text-custom-white">{{$produit->promotion}}%</span>
                                      </div>                                        
                                    @endif
                                  </div>
                                  <div class="restaurent-product-rating text-right">                                  
                                    
                                    <div class="rating">
                                      @inject('note', 'App\Http\Controllers\FermeController')
                                      @if($note->avg($ferme->id))
                                        @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                                          <i class="fas fa-star text-yellow"></i>
                                        @endfor
                                        @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                                          <i class="fas fa-star-half-alt text-yellow"></i>
                                        @endif
                                      @endif<br>
                                      @if($note->etoiles($ferme->id))
                                        <span class="text-light-black fs-12 rate-data">{{ $note->etoiles($ferme->id) }} évaluations</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="restaurent-product-caption-box"><span class="text-light-white">{{ substr($produit->description, 0, 300) }}</span>
                                </div>
                                <div class="restaurent-tags-price">
                                  <a href="{{ route('product.show', ['produit' => $produit]) }}" class="btn-first white-btn">Afficher plus</a>
                                  <div class="restaurent-product-price">
                                    <h6 class="text-light-green fw-600 no-margin">{{number_format($produit->prix, 2, '.', ' ')  }}<sup>dt</sup></h6>
                                  </div>
                                </div>
                              </div>
                              <div class="restaurent-product-img">
                                <img src='{{ URL::asset("storage/assets/img/dish/$produit->image")}}' class="img-fluid" alt="#">
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
            <div class="cart-detail-box">
              <div class="card">
                <div class="card-header padding-15 fw-700">Your Order</div>
                <div class="card-body no-padding" id="refresh-delete">
                    
                  <?php $i = 0; $somme = 0; 
                  if (!is_null($products)):
                    foreach($products as $produit) : $somme += $produit->prix;?>
                      <div class="cat-product-box" id="product-box{{ $produit->id }}">
                        <?php $i++; ?>
                        <div class="cat-product">
                          <div class="cat-name" style="width: 3in;">
                            <a href="{{ route('product.show', ['produit_id' => $produit->id]) }}">
                              <p class="text-light-green fw-700"><span class="text-dark-white">{{ $i }}</span>{{ $produit->nom }}</p>
                              <span class="text-light-white fw-700">
                                  {{ $produit->pivot->quantite ?? '0' }} élements,
                              </span>
                            </a>
                          </div>                            
                          <div class="col-sm-2 mx-auto">
                            <div class="delete-btn">
                                <button 
                                  class="text-dark-white" 
                                  id="product-delete{{ $produit->id }}" 
                                  onmouseenter="this.classList.add('text-danger')" 
                                  onmouseleave="this.classList.remove('text-danger')">
                                  <i class="far fa-trash-alt" title="Supprimer"></i></button>
                            </div>
                          </div>
                          <div class="price"><a href="#" class="text-dark-white fw-500">
                            {{number_format($produit->prix, 2, '.', '')}}<sup>dt</sup>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php endforeach;
                   endif; ?>
                </div>
                <div class="card-footer padding-15">
                  <a href="{{route('order', $ferme)}}" class="btn-first green-btn text-custom-white full-width fw-500">Passer à commander</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- restaurent meals -->
  <section class="section-padding restaurent-about smoothscroll" id="review">
    <div class="container">
      <div class="row">        
        <div class="col-md-5">
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
          
          <div class="u-line" style="margin-top: 1cm;"></div>
          <h6 class="text-light-black mb-xl-20" style="margin-top: 2ex">Votre avis sur la {{ $ferme->nom }}:</h6>
          <div class="u-line"></div>
          @isset($ferme_avis)
            <?php $user = Auth::user()?>
            <div id="notice-box" class="review-box">
              <div class="review-user">
                <div class="review-user-img">
                  <img src='{{ URL::asset("storage/assets/img/user/$user->photo") }}' class="rounded-circle" style="width: 1.5cm;height:1.5cm;">
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
                      <span class="ml-2 text-light-white text-right">{{ $time->inWords($ferme_avis->created_at) }}</span>
                    </div>
                  </div>
                </div>
                  
                  <div class="btn-group">
                    <button class="btn-text text-light-green btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu" style="margin-left: -1in">
                      <a href="#javascript(0)" class="dropdown-item" id="notice-edit">Modifier</a>
                      <a href="#javascript(0)" class="dropdown-item" id="notice-delete">Supprimer </a>
                    </div>
                  </div>
              </div>
              <p class="text-light-black"  style="margin:-1ch 0 0 9vh;">{{ $ferme_avis->avis }}</p>
            </div>
            <div id="notice-div" class="comment-form" style="display: none;">
              <form id="notice-form">
                @csrf
                <div class="row">
                  <div class="col-md-12" style="margin-top: 2ch">
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
                      <textarea class="form-control" name="avis" rows="2" placeholder="Votre avis" required>{{ $ferme_avis->avis }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="ferme_id" value="{{ $ferme->id }}">
                      <button type="submit" class="btn-sm btn-secondary btn-sm btn-submit">Valider</button>
                      <button id="notice-cancel" type="button" class="btn btn-secondary btn-sm">Annuler</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          @else
            <div id="notice-div-store" class="comment-form" style="margin-top: 2ch">
              <form id="notice-form-add">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-12">
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
                      <textarea class="form-control" name="avis" rows="2" placeholder="Votre avis" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-top: -3ex">
                    <div class="form-group">
                      <div class="form-group"></div>
                      <input type="hidden" name="ferme_id" value="{{ $ferme->id }}">
                      <button type="submit" class="btn-sm btn-submit" >Valider</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          @endisset
        </div>
        <div class="col-md-5" style="margin-left: 1.5in">
            
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
              <div class="u-line" style="margin-top: 1cm;"></div>
              <h6 class="text-light-black mb-xl-20" style="margin-top: 2ex">Gens avis:</h6>
              <div class="u-line"></div>
            </div>
            @foreach($ferme->avis as $avis)
              <div class="review-box u-line">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src='{{ URL::asset("storage/assets/img/user/{$avis->photo}") }}' class="rounded-circle" alt="#" style="width: 1.5cm;height:1.5cm">
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
                <p class="text-light-black" style="margin:-1ch 0 0 9vh;">{{ $avis->pivot->avis }}</p>
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
  <script>
   $(document).ready(function () {
      <?php 
      if(!is_null($products)) {
      foreach($products as $produit) {  ?>
      $(document).on("click", "#product-delete<?php echo e($produit->id); ?>", function () {
        if (confirm("Voulez-vous sûr de supprimer?")) {
          $.ajax({
            type: 'GET',
            url: '<?php echo url('panier/destroy/produit'); ?>/' + '<?php echo $produit->id; ?>',
            success: function () {
              $("#cart-refresh-layout").load(" #cart-refresh-layout");
              $("#refresh-delete").load(" #refresh-delete");
            },
            error: function (error) {
              console.log(error);
              alert("delete error");
            }
          });
        } else return false;
      });
      <?php } } ?>
    });
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
