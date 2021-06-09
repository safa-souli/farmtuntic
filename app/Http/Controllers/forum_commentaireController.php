<?php

namespace App\Http\Controllers;

use App\forum;
use App\forum_commentaire;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class forum_commentaireController extends Controller
{
  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth');
  }

  public function store()
  {
    Auth::user()->forumCommentaires()->attach('', \request()->all());
  }

  public function update(forum_commentaire $commentaire)
  {
    $commentaire->update(\request()->all());
  }

  public function delete(forum_commentaire $commentaire)
  {
    $commentaire->delete();
  }
}
