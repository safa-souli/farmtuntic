@extends('layout')
@section('content')
  <!-- Navigation -->
  <section class="final-order section-padding bg-light-theme">
    <div class="container-fluid">
      <div class="row" style="padding: 1cm">
        <div class="col-lg-9" >
          <div class="main-box padding-20">
            <div class="row">
              <div class="col-md-6">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title fw-700">{{$ferme->nom}}</h3>
                  </div>
                  <h6 class="text-light-black fw-700 fs-14">Vérifiez l'adresse, les paiements et le pourboire pour finaliser votre achat</h6>
                  <h6 class="text-light-black fw-700 mb-2">Information du ferme</h6>
                  <p class="text-light-white mb-1">{{$ferme->client->prenom}} {{ $ferme->client->nom }}
                  <p class="text-light-white mb-1">{{$ferme->address}}
                  <p class="text-light-white mb-1">{{$ferme->telephone}}
                  <p class="text-light-white mb-1">{{$ferme->description}}
              </div>
              <div class="col-md-6">
                <div class="advertisement-img">
                    <img src='{{URL::asset("assets/img/farms/$ferme->image")}}' class="img-fluid full-width" alt="{{$ferme->nom}}">
                </div>
            </div>
              <div class="col-12">
                <hr>
                <div class="payment-sec">
                  <div class="section-header-left">
                    <h5 class="text-light-black header-title fw-700">Description de commande</h5>    
                  </div>
                  <form id="my-form" method="POST" action="{{ route('order.checkout', [$panier->id]) }}" >
                    @csrf
                    @method('PUT')                
                    <div class="form-group">
                      <textarea name="description" class="form-control form-control-submit" rows="4" placeholder="Delivery Details"></textarea>
                    </div>
                                    
                    <div class="form-group">
                      <label><span class="checkmark"></span>Description supplémentaire pour une commande, vous pouvez nous dire ce dont vous avez besoin, paiement à la livraison.</label>
                    </div>
                    <div class="form-group">
                      @if(is_null($produits))
                        
                        <button type="submit" class="btn-submit btn-first fw-500" onclick="alert('Pardon! vous ne pouvez pas commander une commande vide ?');return false;">
                          <img src="{{URL::asset('assets/img/logo/white-icon.png')}}" style="width: 3ex;margin-right:1ex;" alt="image"> Commander
                        </button> 
                      @else
                        <button type="submit" class="btn-submit btn-first fw-500" onclick="return confirm('Êtes-vous sûr de vouloir le commander?');">
                          <img src="{{URL::asset('assets/img/logo/white-icon.png')}}" style="width: 3ex;margin-right:1ex;" alt="image"> Commander
                        </button>                      
                          
                      @endif
                    </div>
                  </form>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="sidebar">
            <div class="cart-detail-box">
              <div class="card">
                <div class="card-header padding-15 fw-700">Votre commande de:
                  <p class="text-light-white no-margin fw-400" style="font-size: 80%">{{$ferme->client->prenom}} {{$ferme->client->nom}} </p>
                </div>
                <div class="card-body no-padding" id="scrollstyle-4">
                <div id="refresh-delete">
                  <?php 
                    $i = 0; $somme = 0;
                    if($produits != null) :
                      foreach($produits as $produit) : $somme += $produit->prix;?>
                      <div class="cat-product-box" id="product-box{{ $produit->id }}">
                      <?php $i++; ?>
                        <div class="cat-product">
                          <div class="cat-name">
                            <a href="{{ route('card.show', ['produit_id' => $produit->id]) }}">
                              <p class="text-light-green fw-700"><span class="text-dark-white">{{ $i }}</span>{{ $produit->nom }}</p>
                              <span class="text-light-white fw-700">
                                @foreach($produit->categories as $categorie)
                                  {{ $categorie->nom }},
                                @endforeach
                              </span>
                            </a>
                          </div>
                          <div class="delete-btn">
                            <button 
                              class="text-dark-white" 
                              id="product-delete{{ $produit->id }}" 
                              onmouseenter="this.classList.add('text-danger')" 
                              onmouseleave="this.classList.remove('text-danger')">
                              <i class="far fa-trash-alt" title="Supprimer"></i>
                            </button>
                          </div>
                          <div class="price"><a href="#" class="text-dark-white fw-500">
                              {{ $produit->prix }} <sup>dt</sup>
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; 
                      endif; ?>
                  </div>
                </div>
                <div class="card-footer p-0 modify-order">
                  <a href="#" class="total-amount"> <span class="text-custom-white fw-700">TOTAL</span>
                    <span class="text-custom-white fw-700">{{ $somme }}<sup>dt</sup></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function () {
      <?php foreach($panier->produits as $produit) {  ?>
      $(document).on("click", "#product-delete<?php echo e($produit->id); ?>", function () {
        if (confirm("Voulez-vous sûr de supprimer?")) {
          $.ajax({
            type: 'GET',
            url: '<?php echo url('panier/destroy/produit'); ?>/' + '<?php echo $produit->id; ?>',
            success: function () {
                $("#refresh-delete").load(" #refresh-delete");
              $("#item-total").load(" #item-total");
            },
            error: function (error) {
              console.log(error);
              alert("delete error");
            }
          });
        } else return false;
      });
      <?php } ?>
    });
  </script>
@endsection
