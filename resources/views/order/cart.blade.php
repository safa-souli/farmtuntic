@extends('layout')
@section('content')
  <!-- Navigation -->
  <section class="final-order section-padding bg-light-theme">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <div class="main-box padding-20">
            <div class="row">
              <div class="col-12">
                <div class="payment-sec">
                  <div class="section-header-left">
                    <h3 class="text-light-black header-title">Description de commande</h3>
                  </div>
                  <form id="my-form" method="POST" action="{{ route('order', [$panier->id]) }}" >
                    @csrf
                    @method('PUT')                
                    <div class="form-group">
                      <textarea name="description" class="form-control form-control-submit" rows="4" placeholder="Delivery Details"></textarea>
                    </div>
                  </form>
                  <div class="form-group">
                    <label><span class="checkmark"></span>Description supplémentaire pour une commande, vous pouvez nous dire ce dont vous avez besoin.</label>
                  </div>
                  <div class="section-header-left">
                    <h3 class="text-light-black header-title">Payment information</h3>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="tab-pane fade active show">
                        <p class="text-light-black">Please review your order and make any necessary changes before checking out with PayPal.</p>
                        <div class="section-header-left">
                          <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                        </div>
                        <div class="driver-tip-sec mb-xl-20">
                          <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link fw-600 active" data-toggle="tab" href="#paypaltipcard">Tip with Credit Card</a>
                            </li>
                            <li class="nav-item"><a class="nav-link fw-600 disabled" data-toggle="tab" href="#paypalcashtip">Tip with Cash</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="paypaltipcard">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="tip-percentage">
                                    <form>
                                      <label class="radio-inline text-light-green fw-600">
                                        <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                      </label>
                                      <label class="radio-inline text-light-green fw-600">
                                        <input type="radio" name="tip-percentage"> <span>25%</span>
                                      </label>
                                      <label class="radio-inline text-light-green fw-600">
                                        <input type="radio" name="tip-percentage"> <span>25%</span>
                                      </label>
                                      <label class="radio-inline text-light-green fw-600">
                                        <input type="radio" name="tip-percentage"> <span>30%</span>
                                      </label>
                                    </form>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="custom-tip">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend"><span class="input-group-text text-light-green fw-500">Custom tip</span>
                                      </div>
                                      <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="section-header-left">
                          <h3 class="text-light-black header-title">Donate the change</h3>
                        </div>
                        <div class="form-group">
                          <label class="custom-checkbox">
                            <input type="checkbox" name="#"> <span class="checkmark"></span>
                            Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a> <span
                              class="ml-2"><a href="#">Learn More</a></span>
                          </label>
                        </div>
                        <div class="form-group">
                          <button type="submit" form="my-form" class="btn-first paypal-btn text-custom-white full-width fw-500">Checkout with
                            <img src="assets/img/pay-pal.png" alt="image">
                          </button>
                        </div>
                        <p class="text-center text-light-black no-margin">By placing your order, you agree to Organza's <a href="#">terms of use</a> and <a
                            href="#">privacy agreement</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="sidebar">
            <div class="cart-detail-box">
              <div class="card">
                <div class="card-header padding-15 fw-700">Le panier
                  <p class="text-light-white no-margin fw-400" style="font-size: 80%">votre panier contient :</p>
                </div>
                <div class="card-body no-padding" id="scrollstyle-4">
                <div id="refresh-delete">
                  <?php $i = 0; $somme = 0;
                  foreach($panier->produits as $produit) : $somme += $produit->prix;?>
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
                  <?php endforeach; ?>
                  </div>
                  <div id="item-total" class="item-total">
                    <div class="total-price border-0 pb-0"><span class="text-dark-white fw-600">Items subtotal:</span>
                      <span class="text-dark-white fw-600">{{ $somme }}<sup>dt</sup></span>
                    </div>
                    <div class="total-price border-0 pt-0 pb-0"><span class="text-light-green fw-600">Delivery fee:</span>
                      <span class="text-light-green fw-600">Free</span>
                    </div>
                    <div class="total-price border-0 "><span class="text-light-black fw-700">Total:</span>
                      <span class="text-light-black fw-700">$18.50</span>
                    </div>
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
