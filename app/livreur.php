<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livreur extends Model
{
  public $table = 'livreur';
  public $timestamps = false;

  protected $fillable = [
    'nom_entreprise', 'telephone_entreprise', 'adresse_entreprise', 'certificate'
  ];

  public function transports()
  {
    return $this->hasMany(transport::class);
  }

  public function client()
  {
    return $this->belongsTo(User::class, 'id');
  }
}
