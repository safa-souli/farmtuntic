@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    
    <div class="container-fluid" style="margin-left: 2in;">
      <div class="col-lg-8" style="margin-left: 1in">
          
          <div class="row">
              <div class="sidebar-tabs main-box padding-20 mb-md-50">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title">Votre list des commandes </h3>
                    <p class="text-light-black fw-400">Vous ne pouvez pas annuler une commande en état de livraison.</p>
                    <hr>
                  </div>
                
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" style="width: 2cm">#</th>
                <th scope="col" style="width: 3in">Date</th>
                <th scope="col" style="width: 3in">etat</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $time->inWords($order->created_at)}}</td>
                        @isset($order->livraison_id)
                            @switch($order->livraison->etat)
                                @case('S')
                                    <td class="text-success">  
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> en cours                    
                                    </td>
                                        @break
                                @case('E')
                                    <td class="text-warning">  
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> en livraison                    
                                    </td>
                                    @break
                                @case('H')
                                    <td class="text-danger">   
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> livré                   
                                    </td>
                                    @break
                                @case('L')
                                    <td class="text-warning">  
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> en livraison                    
                                    </td>
                                    @break
                                @case('O')
                                    <td class="text-danger">   
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> livré                   
                                    </td>
                                    @break
                                    @default 
                                    <td class="text-info">                      
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pending
                                    </td>
                                @endswitch
                        @else                            
                            <td class="text-info">                      
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pending
                            </td>
                        @endisset
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('order.details', $order)}}" class="dropdown-item">Afficher</a>
                                    @if(is_null($order->livraison_id))
                                        <a  href="{{ route('order.delete', $produit) }}" class="dropdown-item" onclick="return confirm('Voulez-vous sûr du supprimer ce produit?')">Annuler </a>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                </a>
                @endforeach
            </tbody>
          </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
