<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livraison extends Model
{
  public $table = 'livraison';
  protected $fillable = [
    'trajectoire'
  ];

  public function transport()
  {
    return $this->belongsTo(transport::class);
  }

  public function commandes()
  {
    return $this->hasMany(commande::class);
  }
}
