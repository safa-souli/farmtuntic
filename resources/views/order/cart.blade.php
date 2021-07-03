@extends('layout')
@section('content')
<!-- Navigation -->
<section class="final-order section-padding bg-light-theme">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9" style="margin:1cm 0 0 2in">
        <div class="main-box" style="padding: 1cm">
          <div class="row">
            <div class="col-12">
              <div class="sidebar">
                <div class="payment-sec">
                  <div class="section-header-left">
                    <h3 class="text-light-black header-title">Paniet ({{count($panier->produits)}})</h3>                           
                    <p class="text-light-black fw-400" style="margin-top: 10px;">Votre panier contient les élements suivantes.</p>
                  </div>
                </div>
                <div class="cart-detail-box">
                  <div class="card">
                    <div class="card-body no-padding" id="refresh-delete" style="display: block;overflow: hidden;height: 100%">
                      <?php $i = 0; $somme = 0;
                          foreach($panier->produits as $produit) : $somme += $produit->prix;?>
                          <div class="cat-product-box" id="product-box{{ $produit->id }}">
                            <?php $i++; ?>
                            <div class="cat-product">
                              <div class="cat-name" style="width: 3in;">
                                <a href="{{ route('card.show', ['produit_id' => $produit->id]) }}">
                                  <p class="text-light-green fw-700">
                                    
                                    <span><img src='{{URL::asset("storage/assets/img/dish/$produit->image")}}' alt="image de produit" style="height: 1in;width:1in"></span>
                                    <span class="text-dark-white">{{ $i }}</span>
                                    <span>{{ $produit->nom }}</span>
                                  </p>
                                </a>
                              </div>
                                <div class="delete-btn" style="margin-top: 0.7cm">
                                  <input type="hidden" name="pivot[produit_id][]" value="{{ $produit->id }}">
                                  <input type="number" name="pivot[quantity][]" class="col-3 form-control" value="{{ $produit->pivot->quantite }}">
                                </div>
                              
                                <div class="col-sm-2 mx-auto" style="margin-top: 0.8cm">
                                  <div class="delete-btn">
                                      <button 
                                        class="text-dark-white" 
                                        id="product-delete{{ $produit->id }}" 
                                        onmouseenter="this.classList.add('text-danger')" 
                                        onmouseleave="this.classList.remove('text-danger')">
                                        <i class="far fa-trash-alt" title="Supprimer"></i></button>
                                  </div>
                                </div>
                                <div class="price" style="margin-top: 0.8cm"><a href="#" class="text-dark-white fw-500">
                                    {{ $produit->prix }} <sup>dt</sup>
                                  </a>
                                </div>
                            </div>
                          </div>
                          <?php endforeach; ?>
                      </div>
                      <div class="card-footer p-0 modify-order">
                          <button type="button" class="text-custom-white full-width fw-500 bg-light-green">Mise à jour le panier </button>                          
                          <a href="#" class="total-amount"> <span class="text-custom-white fw-700">TOTAL</span>
                            <span class="text-custom-white fw-700">{{ number_format($somme, 3, '.', ' ')}}<sup>dt</sup></span>
                          </a>
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
      <?php } ?>
    });
  </script>
@endsection
