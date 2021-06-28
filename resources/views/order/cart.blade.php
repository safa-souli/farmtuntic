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
                      <div>
                          <?php $i = 0; $somme = 0;
                          foreach($panier->produits as $produit) : $somme += $produit->prix;?>
                          <div class="cat-product-box" id="product-box{{ $produit->id }}">
                          <?php $i++; ?>
                          <div class="cat-product">
                            <div class="cat-name" style="width: 3in;">
                              <a href="{{ route('card.show', ['produit_id' => $produit->id]) }}">
                                <p class="text-light-green fw-700"><span class="text-dark-white">{{ $i }}</span>{{ $produit->nom }}</p>
                                <span class="text-light-white fw-700">
                                    {{ $produit->quantite }} élements,
                                </span>
                              </a>
                            </div>
                              
                            
                            <div class="delete-btn">
                              <input type="number" class="col-3 form-control" value="{{ $produit->pivot->quantite }}">
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
                                {{ $produit->prix }} <sup>dt</sup>
                              </a>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                  
                        </div>
                      </div>
                      <div class="card-footer p-0 modify-order">
                          <button class="text-custom-white full-width fw-500 bg-light-green">Mise à jour le panier </button>
                          <a href="#" class="total-amount"> <span class="text-custom-white fw-700">TOTAL</span>
                              <span class="text-custom-white fw-700">{{ $somme }}</span>
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
