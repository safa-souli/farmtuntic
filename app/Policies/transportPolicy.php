<?php

namespace App\Policies;

use App\User;
use App\transport;
use Illuminate\Auth\Access\HandlesAuthorization;

class transportPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any transports.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return $user->type == 'livreur';
  }

  /**
   * Determine whether the user can view the transport.
   *
   * @param \App\User $user
   * @param \App\transport $transport
   * @return mixed
   */
  public function view(User $user, transport $transport)
  {
    //
  }

  /**
   * Determine whether the user can create transports.
   *
   * @param \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    //
  }

  /**
   * Determine whether the user can update the transport.
   *
   * @param \App\User $user
   * @param \App\transport $transport
   * @return mixed
   */
  public function update(User $user, transport $transport)
  {
    //
  }

  /**
   * Determine whether the user can delete the transport.
   *
   * @param \App\User $user
   * @param \App\transport $transport
   * @return mixed
   */
  public function delete(User $user, transport $transport)
  {
    //
  }

  /**
   * Determine whether the user can restore the transport.
   *
   * @param \App\User $user
   * @param \App\transport $transport
   * @return mixed
   */
  public function restore(User $user, transport $transport)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the transport.
   *
   * @param \App\User $user
   * @param \App\transport $transport
   * @return mixed
   */
  public function forceDelete(User $user, transport $transport)
  {
    //
  }
}
