<?php

namespace App\Policies;

use App\User;
use App\forum;
use Illuminate\Auth\Access\HandlesAuthorization;

class forumPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any forums.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    //
  }

  /**
   * Determine whether the user can view the forum.
   *
   * @param \App\User $user
   * @param \App\forum $forum
   * @return mixed
   */
  public function view(User $user, forum $forum)
  {
    //
  }

  /**
   * Determine whether the user can create forums.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    //
  }

  /**
   * Determine whether the user can update the forum.
   *
   * @param \App\User $user
   * @param \App\forum $forum
   * @return mixed
   */
  public function update(User $user, forum $forum)
  {
    return $forum->client_id == $user->id;
  }

  /**
   * Determine whether the user can delete the forum.
   *
   * @param \App\User $user
   * @param \App\forum $forum
   * @return mixed
   */
  public function delete(User $user, forum $forum)
  {
    return $forum->client_id == $user->id;
  }

  /**
   * Determine whether the user can restore the forum.
   *
   * @param \App\User $user
   * @param \App\forum $forum
   * @return mixed
   */
  public function restore(User $user, forum $forum)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the forum.
   *
   * @param \App\User $user
   * @param \App\forum $forum
   * @return mixed
   */
  public function forceDelete(User $user, forum $forum)
  {
    //
  }
}
