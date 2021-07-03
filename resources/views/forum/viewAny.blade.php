@extends('layout')

@section('content')

  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 blog-inner clearfix" style="margin-left: 3in;">
          <div class="main-box padding-20 full-width">
            <div class="breadcrumb-wrpr">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-light-black">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">forum</li>
              </ul>
            </div>
            <!-- restaurent reviews -->
            <section class="restaurent-review smoothscroll padding-20" id="review">
                @foreach($forums as $forum)
                  <div class="col-md-12">
                    <div class="review-box">
                      <div class="review-user">
                        <div class="review-user-img">
                          <img src='{{ URL::asset("assets/img/user/{$forum->client->photo}")}}' class="rounded-circle" alt="#" style="width: 1cm;height:1cm">
                          <div class="reviewer-name">
                            <p class="text-light-black fw-700">
                              <a href="{{ route('profile.show', ['client' => $forum->client]) }}">
                                {{ $forum->client->prenom }} {{ $forum->client->nom }}
                              </a>
                              <small class="text-light-white fw-500">{{ $forum->client->adresse }}</small>
                            </p>
                            <p class="text-light-black"><strong class="fw-600">Theme :</strong> {{ $forum->objet }} </p>
                          </div>
                        </div>
                        <div class="review-date"><span class="text-light-white text-right">{{ $time->inWords($forum->created_at) }}</span>
                          @can('update', $forum)
                          <div class="btn-group">
                            <button class="btn-sm text-light-green" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu" style="margin-right: 3in">
                              <a href="{{  route('forum.edit', ['forum' => $forum]) }}" class="dropdown-item" id="notice-edit">Modifier</a>
                              <a href="{{  route('forum.delete', ['forum' => $forum]) }}" class="dropdown-item" id="notice-delete">Supprimer </a>
                            </div>
                          </div>
                          @endcan
                        </div>
                      </div>
                      <div class="ratings">
                        <p class="text-light-black">
                          @php
                              $description = $forum->description;
                              if (strlen($description) > 300) {
                                echo substr($forum->description, 0, 300).'...';
                              } else {
                                echo $description;
                              }
                          @endphp
                        </p>
                      </div>
                      <div class="blog-link-wrap"><a href="{{ route('forum.show', ['forum' => $forum]) }}" class="btn-first white-btn">Afficher plus</a>
                      </div>
                    </div>
                    <div class="u-line"></div>
                  </div>
                @endforeach
            </section>
            <!-- restaurent reviews -->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
