<?php

namespace App\Policies;

use App\User;
use App\forum_commentaire_reponde;
use Illuminate\Auth\Access\HandlesAuthorization;

class forum_commentaire_repondePolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any forum_commentaire_repondes.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    //
  }

  /**
   * Determine whether the user can view the forum_commentaire_reponde.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire_reponde $forumCommentaireReponde
   * @return mixed
   */
  public function view(User $user, forum_commentaire_reponde $forumCommentaireReponde)
  {
    //
  }

  /**
   * Determine whether the user can create forum_commentaire_repondes.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    //
  }

  /**
   * Determine whether the user can update the forum_commentaire_reponde.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire_reponde $forumCommentaireReponde
   * @return mixed
   */
  public function update(User $user, forum_commentaire_reponde $forumCommentaireReponde)
  {
    return $user->id == $forumCommentaireReponde->client_id;
  }

  /**
   * Determine whether the user can delete the forum_commentaire_reponde.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire_reponde $forumCommentaireReponde
   * @return mixed
   */
  public function delete(User $user, forum_commentaire_reponde $forumCommentaireReponde)
  {
    return $user->id == $forumCommentaireReponde->client_id;
  }

  /**
   * Determine whether the user can restore the forum_commentaire_reponde.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire_reponde $forumCommentaireReponde
   * @return mixed
   */
  public function restore(User $user, forum_commentaire_reponde $forumCommentaireReponde)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the forum_commentaire_reponde.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire_reponde $forumCommentaireReponde
   * @return mixed
   */
  public function forceDelete(User $user, forum_commentaire_reponde $forumCommentaireReponde)
  {
    //
  }
}
