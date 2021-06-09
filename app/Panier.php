<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
  public    $table    = 'panier';
  protected $fillable = [
    'ipv4'
  ];

  public function client()
  {
    return $this->belongsTo(User::class);
  }

  public function produits()
  {
    return $this->belongsToMany(produit::class, 'produit_panier', 'panier_id', 'produit_id')->withTimestamps();
  }
}
