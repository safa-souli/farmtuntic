<?php

namespace App\Policies;

use App\User;
use App\forum_commentaire;
use Illuminate\Auth\Access\HandlesAuthorization;

class forum_commentairePolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any forum_commentaires.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    //
  }

  /**
   * Determine whether the user can view the forum_commentaire.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire $forumCommentaire
   * @return mixed
   */
  public function view(User $user, forum_commentaire $forumCommentaire)
  {
    //
  }

  /**
   * Determine whether the user can create forum_commentaires.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    //
  }

  /**
   * Determine whether the user can update the forum_commentaire.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire $forumCommentaire
   * @return mixed
   */
  public function update(User $user, forum_commentaire $forumCommentaire)
  {
    return $forumCommentaire->client_id == $user->id;
  }

  /**
   * Determine whether the user can delete the forum_commentaire.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire $forumCommentaire
   * @return mixed
   */
  public function delete(User $user, forum_commentaire $forumCommentaire)
  {
    return $forumCommentaire->client_id == $user->id;
  }

  /**
   * Determine whether the user can restore the forum_commentaire.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire $forumCommentaire
   * @return mixed
   */
  public function restore(User $user, forum_commentaire $forumCommentaire)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the forum_commentaire.
   *
   * @param \App\User $user
   * @param \App\forum_commentaire $forumCommentaire
   * @return mixed
   */
  public function forceDelete(User $user, forum_commentaire $forumCommentaire)
  {
    //
  }
}
