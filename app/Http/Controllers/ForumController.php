<?php

namespace App\Http\Controllers;

use App\forum;
use App\forum_commentaire;
use App\forum_commentaire_reponde;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    return view('forums',
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

  public function store()
  {
    $forum = new forum();
    $forum->theme = \request('theme');
    $forum->description = \request('description');
    $forum->client_id = Auth::user()->id;
    $forum->save();
    return redirect()->back();
  }

  public function edit(forum $forum)
  {
    return view('forum.viewAny',
      [
        'forum' => $forum,
        'time' => $this->time,
        'forums' => forum::orderBy('created_at', 'DESC')->get()
      ]
    );
  }

  public function update(forum $forum)
  {
    $forum->update(\request()->all(), ['client_id'=> Auth::user()->id]);
    return redirect('forum.viewAny');
  }

  public function delete(forum $forum)
  {
    $forum->delete();
    return redirect()->back();
  }
}
