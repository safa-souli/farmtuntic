<?php

namespace App\Http\Controllers;

use App\transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class transportController extends Controller
{
    public function __construct()
    {
      $this->time = $time = new \Westsworld\TimeAgo(new \Westsworld\TimeAgo\Translations\Fr());
      $this->middleware('auth')->only('delete');
    }
  
    public function index()
    {
      return view('transport.view',
        [
          'time' => $this->time,
          'transports' => transport::where('livreur_id', Auth::user()->id)->get()
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
  
    public function store(request $request, transport $transport)
    {
      $request->validate([
        'matricule' =>'required|numeric|unique:transport',
        'nom' =>'required|string|min:3|max:255',
        'image' => 'nullable|image|max:2048'
      ]);
      
      $transport = new transport();
      if($request->hasFile('image')) {    
        $transport->image = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/assets/img/transport', $transport->image);
      } else  $transport->image = 'default.jpg';

      $transport->matricule = $request->matricule;
      $transport->nom = $request->nom;
      $transport->livreur_id = Auth::user()->id;
      $transport->save();
      return redirect()->route('transport.show');
    }
  
    #doesn't work
    public function edit(transport $transport)
    {        
      return view('transport.edit', ['transport' => $transport]);
    }
  
    public function update(Request $request, transport $transport)
    {
      
      $validate_mat = ($request->matricule != $transport->matricule) ? 'required|numeric|unique:transport': '';
      $request->validate([
        'matricule' => $validate_mat,
        'nom' =>'required|string|min:3|max:255',
        'image' => 'nullable|image|max:2048'
      ]);
      
      if($request->hasFile('image')) {    
        $transport->image = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/assets/img/transport', $transport->image);
      }
      else  $transport->image = 'default.jpg';

      $transport->matricule = $request->matricule;
      $transport->nom = $request->nom;
      $transport->livreur_id = Auth::user()->id;
      $transport->save();
      return redirect()->route('transport.edit', transport::find($request->matricule));
    }
  
    public function delete(transport $transport)
    {
      $transport->delete();
      return redirect()->back();
    }
}
