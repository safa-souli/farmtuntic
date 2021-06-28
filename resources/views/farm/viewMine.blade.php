@extends('layout')
@section('content')
  <div class="main-sec"></div>
  <!-- Navigation -->
  <section class="register-restaurent-sec section-padding bg-light-theme">
    
    <div class="container-fluid" style="margin-left: 2in;">
      <div class="col-lg-12" style="margin-left: 1in">
          
          <div class="row">
              <div class="sidebar-tabs main-box padding-20 mb-md-50">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title">Votre list des fermes </h3>
                    <p class="text-light-black fw-400">Vous pouvez gérer votre liste.</p>
                    <div class="section-header-right" style="margin-top: -1.8cm">
                      <form action="{{ route('farm.create')}}">
                        <button type="submit" class="btn-submit btn">Ajouter ferme</button>
                      </form>
                    </div>
                    <hr>
                  </div>
                
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 2cm">#</th>
                        <th scope="col" style="width: 2cm">Image</th>
                        <th scope="col" style="width: 3cm">nom</th>
                        <th scope="col" style="width: 3in">adresse</th>
                        <th scope="col" style="width: 3cm">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($fermes as $ferme)
                            <tr>
                                <th scope="row">{{ $ferme->id }}</th>
                                <td class="w-25"> 
                                  <img  class="img-responsive" src='{{ URL::asset("storage/assets/img/farms/{$ferme->image}") }}' alt="haha" style="height:1in">  </td>
                                <td>{{$ferme->nom}} </td>
                                <td>{{$ferme->adresse}} </td>
                                <td>{{ $time->inWords($ferme->updated_at)}}</td>
                                <td>
                                  <div class="btn-group">
                                    <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a href="{{ route('farm.show', $ferme)}}" class="dropdown-item">Afficher</a>
                                      <a  href="{{ route('farm.edit', $ferme)}}" class="dropdown-item">Modifier</a>
                                      <a  href="{{ route('farm.delete', $ferme) }}" class="dropdown-item" onclick="return confirm('Voulez-vous sûr du supprimer ce ferme?')">Supprimer </a>
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
