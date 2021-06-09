<?php

namespace App\Http\Controllers;

use App\ferme_avis;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ferme_avisController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function store()
  {
    Auth::user()->fermeAvis()->attach('', \request()->all());
  }

  public function update(ferme_avis $avis)
  {
    $avis->update(\request()->all());
  }

  public function delete(ferme_avis $avis)
  {
    $avis->delete();
  }
}
