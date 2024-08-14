<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraitmentController extends Controller
{
  public function register()
  {
    if (Auth::check())
    return redirect()->route('dashboard');

return view('registration');

  }

  public function connector() {
    Auth::logout();
    return redirect('/');

    return view('logout');

  }

  public function connect()
  {
    if (Auth::check())
    return redirect()->route('dashboard');

    return view('login');

  }

  public function go()
  {
    
    if (Auth::check())
        return redirect()->route('dashboard');

    return view('login');
  }
}
