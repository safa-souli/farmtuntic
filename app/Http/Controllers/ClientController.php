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

  public function update(request $request)
  {
    $request->validate([
      'nom' => 'required|string|alpha|min:3|max:130',
      'prenom' => 'required|string|alpha|min:3|max:130',
      'telephone' => 'nullable|numeric|digits:8',
      'adresse' =>'nullable|string|min:3|max:130',
      'photo' =>'nullable|image|max:2048',
    ]);
    $client = Auth::user();
    if($request->hasFile('photo')) {   
      $client->photo = time().'_'.$request->file('photo')->getClientOriginalName();
      $request->file('photo')->storeAs('public/assets/img/user', $client->photo);
    }
    $client->nom = $request->nom;
    $client->prenom = $request->prenom;
    $client->datenai = $request->datenai;
    $client->telephone = $request->telephone;
    $client->adresse = $request->adresse;
    $client->sexe = $request->sexe;
    $client->save();
    if ($client->type == 'agriculteur') {
      $client->agriculteur->domaine = $request->domaine;
      $client->agriculteur->certificate = $request->certificate;
      $client->agriculteur->save();
    }
    if ($client->type == 'livreur')
    {
      $request->validate([
        'nom_entreprise' => 'nullable|string|alpha|min:3|max:130',
        'telephone_entreprise' => 'nullable|numeric|size:8',
        'adresse_entreprise' => 'nullable|string|digits:3',
      ]);
      $client->livreur->nom_entreprise = $request->nom_entreprise;
      $client->livreur->telephone_entreprise = $request->telephone_entreprise;
      $client->livreur->adresse_entreprise = $request->adresse_entreprise;
      $client->livreur->save();
    }
    return redirect()->back();
  }

  public function delete()
  {

  }
}
