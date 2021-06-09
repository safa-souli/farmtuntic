<?php

namespace App\Policies;

use App\User;
use App\livraison;
use Illuminate\Auth\Access\HandlesAuthorization;

class livraisonPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any livraisons.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return $user->type == 'livreur';
  }

  /**
   * Determine whether the user can view the livraison.
   *
   * @param \App\User $user
   * @param \App\livraison $livraison
   * @return mixed
   */
  public function view(User $user, livraison $livraison)
  {
    //
  }

  /**
   * Determine whether the user can create livraisons.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    //
  }

  /**
   * Determine whether the user can update the livraison.
   *
   * @param \App\User $user
   * @param \App\livraison $livraison
   * @return mixed
   */
  public function update(User $user, livraison $livraison)
  {
    //
  }

  /**
   * Determine whether the user can delete the livraison.
   *
   * @param \App\User $user
   * @param \App\livraison $livraison
   * @return mixed
   */
  public function delete(User $user, livraison $livraison)
  {
    //
  }

  /**
   * Determine whether the user can restore the livraison.
   *
   * @param \App\User $user
   * @param \App\livraison $livraison
   * @return mixed
   */
  public function restore(User $user, livraison $livraison)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the livraison.
   *
   * @param \App\User $user
   * @param \App\livraison $livraison
   * @return mixed
   */
  public function forceDelete(User $user, livraison $livraison)
  {
    //
  }
}
