<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\User;
use App\contact;
use App\Mail\contact_us;

class contactController extends Controller
{
  public function send()
  { 
    $contact              = new contact;
    $contact['objet']     = \request('subject');
    $contact['email']     = \request('email');
    $contact['message']   = \request('message');
    $contact['fichier']   = NULL;
    $contact['client_id'] = \request('client_id');
    $contact->save();
    Mail::to(\request('email'))->send(new contact_us());
    $mail = (count(Mail::failures()) > 0) ? redirect()->back()->withErrors(['mail' => 'send email failure']) : redirect()->back()->with('success', true);
    
    return $mail;
    //return ($mail) ? redirect()->back()->with(['success' => true]): redirect()->back()->withErrors(['mail' => 'send email failure']);
  }
}
