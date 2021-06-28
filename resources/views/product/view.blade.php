@extends('layout')

@section('content')
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid" style="margin: 1in 0 0 1in">
      <div class="row">
        <div class="col-lg-7 blog-inner clearfix">
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
                  
                  <h5>{{$produit->nom}} </h5>
                  <p class="mb-2 text-muted text-uppercase small">{{$time->inWords($produit->created_at)}}</p>
                  <div class="rating">
                    @inject('note', 'App\Http\Controllers\ProduitController')
                    @for($i = 0; $i <  number_format($note->avg($produit->id)); $i++)
                      <i class="fas fa-star  fs-20 text-yellow"></i>
                    @endfor
                    @if(!is_null($produit->ferme))
                      @if( 
                        (number_format($note->avg($produit->ferme->id) != 0)) 
                        && ($note->avg($produit->ferme->id) 
                        %  number_format($note->avg($produit->ferme->id))) > 0.5
                      )
                        <i class="fas fa-star-half-alt  fs-18 text-yellow"></i>
                      @endif
                      <span class="text-light-black fs-12 rate-data">{{ $note->etoiles($produit->ferme->id) }} évaluations</span>
                    @endif
                  </div>
                  <p><span class="mr-1"><strong>{{number_format($produit->prix, 2, '.', ' ')  }}<sup>dt</sup></strong></span></p>
                  <p class="pt-1">@if(is_null('$produit->description')) {{ $produit->description }} @else Aucun description   @endif</p>
                  @if(!is_null($produit->caracteristics))
                    <div class="table-responsive">
                      <table class="table table-sm table-borderless mb-0" style="border: 0;">
                        <tbody>
                          @foreach ($produit->caracteristics as $caracteristic)                            
                            <tr>
                              <th class="pl-0 w-25" scope="row"><strong>{{ $caracteristic['nom_car'] }}</strong></th>
                              <td>{{ $caracteristic['val_car'] }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  @endif
                <hr>
                <div id="panier">
                  @inject('panier', 'App\Http\Controllers\PanierController')                            
                  @if($panier->exist($produit->id)->isEmpty())  
                                
                    <button id="add-cart{{$produit->id}}" type="submit" class="btn btn-light btn-md mr-1 mb-2">
                      <i class="fas fa-shopping-cart pr-2"></i>Ajouter aux panier
                    </button>  
                  @else                               
                    <button id="delete-cart{{ $produit->id }}" type="submit" class="btn-sm btn-submit bg-cart">
                      <i  class="fa fa-cart-arrow-down mr-2"></i> Supprimer du panier
                    </button>    
                  @endif
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-lg-3 blog-inner main-box" >
          <div class="side-bar section-padding pb-0" style="margin-top: -6ex">
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
              @if(!is_null($produit->ferme))
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
              @endif
            </div>
        </aside>
      </div>
    </div>
  </section>  <script type="text/javascript">
   $(document).ready(function () {
      $("#add-cart<?php echo $produit->id?>").click(function () {
        $.ajax({
          type: 'get',
          url: '<?php echo url('panier/add/produit'); ?>/' + <?php echo $produit->id ?>,
          success: function () {
            
            $("#cart-refresh-layout").load(" #cart-refresh-layout");
            $("#panier").load(" #panier");
          },
          error: function (e) {
            console.log(e);
            alert('Error')
          }
        });
      });
      $("#delete-cart<?php echo $produit->id?>").click(function () {
        $.ajax({
          type: 'get',
          url: '<?php echo url('panier/destroy/produit'); ?>/' + <?php echo $produit->id ?>,
          success: function () {
            
            $("#cart-refresh-layout").load(" #cart-refresh-layout");
            $("#panier").load(" #panier");
          },
          error: function (e) {
            console.log(e);
            alert('Error')
          }
        });
      });
   });
 </script>
@endsection
