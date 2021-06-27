@extends('layout')

@section('content')
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid" style="margin-left: 4cm">
      <div class="row">
        <div class="col-lg-9 blog-inner clearfix">
          <div class="main-box padding-20 full-width">
            <div class="breadcrumb-wrpr">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-light-black">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ferme</li>
              </ul>
            </div>
            <div class="row">
              @foreach($fermes as $ferme)
                <div class="col-xl-4 col-lg-12 col-sm-6">
                  <article class="blog-services-wrapper main-box mb-xl-20">
                    <div class="post-img">
                      <a href="blog-details.html">
                        <img src='{{ URL::asset("assets/img/farms/$ferme->image")}}' class="img-fluid full-width" alt="ferme">
                      </a>
                    </div>
                    <div class="post-content padding-20">
                      <h5 class="no-margin"><a href="blog-details.html" class="text-light-black">{{ $ferme->nom }}</a></h5>
                      <p class="text-light-white text-right" style="margin-top: -25px;">{{ $time->inWords($ferme->created_at) }}</p>
                      <div class="rating" style="margin-top: -10px;">
                        @inject('note', 'App\Http\Controllers\FermeController')
                        @if($note->avg($ferme->id))
                          @for($i = 0; $i <  number_format($note->avg($ferme->id)); $i++)
                            <i class="fas fa-star text-yellow"></i>
                          @endfor
                          @if(($note->avg($ferme->id) %  number_format($note->avg($ferme->id))) > 0.5)
                            <i class="fas fa-star-half-alt text-yellow"></i>
                          @endif
                        @endif
                        @if($note->etoiles($ferme->id))
                          <span class="text-light-black fs-12 rate-data" style="top:0;">{{ $note->etoiles($ferme->id) }} évaluations</span>
                        @endif
                      </div>
                      <br>
                      <p>{{ substr($ferme->description, 0, 100) }}...</p>
                      <div class="blog-link-wrap">
                        <a href="{{ route('farm.show', ['ferme' => $ferme]) }}" class="btn-first white-btn">Afficher plus</a>
                        <a href="{{ route('farm.edit', ['ferme' => $ferme]) }}" class="btn-first white-btn"><i class="fa fa-edit"></i> </a>
                        <a href="{{ route('farm.delete', ['ferme' => $ferme]) }}" class="btn-first white-btn" onclick="return confirm('Voulez-vous sûr de supprimer?')">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </div>
                  </article>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
