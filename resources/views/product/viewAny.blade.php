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
    .pagination > li > a:hover  {
      background-color: #6da830;
      border-color: #6da830;
      color: white;
    }
  </style>
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid">
      <div class="row"  style="margin-left: 1in">
        <aside class="col-lg-2 blog-inner clearfix mb-md-40">
          <div class="filter-sidebar main-box full-width">
            <div class="sidebar-tab">
              <ul class="nav nav-pills mb-xl-20 padding-20">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#categorie">Catégories</a>
                </li>
              </ul>
              <div class="u-line"></div>
              <div class="tab-content" >
                <div class="tab-pane fade active show" id="categorie">
                  <div class="padding-20 trending-blog-cat mb-xl-20">
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
                      
                      <li class="pb-xl-20 mb-xl-20">
                        <a href="{{ route('product.categorie', ['categorie'=> $categorie]) }}" class="text-light-black fw-600">Non catégorisés
                          <span class="text-light-white fw-400">
                            (
                              @inject('noneCat', 'App\Http\Controllers\ProduitController')
                            {{ $noneCat->countNoneCategorie()}}
                            )
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="col-lg-8 blog-inner clearfix">
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
              @if(count($produits) != 0)
                @foreach($produits as $produit)
                  <div class="col-lg-4 col-md-6 col-sm-6" style="margin-bottom: 1ex">
                    <div class="card">
                      <div class="card-body no-padding">
                          <div class="card-img-actions"> 
                            <img src='{{ URL::asset("storage/assets/img/dish/$produit->image")}}' class="card-img img-fluid" style="height: 150px; width:250px;"> 
                          </div>                              
                          <div class="overlay col-5">
                            <div class="product-tags padding-10"> 
                              @isset ($produit->promotion)
                                <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                                  {{$produit->promotion}}%
                                  </span>
                                </div>
                                  
                              @endif
                            </div>
                          </div>
                      </div>
                      <div class="card-body bg-light text-center">
                          <div class="mb-2">
                              <h6 class="font-weight-semibold mb-2"> 
                                <a href="{{ route('product.show', $produit) }}" class="text-default mb-2" data-abc="true">{{$produit->nom}}</a> 
                              </h6> 
                              <a href="{{ route('product.categorie', ['categorie'=> $categorie]) }}" class="text-muted" data-abc="true">{{$produit->categories->nom ?? 'Aucun categorie'}}</a>
                          </div>
                          <h3 class="mb-0 font-weight-semibold">{{number_format($produit->prix, 2, '.', ' ')}}<sup>dt</sup></h3>
                          <div> 
                            @inject('note', 'App\Http\Controllers\ProduitController')
                            @for($i = 0; $i <  number_format($note->avg($produit->id)); $i++)
                              <i class="fas fa-star text-yellow"></i>
                            @endfor
                            @if(((number_format($note->avg($produit->id)) != 0) && $note->avg($produit->id) %  number_format($note->avg($produit->id))) > 0.5)
                              <i class="fas fa-star-half-alt text-yellow"></i>
                            @endif
                          </div>
                          <div class="text-muted mb-3">{{ $note->etoiles($produit->id) }} évaluations</div> 
                          <div id="panier-produit{{ $produit->id }}">
                            @inject('panier', 'App\Http\Controllers\PanierController')
                            
                            @if($panier->exist($produit->id)->isEmpty())  
                                                                           
                              <button  id="add-cart{{$produit->id}}" type="submit" class="btn-sm btn-first bg-cart text-light-green">
                                <i class="fa fa-cart-plus mr-2"></i> Ajouter aux panier
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
                    
                @endforeach                
              @else              
                <div class="col-lg-12">
                  <div class="alert alert-info text-center" role="alert">
                    Aucun produit disponible à ce moment
                  </div>
                </div>
              @endif
            </div>

            <nav aria-label="Page navigation example" style="margin-top: 3ex;">
              <ul class="pagination justify-content-center">
                {{ $produits->links() }}
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
     //this not working write now, may because of library I don't know
    $(document).ajaxStart(function() {
          $(document.body).css({'cursor' : 'wait'});
      }).ajaxStop(function() {
          $(document.body).css({'cursor' : 'default'});
    });
    $(document).ready(function () {
      <?php foreach($produits as $produit) { ?>
        $("#add-cart<?php echo $produit->id?>").click(function () {
          $.ajax({
            type: 'get',
            url: '<?php echo url('panier/add/produit'); ?>/' + <?php echo $produit->id ?>,
            success: function () {
              $("#panier-produit{{ $produit->id }}").load(" #panier-produit{{ $produit->id }}");
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
              $("#panier-produit{{ $produit->id }}").load(" #panier-produit{{ $produit->id }}");
            },
            error: function (e) {
              console.log(e);
              alert('Error')
            }
          });
        });
      <?php } ?>
    });
  </script>
@endsection
