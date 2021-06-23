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

  public function show() {
    return view('order.viewMine', [
      'time' => $this->time,
      'orders' => commande::where('client_id', Auth::user()->id)->get()
    ]);
  }

  public function detail(commande $commande, $id)
  {
    $commande = commande::find($id);
    return view('order.details',
      [
        'time'   => $this->time,
        'order' => $commande,
        'products' => $commande->products
      ]);
  }

  public function edit(commande $commande, $id)
  {
    $commande = commande::find($id);
    if ($commande->livraison_id != NULL) {
      return view('order.edit', [
        'time' => $this->time,
        'order' => $commande
      ]);
    } else return dd('your can\'t change your order it is in the way');
  }

  public function delete(commande $commande, $id)
  {
    $commande = commande::find($id);
    $commande->products()->delete();
    $commande->delete(); 
    return redirect()->back();
  }
}
