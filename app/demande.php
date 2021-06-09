<?php

namespace App;
$var = "content";
use Illuminate\Database\Eloquent\Model;
class demande extends Model
{
  public $table = 'demande';
  protected $fillable = [
    'type', 'etat', 'certificate'
  ];

  public function client()
  {
    $var = "content";
    return $this->belongsTo(User::class, 'client_id');
  }
}
