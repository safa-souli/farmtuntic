<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth')->except('show');
  }

  public function show(User $client)
  {
    if ($client->type == 'client') $view = 'profile.client';
    elseif ($client->type == 'agriculteur') $view = 'profile.agriculteur';
    else $view = 'profile.livreur';
    return view($view, [
      'time' => $this->time,
      'client' => $client
    ]);
  }

  public function edit()
  {
    return view('profile.edit', [
      'client' => Auth::user()
    ]);
  }

  public function update()
  {
    $client = Auth::user();
    $client->nom = \request('nom');
    $client->prenom = \request('prenom');
    $client->datenai = \request('datenai');
    $client->email = \request('email');
    $client->telephone = \request('telephone');
    $client->adresse = \request('adresse');
    $client->sexe = \request('sexe');
    $client->save();
    if ($client->type == 'agriculteur') {
      $client->agriculteur->domaine = \request('domaine');
      $client->agriculteur->certificate = \request('certificate');
      $client->agriculteur->save();
    }
    if ($client->type == 'livreur')
    {
      $client->livreur->nom_entreprise = \request('nom_entreprise');
      $client->livreur->telephone_entreprise = \request('telephone_entreprise');
      $client->livreur->adresse_entreprise = \request('adresse_entreprise');
      $client->livreur->save();
    }
    return redirect()->back();
  }

  public function delete()
  {

  }
}
