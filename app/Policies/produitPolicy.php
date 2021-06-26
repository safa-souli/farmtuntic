<?php

namespace App\Policies;

use App\User;
use App\produit;
use Illuminate\Auth\Access\HandlesAuthorization;

class produitPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any produits.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->type, ['agriculteur']);
  }

  /**
   * Determine whether the user can view the produit.
   *
   * @param \App\User $user
   * @param \App\produit $produit
   * @return mixed
   */
  public function view(User $user, produit $produit)
  {
    //
  }

  /**
   * Determine whether the user can create produits.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    return $user->type == 'agriculteur';
  }

  /**
   * Determine whether the user can update the produit.
   *
   * @param \App\User $user
   * @param \App\produit $produit
   * @return mixed
   */
  public function update(User $user, produit $produit)
  {
    if(isset($produit->ferme()->agriculteur_id)) return ($user->type == 'agriculteur' && $produit->ferme()->agriculteur_id == $user->id);
    if (isset($produit->agriculteur_id)) return ($user->type == 'agriculteur' && $produit->agriculteur_id == $user->id);
  }

  /**
   * Determine whether the user can delete the produit.
   *
   * @param \App\User $user
   * @param \App\produit $produit
   * @return mixed
   */
  public function delete(User $user, produit $produit)
  {
    if(isset($produit->ferme()->agriculteur_id)) return ($user->type == 'agriculteur' && $produit->ferme()->agriculteur_id == $user->id);
    if (isset($produit->agriculteur_id)) return ($user->type == 'agriculteur' && $produit->agriculteur_id == $user->id);
  }

  /**
   * Determine whether the user can restore the produit.
   *
   * @param \App\User $user
   * @param \App\produit $produit
   * @return mixed
   */
  public function restore(User $user, produit $produit)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the produit.
   *
   * @param \App\User $user
   * @param \App\produit $produit
   * @return mixed
   */
  public function forceDelete(User $user, produit $produit)
  {
    //
  }
}
