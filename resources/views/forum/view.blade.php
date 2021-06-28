@extends('layout')

@section('content')
  <section class="our-articles bg-light-theme section-padding pt-0">
    <div class="blog-page-banner"></div>
    <div class="container-fluid" style="margin-left: 3in">
      <div class="row">
        <div class="col-lg-7 blog-inner clearfix">
          <div class="main-box padding-20 full-width">
            <div class="breadcrumb-wrpr">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html" class="text-light-black">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="blog.html" class="text-light-black">forum</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $forum->objet }}</li>
              </ul>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="post-wrapper mb-xl-20">
                    <img src='{{ URL::asset("storage/assets/img/forum/{$forum->fichier}") }}' class="img-fluid full-width" alt="#">
                </div>
                <div class="blog-meta mb-xl-20">
                  <h2 class="blog-title text-light-black">{{ $forum->objet }}</h2>
                  <div class="review-user">
                    <div class="review-user-img">
                      <img src='{{ URL::asset("storage/assets/img/user/{$forum->client->photo}") }}' class="rounded-circle" alt="photo-profil">
                      <div class="reviewer-name" style="margin: -50px 0 30px 70px;">
                        <p class="text-light-black fw-600">{{ $forum->client->prenom }} {{ $forum->client->nom }}
                          <small class="text-light-white fw-500">{{ $forum->client->adresse }}</small><br>
                          <small class="text-light-white">Publié {{ $time->inWords($forum->created_at) }}</small>
                      </div>
                    </div>
                  </div>
                  <p class="text-light-white">{{ $forum->description }}</p>
                </div>
                <div id="comment-refresh">
                  <form id="add-comment-form">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                      <input name="commentaire" class="form-control" aria-label="ajouter commentaire" aria-describedby="basic-addon2" placeholder="Ajouter un commentaire..." required>                  
                      
                      <div class="input-group-append">
                        <button class="btn btn-submit" type="submit">Commenter</button>
                      </div>
                    </div>                  
                    <input type="hidden" name="client_id" value="{{ Auth::user()->id ?? ''}}">
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                  </form>
                  <div class="comment-box">
                    <div class="section-header-left">
                      <h6 class="text-light-black header-title">Commentaires</h6>
                    </div>
                    @foreach($forum->commentaires as $commentaire)
                      <div class="review-box u-line">
                        <div class="review-user">
                          <div class="review-user-img">
                            <img src='{{ URL::asset("assets/img/user/$commentaire->photo") }}' class="rounded-circle" alt="#">
                            <div class="reviewer-name">
                              <p class="text-light-black fw-600">{{ $commentaire->prenom }} {{ $commentaire->nom }}
                                <small class="text-light-white fw-500">{{ $commentaire->adresse }}</small>
                              </p>
                              <div class="review-date" style="right:0px;"><span class="text-light-white">{{ $time->inWords($commentaire->pivot->created_at) }}</span></div>
                            </div>
                          </div>
                          @can('update', $commentaire->pivot)
                            <div class="dropdown">
                              <button class="btn-first text-light-green" type="button" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                              <ul class="dropdown-menu" style="margin-left: -100px; padding-left: 30px;">
                                <li style="cursor: pointer;" data-toggle="modal" data-target="#edit-popup">Modifier</li>
                                <li id="delete-comment{{ $commentaire->pivot->id }}" style="cursor: pointer;">Supprimer</li>
                              </ul>
                            </div>
                          @endcan
                        <!-- Modal -->
                          <div class="modal fade" id="edit-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modifier commentaire</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form id="edit-comment-form{{ $commentaire->pivot->id }}">
                                  <div class="modal-body">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <textarea class="form-control" name="commentaire" rows="3" placeholder="Entrer votre commentaire">{{ $commentaire->pivot->commentaire }}</textarea>
                                        </div>
                                        <input type="hidden" name="client_id" value="{{ Auth::user()->id ?? ''}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn-second text-light-green" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn-second btn-submit">Modifier</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="text-light-black">{{ $commentaire->pivot->commentaire }}</p>
                        <button id="reply{{ $commentaire->pivot->id }}" class="btn-first white-btn align-left text-light-green">Répondre
                          ({{ count($commentaire->pivot->repondes) }})
                        </button>
                      </div>
                      <div id="reply-box{{ $commentaire->pivot->id }}" style="display: none;">
                        <div id="reply-refresh{{ $commentaire->pivot->id }}">
                          <form id="add-reply-form{{$commentaire->pivot->id}}">
                            @csrf
                            @method('PUT')
                            <div class="input-group col-xl-11" style="margin: 20px 0 20px 2.3cm;">
                                <div class="input-group mb-3">
                                  <input name="reponde" class="form-control" aria-label="ajouter répondre" aria-describedby="basic-addon2" value="@if(isset($Reply) && $Reply_commentaire->id == $commentaire->pivot->id) {{  $Reply->reponde }} @endif" placeholder="ajouter répondre..." required>                  
                                  
                                  <div class="input-group-append">
                                    <button class="btn btn-submit" type="submit">Répondre</button>
                                  </div>
                                </div>                  
                                <input type="hidden" name="client_id" value="{{ Auth::user()->id ?? ''}}">
                                <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                            </div>
                          </form>
                          <div class="u-line" style="margin:-2ex 0 0 2.8cm;"></div>
                          @foreach($commentaire->pivot->repondes as $reponde)
                            <div id="reply-box-refresh{{ $commentaire->pivot->id }}" class="review-box comment-reply u-line" style="margin-left: 1in">
                              <div class="review-user">
                                
                                <div class="review-user-img">
                                  <img src='{{ URL::asset("assets/img/user/$commentaire->photo") }}' class="rounded-circle" alt="#">
                                  <div class="reviewer-name">
                                    <p class="text-light-black fw-600">{{ $commentaire->prenom }} {{ $commentaire->nom }}
                                      <small class="text-light-white fw-500">{{ $commentaire->adresse }}</small>
                                    </p>
                                    <div class="review-date" style="right:0px;"><span class="text-light-white">{{ $time->inWords($reponde->pivot->created_at) }}</span></div>
                                  </div>
                                </div>
                                @can('update', $reponde->pivot)
                                  <div class="btn-group">
                                    <button class="btn btn-sm text-light-green" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a id="edit-reply{{$reponde->pivot->id}}" href="{{ route('reply.edit', ['forum'=> $forum, 'commentaire' => $commentaire->pivot, '$reponde'=> $reponde->pivot]) }}" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Modifier</a>
                                      <a id="delete-reply{{$reponde->pivot->id}}" href="{{ route('reply.delete', ['reponde' => $reponde->pivot]) }}" class="dropdown-item">Supprimer </a>
                                    </div>
                                  </div>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modifier réponse</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>                                          
                                        <form id="edit-reply-form{{ $reponde->pivot->id }}">
                                          <div class="modal-body">
                                            @csrf
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <textarea class="form-control" name="reponde" rows="3" placeholder="Entrer votre réponse">{{ $reponde->pivot->reponde }}</textarea>
                                                </div>
                                                <input type="hidden" name="client_id" value="{{ Auth::user()->id ?? ''}}">
                                              </div>
                                            </div>
                                          </div>                                          
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                @endcan
                                  
                              </div>
                              <p class="text-light-black">{{ $reponde->pivot->reponde }}</p>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $(document).ready(function () {
      $(document).on("submit", "#add-comment-form", function (e) {
        e.preventDefault();
        <?php if(isset(Auth::user()->id)) { ?>
        $.ajax({
          type: 'POST',
          url: '/forum/commentaire/store',
          data: $("#add-comment-form").serialize(),
          success: function (response) {
            console.log(response);
            $("#comment-refresh").load(" #comment-refresh");
          },
          error: function (error) {
            console.log(error);
            alert("Error : Comment not saved !!");
          }
        });
        <?php } else { ?>
          location.href = '/login';
        <?php } ?>
      });
      <?php foreach ($forum->commentaires as $commentaire) { ?>
        $(document).on("click", "#reply{{ $commentaire->pivot->id }}", function () {
          $("#reply-box{{ $commentaire->pivot->id }}").show();
        });
        $(document).on("dblclick", "#reply{{ $commentaire->pivot->id }}", function () {
          $("#reply-box{{ $commentaire->pivot->id }}").hide();
        });
        $(document).on("click", "#delete-comment{{ $commentaire->pivot->id }}", function () {
          if (confirm("Voulez-vous sûr de supprimer?")) {
            $.ajax({
              type: 'GET',
              url: '<?php echo url("forum/commentaire/delete"); ?>/' + <?php echo $commentaire->pivot->id; ?>,
              success: function () {
                $(".comment-box").load(" .comment-box");
              },
              error: function (error) {
                console.log(error);
                alert("Error: delete comment !!");
              }
            });
          } else return false;
        });
        $(document).on("submit", "#edit-comment-form{{ $commentaire->pivot->id }}", function (e) {
          e.preventDefault();
          $.ajax({
            type: 'POST',
            url: '<?php echo url("/forum/commentaire/update"); ?>/' + <?php echo $commentaire->pivot->id; ?>,
            data: $("#edit-comment-form<?php echo e($commentaire->pivot->id); ?>").serialize(),
            success: function () {
              $("#edit-popup<?php echo e($commentaire->pivot->id); ?>").modal('toggle');
              $("#edit-popup<?php echo e($commentaire->pivot->id); ?>").modal('reload');
              $(".comment-box").load(" .comment-box");
            },
            error: function (error) {
              console.log(error);
              alert("Error : Comment not updated !!");
            }
          });
        });
        $(document).on("submit", "#add-reply-form{{ $commentaire->pivot->id }}", function (e) {
          e.preventDefault();
          <?php if(isset(Auth::user()->id)) { ?>
          $.ajax({
            type: 'POST',
            url: '/forum/commentaire/reponde/{{$commentaire->pivot->id}}',
            data: $("#add-reply-form{{ $commentaire->pivot->id }}").serialize(),
            success: function (response) {
              console.log(response);
              $("#reply-refresh{{ $commentaire->pivot->id }}").load(" #reply-refresh{{ $commentaire->pivot->id }}");
            },
            error: function (error) {
              console.log(error);
              alert("Error : reply not saved !!"+error);
            }
          });
          <?php } else { ?>
            location.href = '/login';
          <?php } ?>          
        }); 
        <?php foreach ($commentaire->pivot->repondes as $reponde) { ?>

            $(document).on("click", "#delete-reply{{ $reponde->pivot->id }}", function (e) {
              e.preventDefault();
              if (confirm("Voulez-vous sûr de supprimer?")) {
                $.ajax({
                  type: 'GET',
                  url: '<?php echo url("forum/commentaire/reponde/delete"); ?>/' + <?php echo $reponde->pivot->id; ?>,
                  success: function () { 
                    $("#reply-refresh{{ $commentaire->pivot->id }}").load(" #reply-refresh{{ $commentaire->pivot->id }}");
                  },
                  failure: function (error) {
                    console.log(error);
                    alert("Error: delete reply !!");
                  }
                });
              } else return false;
            });
            $(document).on("submit", "#edit-reply-form{{ $reponde->pivot->id }}", function (e) {
              e.preventDefault();
              $.ajax({
                type: 'POST',
                url: '<?php echo url("/forum/commentaire/reponde/update/"); ?>/' + <?php echo $reponde->pivot->id; ?>,
                data: $("#edit-reply-form<?php echo e($reponde->pivot->id); ?>").serialize(),
                success: function () {
                  $("#edit-popup").hide();
                  $("#reply-box-refresh{{ $commentaire->pivot->id }}").load(" #reply-box-refresh{{ $commentaire->pivot->id }}");
                },
                error: function (error) {
                  console.log(error);
                  alert("Error : reply not updated !!");
                }
              });
            });

        <?php } ?>
      <?php } ?>
    });
  </script>
@endsection
