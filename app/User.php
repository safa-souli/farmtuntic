<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
  use Notifiable;
  public $table = "client";
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nom', 'prenom', 'datenai', 'sexe', 'telephone', 'email', 'adresse', 'password', 'photo', 'description'
  ];
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function getRememberToken()
  {
    return $this->remember_token;
  }

  public function setRememberToken($value)
  {
    $this->remember_token = $value;
  }

  public function getRememberTokenName()
  {
    return 'remember_token';
  }

  public function agriculteur()
  {
    return $this->hasOne(agriculteur::class, 'id');
  }

  public function livreur()
  {
    return $this->hasOne(livreur::class, 'id');
  }

  public function forums()
  {
    return $this->hasMany(forum::class);

  }

  public function forumCommentaires()
  {
    return $this->belongsToMany(forum::class, 'forum_commentaire', 'forum_id', 'client_id')
      ->using(forum_commentaire::class)
      ->orderBy('created_at')
      ->withTimestamps();
  }

  public function forumCommentaireRpondres()
  {
    return $this->belongsToMany(forum_commentaire::class, 'forum_commentaire_reponde', 'client_id', 'forum_commentaire_id')
      ->withPivot('reponde')
      ->using(forum_commentaire_reponde::class)
      ->orderBy('created_at')
      ->withTimestamps();
  }

  public function panier()
  {
    return $this->hasOne(Panier::class);
  }

  public function fermeAvis()
  {
    return $this->belongsToMany(Ferme::class, 'ferme_avis', 'client_id', 'ferme_id')
      ->using(ferme_avis::class)
      ->withPivot('avis')
      ->orderBy('created_at')
      ->withTimestamps();
  }

  public function produitNotes()
  {
    return $this->belongsToMany(Produit::class, 'produit_note', 'client_id', 'produit_id')
      ->withPivot('etoiles')
      ->using(produit_note::class)
      ->orderBy('created_at', 'desc')
      ->withTimestamps();
  }

  public function demandes()
  {
    return $this->belongsToMany(User::class)->withTimestamps();
  }

  public function commandes()
  {
    return $this->belongsToMany(produit::class, 'commande', 'client_id', 'produit_id')
      ->using(commande::class)
      ->withPivot('total', 'etat', 'livraison_id')
      ->orderBy('created_at', 'desc')
      ->withTimestamps();
  }
}
