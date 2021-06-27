<?php
 

namespace App\Http\Controllers;

use App\ferme;
use App\ferme_avis;
use App\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FermeController extends Controller
{
  protected $time;

  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth')->only('delete');
  }

  public function index()
  {
    return view('farm.viewAny',
      [
        'time' => $this->time,
        'fermes' => ferme::orderBy('created_at', 'DESC')->get()
      ]);
  }

  public function mine()
  {
    return view('farm.viewMine',
      [
        'time' => $this->time,
        'fermes' => ferme::where('agriculteur_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get()
      ]);
  }

  public function show(ferme $ferme)
  {
    if (Auth::check())
      if ((ferme_avis::where(['ferme_id' => $ferme->id, 'client_id' => Auth::user()->id])->first()) == NULL) $avis = NULL;
      else $avis = ferme_avis::where(['ferme_id' => $ferme->id, 'client_id' => Auth::user()->id])->first();
    else
      $avis = NULL;
    return view('farm.view',
      [
        'time' => $this->time,
        'ferme_avis' => $avis,
        'produits' => produit::all()->where('ferme_id', $ferme->id),
        'all_avis' => ferme::with('avis')->findOrFail($ferme->id)->avis,
        'ferme' => $ferme
      ]);
  }

  public function store(request $request, ferme $ferme)
  {
    $request->validate([
      'nom_ferme' =>'required|string|min:3|max:255',
      'telephone' => 'required|numeric',
      'email' =>  'required|string|email',
      'adresse'=> 'required|string|min:3|max:255',
      'nom_produit' => 'required|string|min:3|max:255',
      'image_ferme' => 'required|image|max:2048',
      'image_produit' => 'required|image|max:2048',
      'description_ferme' => 'required',
      'description_produit' => 'required',
      'prix' => 'required|numeric|min:1',
      'promotion' => 'nullable|numeric|between:1,99'
    ]);
    $ferme->nom = $request->nom_ferme;
    $ferme->telephone = $request->telephone;
    $ferme->email = $request->email;
    $ferme->image = $image_ferme ?? 'default.jpg';
    $ferme->adresse = $request->adresse;
    $ferme->description = $request->description_ferme;
    $ferme->agriculteur_id = Auth::user()->id;
    $ferme->save();
    $ferme->produits()->create([
      'nom' => $request->nom_produit,
      'prix' => $request->prix,
      'promotion' => $request->promotion,
      'image' => $request->image_produit ?? 'default.jpg',
      'description' => $request->description_produit
    ]);
    return redirect()->route('farm.mine');
  }

  public function edit(ferme $ferme)
  {
    return view('farm.edit', ['ferme' => $ferme]);
  }

  public function update(request $request, ferme $ferme)
  {
    
    $request->validate([
      'nom' =>'required|string|min:3|max:255',
      'telephone' => 'required|numeric',
      'email' =>  'required|string|email',
      'adresse'=> 'required|string|min:3|max:255',
      'image' => 'nullable|image|max:2048',
      'description' => 'required'
    ]);
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
    return ferme::find($id)->avis()->count();
  }

  public function avg($id)
  {
    return ferme::find($id)->avis()->avg('etoiles');
  }
}
