<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ferme extends Model
{
  public $table = 'ferme';
  protected $fillable = [
    'nom', 'image', 'adresse', 'telephone', 'email', 'description'
  ];

  public function avis()
  {
    return $this->belongsToMany(User::class, 'ferme_avis', 'ferme_id', 'client_id')
      ->withPivot('avis', 'etoiles')
      ->using(ferme_avis::class)
      ->orderBy('created_at', 'desc')
      ->withTimestamps();
  }

  public function produits()
  {
    return $this->hasMany(produit::class);
  }

  public function client()
  {
    return $this->belongsTo(User::class, 'agriculteur_id');
  }
}
