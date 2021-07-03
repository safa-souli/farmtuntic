@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    
    <div class="container-fluid padding-20">
              <div class="sidebar-tabs main-box padding-20 mb-md-50">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title">Votre list des produits </h3>
                    <p class="text-light-black fw-400">Vous pouvez gérer votre liste.</p>
                    <div class="section-header-right" style="margin-top: -1.8cm">
                      <form action="{{ route('product.create')}}">
                        <button type="submit" class="btn-submit btn">Ajouter produit</button>
                      </form>
                    </div>
                    <hr>
                  </div>
                
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10%">#</th>
                        <th scope="col" style="width: 30%">Image</th>
                        <th scope="col" style="width: 20%">nom</th>
                        <th scope="col" style="width: 10%">prix</th>
                        <th scope="col" style="width: 30%">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                            <tr>
                                <th scope="row">{{ $produit->id }}</th>
                                <td class="w-25"> 
                                  <img  class="img-responsive" src='{{ URL::asset("storage/assets/img/dish/{$produit->image}") }}' alt="haha" style="height:1in">  </td>
                                <td>{{$produit->nom}} </td>
                                <td>{{$produit->prix}} </td>
                                <td>{{ $time->inWords($produit->updated_at)}}</td>
                                <td>
                                  <div class="btn-group">
                                    <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a href="{{ route('product.show', $produit)}}" class="dropdown-item">Afficher</a>
                                      <a  href="{{ route('product.edit', $produit)}}" class="dropdown-item">Modifier</a>
                                      <a  href="{{ route('product.delete', $produit) }}" class="dropdown-item" onclick="return confirm('Voulez-vous sûr du supprimer ce produit?')">Supprimer </a>
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
  </section>
@endsection
