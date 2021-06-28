<?php
 

namespace App\Http\Controllers;

use App\ferme;
use App\ferme_avis;
use App\produit;
use App\panier;
use App\commande;
use App\commande_produit;
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
    $this->panier = panier::where('ipv4', $_SERVER['REMOTE_ADDR'] ?: ($_SERVER['HTTP_X_FORWARDED_FOR'] ?: $_SERVER['HTTP_CLIENT_IP']))->first();
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
    else $avis = NULL;
    foreach ($this->panier->produits as $produit) {
      if($produit->ferme_id = $ferme->id) {
        $find[] = $produit;
      }
    }
        
    return view('farm.view',
      [
        'time' => $this->time,
        'ferme_avis' => $avis,
        'produits' => produit::all()->where('ferme_id', $ferme->id),
        'all_avis' => ferme::with('avis')->findOrFail($ferme->id)->avis,
        'products' => $find ?? null,
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
    
    $ferme = new ferme();
    if($request->hasFile('image_ferme')) {    
      $ferme->image = time().'_'.$request->file('image_ferme')->getClientOriginalName();
      $request->file('image_ferme')->storeAs('public/assets/img/farms', $ferme->image);
    }
    else  $ferme->image = 'default.jpg';
    
    $produit = new produit();
    if($request->hasFile('image_produit')) {    
      $produit->image = time().'_'.$request->file('image_produit')->getClientOriginalName();
      $request->file('image_produit')->storeAs('public/assets/img/dish', $produit->image);
    }
    else  $produit->image = 'default.jpg';
    
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

  public function update(Request $request, ferme $ferme)
  {
    
    $request->validate([
      'nom' =>'required|string|min:3|max:255',
      'telephone' => 'required|numeric',
      'email' =>  'required|string|email',
      'adresse'=> 'required|string|min:3|max:255',
      'image' => 'nullable|image|max:2048',
      'description' => 'required'
    ]);
    if($request->hasFile('image')) {   
      $ferme->image = time().'_'.$request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('public/assets/img/farms', $ferme->image);
    }
    else  $ferme->image = 'default.jpg';
    $ferme->nom = $request->nom;
    $ferme->telephone = $request->telephone;
    $ferme->email = $request->email;
    $ferme->adresse = $request->adresse;
    $ferme->description = $request->description;
    $ferme->agriculteur_id = Auth::user()->id;
    $ferme->save();
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
