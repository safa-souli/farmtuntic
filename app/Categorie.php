<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
  public $table = 'categorie';
  protected $fillable = [
    'nom'
  ];

  public function produits()
  {
    return $this->hasMany(produit::class, 'categorie_id', 'id')
      ->orderBy('created_at', 'desc');
  }
}
