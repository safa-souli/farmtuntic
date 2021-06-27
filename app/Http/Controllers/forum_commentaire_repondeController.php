<?php

namespace App\Http\Controllers;

use App\forum;
use App\forum_commentaire;
use App\forum_commentaire_reponde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class forum_commentaire_repondeController extends Controller
{
  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth');
  }

  public function store(forum_commentaire $commentaire)
  {
    $commentaire->repondes()->attach('',
      [
        'client_id' => Auth::user()->id,
        'reponde' => request('reponde')
      ]);
    return redirect()->back();
  }

  public function update(forum_commentaire_reponde $reponde)
  {
    $reponde->update(\request()->all());
  }

  public function delete(forum_commentaire_reponde $reponde)
  {    
    $reponde->delete();
  }

}

