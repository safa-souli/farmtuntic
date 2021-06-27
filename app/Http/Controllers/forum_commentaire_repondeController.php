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


  public function edit(forum $forum, forum_commentaire $commentaire, forum_commentaire_reponde $reponde)
  {
    return view('forum.view',
      [
        'time' => $this->time,
        'forum' => $forum,
        'Reply_commentaire' => $commentaire,
        'Reply' => $reponde
      ]);
  }

  public function update(forum $forum, forum_commentaire_reponde $reponde)
  {
    $reponde->update(\request()->all());
    return redirect()->route('forum.show', ['forum' => $forum]);
  }

  public function delete(forum_commentaire_reponde $reponde)
  {    
    $reponde->delete();
    return redirect()->back();
  }

}

