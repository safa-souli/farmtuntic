<?php

namespace App\Http\Controllers;

use App\forum;
use App\forum_commentaire;
use App\forum_commentaire_reponde;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\validator;

class ForumController extends Controller
{
  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth')->except('index', 'show');
  }

  public function index()
  {
    return view('forum.viewAny',
      [
        'time' => $this->time,
        'forums' => forum::orderBy('created_at', 'DESC')->get()
      ]);
  }

  public function show(forum $forum)
  {
    return view('forum.view',
      [
        'time' => $this->time,
        'forum' => $forum
      ]);
  }

  public function store(request $request, forum $forum)
  {
    $request->validate([
      'objet' => 'required',
      'description' => 'required'
    ]);
    $forum->theme = $request->objet;
    $forum->description = $request->description;
    $forum->client_id = Auth::user()->id;
    $forum->save();
    return redirect()->route('forum.index');
  }

  public function edit(forum $forum)
  {
    return view('forum.edit',
      [
        'title' => '| Modifier forum',
        'time' => $this->time,
        'forum' => $forum
      ]
    );
  }

  public function update(request $request, forum $forum)
  {
    $request->validate([
      'objet' => 'required',
      'description' => 'required'
    ]);
    $forum->update($request->all(), ['client_id'=> Auth::user()->id]);
    return redirect()->back();
  }

  public function delete(forum $forum)
  {
    foreach ($forum->commentaires() as $commentaire) {
      if(!$commentaire) $commentaire->repondes()->detach($commentaire->id);
    }
    $forum->commentaires()->detach($forum->id);
    $forum->commentaires()->delete();
    $forum->delete();
    return redirect()->back();
  }
}
