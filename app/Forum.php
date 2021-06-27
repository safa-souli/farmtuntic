<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
  public $table = "forum";
  protected $fillable = [
    'theme', 'description'
  ];

  public function client()
  {
    return $this->belongsTo(User::class);
  }

  public function commentaires()
  {
    return $this->belongsToMany(User::class, 'forum_commentaire', 'forum_id', 'client_id')
      ->withPivot('id','commentaire')
      ->using(forum_commentaire::class)
      ->orderBy('created_at', 'asc')
      ->withTimestamps();
  }
}
