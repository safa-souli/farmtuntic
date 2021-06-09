<?php

namespace App\Policies;

use App\User;
use App\ferme;
use Illuminate\Auth\Access\HandlesAuthorization;

class fermePolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any fermes.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->type, ['agriculteur']);
  }

  /**
   * Determine whether the user can view the ferme.
   *
   * @param \App\User $user
   * @param \App\ferme $ferme
   * @return mixed
   */
  public function view(User $user, ferme $ferme)
  {
    //
  }

  /**
   * Determine whether the user can create fermes.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    return $user->type == 'agriculteur';
  }

  /**
   * Determine whether the user can update the ferme.
   *
   * @param \App\User $user
   * @param \App\ferme $ferme
   * @return mixed
   */
  public function update(User $user, ferme $ferme)
  {
    return ($user->type == 'agriculteur' && $ferme->agriculteur_id == $user->id);
  }

  /**
   * Determine whether the user can delete the ferme.
   *
   * @param \App\User $user
   * @param \App\ferme $ferme
   * @return mixed
   */
  public function delete(User $user, ferme $ferme)
  {
    return ($user->type == 'agriculteur' && $ferme->agriculteur_id == $user->id);
  }

  /**
   * Determine whether the user can restore the ferme.
   *
   * @param \App\User $user
   * @param \App\ferme $ferme
   * @return mixed
   */
  public function restore(User $user, ferme $ferme)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the ferme.
   *
   * @param \App\User $user
   * @param \App\ferme $ferme
   * @return mixed
   */
  public function forceDelete(User $user, ferme $ferme)
  {
    //
  }
}
