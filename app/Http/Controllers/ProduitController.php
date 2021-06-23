<?php

namespace App\Http\Controllers;

use App\categorie;
use App\produit;
use App\produit_note;
use App\User;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProduitController extends Controller
{
  protected $time;
  protected $user;
  //boot functions
  public function __construct()
  {
    $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
    $this->middleware('auth')->only('note_store', 'note_update');
  }

  public function index()
  {
    return view('product.viewAny',
      [
        'time' => $this->time,
        'produits' => produit::orderBy('created_at', 'DESC')->paginate(15),
        'categories' => categorie::orderBy('nom')->get()
      ]);
  }

  public function categorie(categorie $categorie, $id)
  {
    $categorie = categorie::find($id);
    return view('product.viewAny',
      [
        'time' => $this->time,
        'produits' => $categorie->produits()->paginate(15), //access to the parent columns
        'Categorie' => $categorie,
        'categories' => categorie::orderBy('nom')->get()
      ]);
  }

  public function show(produit $produit)
  {
    if (Auth::check())
      if ((produit_note::where(['produit_id' => $produit->id, 'client_id' => Auth::user()->id])->first()) == NULL)
        $note = NULL;
      else
        $note = produit_note::where(['produit_id' => $produit->id, 'client_id' => Auth::user()->id])->first();
    else
      $note = NULL;
    return view('product.view',
      [
        'time' => $this->time,
        'client_note' => $note,
        'produit' => $produit,
        'categories' => categorie::orderBy('nom')->get()
      ]);
  }

  public function store(Request $request)
  {
    $produit = new produit();
    if($request->hasFile('image')) {    
      $produit->image = $request->file('image')->getClientOriginalName() . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/assets/img/dish', $produit->image);
    }
    else  $produit->image = 'default.jpg';
    $produit->agriculteur_id =  Auth::user()->id;
    $produit->nom = $request->nom;
    $produit->prix = $request->prix;
    $produit->promotion = $request->promotion;
    $produit->stock = $request->stock;
    $produit->description = $request->description;
    $produit->caracteristics = $request->caracteristics;
    $produit->save();
    return redirect()->back();
  }

  public function edit(produit $produit, $id)
  {    
    $produit = produit::find($id);
    return view('product.edit', ['produit' => $produit]);
  }
  
  public function update(Request $request, $id)
  {
    function transpose($array) {
        array_unshift($array, null);
        return call_user_func_array('array_map', $array);
    }
    $produit = produit::find($id);
    $produit->nom = $request->nom;
    $produit->prix = $request->prix;
    $produit->description = $request->description;
    $produit->promotion = $request->promotion;
    if($request->caracteristics != NULL) $produit->caracteristics = array_merge($request->caracteristics, transpose($request->car));
    else $produit->caracteristics = transpose($request->car);
    $produit->caracteristics = (object) $produit->caracteristics;
    if($request->hasFile('image')) {    
      $produit->image = $request->file('image')->getClientOriginalName() . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/assets/img/dish', $produit->image);
    }
    $produit->save();
    return view('product.edit')->with('produit', $produit);
  }

  public function note_store(Request $request)
  {
    Auth::user()->produitNotes()->attach('', $request()->all(), ['client_id' => Auth::user()->id]);
    return redirect()->back();
  }

  public function note_update(produit_note $note, Request $request)
  {
    $note->update($request()->all());
    return redirect()->back();
  }

  //additional functions
  public function count($id)
  {
    return categorie::find($id)->produits()->count();
  }

  public function etoiles($id)
  {
    return (produit_note::where('produit_id', $id)->get()->isEmpty()) ? 0 : produit::find($id)->notes()->count();
  }

  public function avg($id)
  {
    return ($this->etoiles($id) != null) ? produit::find($id)->notes()->avg('etoiles') : null;
  }
}
