<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\contact;
use App\Mail\contact_us;

class contactController extends Controller
{
  public function send(request $request)  
  { 
    $request->validate([
      'nom' => 'required|string|alpha|min:3|max:255',
      'prenom' => 'required|string|alpha|min:3|max:255',
      'email' => 'required|string|email',
      'telephone' => 'nullable|size:8|numeric',
      'image' => 'nullable|image|max:2048',
      'message' => 'required',
    ]);
    $contact              = new contact;
    $contact['nom']     = $request->nom;
    $contact['prenom']     = $request->prenom;
    $contact['objet']     = $request->subject;
    $contact['telephone']     = $request->telephone;
    $contact['email']     = $request->email;
    $contact['message']   = $request->message;
    $contact['fichier']   = NULL;
    $contact['client_id'] = $request->client_id;
    
    if(isset($validator))  return redirect()->back()->withErrors($validator)->withInput();
    else {
      Mail::to($request->email)->send(new contact_us());
      $contact->save();
      return redirect()->back()->with('success', true);
    }
  }
}
