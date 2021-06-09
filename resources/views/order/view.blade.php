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
    <div class="main-sec"></div>
    <!-- Navigation -->
    <!-- Browse by category -->
    <div class="most-popular section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 browse-cat border-0">
                    <div class="row">
                        <div class="col-12" style="margin-top:-50px;">
                            <div class="section-header-left">
                                <h3 class="text-light-black header-title title-2">Liste de tous les commandes </h3>
                            </div>
                        </div>
                        <div class="col-12" style="margin-left:250px;">
                            <div class="sort-tag-filter padding-15">
                                <div class="restaurent-tags"> <span class="text-dark-white fs-16 fw-600">{{ count($orders) }} Commandes </span>
                                </div>
                                <div class="sorting"> <span class="text-dark-white fs-16 fw-600">Sort: </span>
                                    <select>
                                        <option>Default</option>
                                        <option>Price</option>
                                        <option>Rating</option>
                                        <option>Distance</option>
                                      </select>
                                </div>
                            </div>

                            @foreach($orders as $order)
                                <div class="product-list-view">
                                    <div class="product-list-info">
                                        <div class="product-list-img">
                                            <H6>#{{$order->id}}</H6>
                                        </div>
                                    </div>
                                    <div class="product-right-col">
                                        <div class="product-list-details">
                                            <div class="product-list-title">
                                                <div class="product-info">
                                                    <h6><a href="farm.html" class="text-light-black fw-600">Lil Johnny’s</a></h6>
                                                    <p class="text-light-white fs-12">American Bagels</p>
                                                </div>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <span class="text-light-white">(03)</span>
                                                </div>
                                            </div>
                                            <div class="product-detail-right-box">
                                                <div class="product-list-tags">
                                                    @if($order->etat == "accepte")
                                                        <span class="rectangle-tag bg-gradient-green text-custom-white">Accepté</span>
                                                    @elseif($order->etat == "refuse")
                                                        <span class="rectangle-tag bg-gradient-red  text-custom-white">Refusé</span>
                                                    @else
                                                        <span class="rectangle-tag bg-gradient-orange text-custom-white">En cours</span>
                                                    @endif
                                                </div>
                                                <div class="product-list-price">
                                                    <div class="price">
                                                        <h6 class="text-light-black no-margin">$0</h6>
                                                        <span class="text-light-white">{{$time->inWords($order->created_at)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            @endforeach


                            

                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example" style="margin-bottom: 20px;">
                                  <ul class="pagination justify-content-center">
                                    {{ $orders->links() }}
                                  </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Browse by category -->
        <!-- footer -->
    <div class="footer-top section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                        <span class="text-light-black">100% Payment<br>Secured</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                        <span class="text-light-black">Support lots<br> of Payments</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                        <span class="text-light-black">24 hours / 7 days<br>Support</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                        <span class="text-light-black">Free Delivery<br>with $50</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                        <span class="text-light-black">Best Price<br>Guaranteed</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                        <span class="text-light-black">Mobile Apps<br>Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
