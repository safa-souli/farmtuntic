<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class commande extends Model
{
  public $table = 'commande';
  protected $primaryKey = 'id';


  protected $fillable = [
    'description', 'date_livraison'
  ];
  public function livraison()
  {
    return $this->belongsTo(livraison::class);
  }
  
  public function products()
  {
      return $this->belongsToMany(produit::class, 'commande_produit', 'commande_id', 'produit_id')
      ->withPivot('quantite','etat')
      ->using(commande_produit::class)
      ->orderBy('created_at', 'desc')
      ->withTimestamps();
  }


  public function user()
  {
      return $this->belongsTo(User::class, 'client_id');
  }
}
