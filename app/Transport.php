<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transport extends Model
{
  public $table = 'transport';
  protected $primaryKey = 'matricule';
  protected $fillable = [
    'matricule','nom', 'type'
  ];

  public function livreur()
  {
    return $this->belongsTo(livreur::class);
  }

  public function livraisons()
  {
    return $this->hasMany(livraison::class);
  }
}
