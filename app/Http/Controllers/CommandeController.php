<?php

namespace App\Http\Controllers;

use App\commande;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth');
  }

  public function index()
  {
    return view('order',
      [
        'time'   => $this->time,
        'orders' => commande::orderBy('created_at', 'DESC')->paginate(15)
      ]);
  }

  public function mine()
  {
    return view('ferme.viewMine',
      [
        'time'   => $this->time,
        'fermes' => ferme::where('agriculteur_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get()
      ]);
  }

  public function show(ferme $ferme)
  {
    if (Auth::check())
      if   ((ferme_avis::where(['ferme_id' => $ferme->id, 'client_id' => Auth::user()->id])->first()) == NULL) $avis = NULL;
      else $avis                                                                                                     = ferme_avis::where(['ferme_id' => $ferme->id, 'client_id' => Auth::user()->id])->first();
    else
      $avis = NULL;
    return view('ferme.view',
      [
        'time'       => $this->time,
        'ferme_avis' => $avis,
        'produits'   => produit::all()->where('ferme_id', $ferme->id),
        'all_avis'   => ferme::with('avis')->findOrFail($ferme->id)->avis,
        'ferme'      => $ferme
      ]);
  }

  public function store()
  {
    $ferme                 = new ferme();
    $ferme->nom            = \request('nom_ferme');
    $ferme->telephone      = \request('telephone');
    $ferme->email          = \request('email');
    $ferme->image          = 'default.jpg';
    $ferme->adresse        = 'jendouba';
    $ferme->description    = \request('description_ferme');
    $ferme->agriculteur_id = Auth::user()->id;
    $ferme->save();
    $ferme->produits()->create([
      'nom'         => \request('nom_produit'),
      'prix'        => \request('prix'),
      'stock'       => \request('stock'),
      'image'       => 'default.jpg',
      'description' => \request('description_produit')
    ]);
    return redirect()->route('farm.mine');
  }

  public function edit(ferme $ferme)
  {
    return view('ferme.edit', ['ferme' => $ferme]);
  }

  public function update(ferme $ferme)
  {
    $ferme->update(\request()->all());
    return redirect()->back();
  }

  public function delete(ferme $ferme)
  {
    $ferme->avis()->delete();
    $ferme->produits()->delete();
    $ferme->delete();
    return redirect()->back();
  }

  //additional functions
  public function etoiles($id)
  {
    return ferme:: find($id)->avis()->count();
  }

  public function avg($id)
  {
    return ferme:: find($id)->avis()->avg('etoiles');
  }
}
