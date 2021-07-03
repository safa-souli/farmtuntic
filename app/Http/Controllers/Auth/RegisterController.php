<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = 'verify';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data,
      [
        'nom' => ['required', 'string', 'max:255', 'alpha'],
        'prenom' => ['required', 'string', 'max:255', 'alpha'],
        'email' => ['required', 'string', 'email', 'unique:client'],
        'password' => ['required', 'string', 'min:8', 'regex:#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', 'confirmed'],
      ],
      [
        'nom.alpha' => 'Votre nom pas correct',
        'prenom.alpha' => 'Votre prénom pas correct',
        'password.min' => 'Le mot de passe doit être au moins :min caractères.',
        'password.regex' => 'Le mot de passe doit contenir au moins 1 lettre, 1 chiffre et 1 caractère spécial.'
      ]
    );
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param array $data
   * @return \App\User;
   */
  protected function create(array $data)
  {
    $user = User::create([
      'photo' => 'homme.jpg',
      'nom' => ucwords(strtolower($data['nom']), ' '),
      'prenom' => ucwords(strtolower($data['prenom']), ' '),
      'email' => strtolower($data['email']),
      'password' => Hash::make($data['password']),
    ]);
    return $user;
  }
}
