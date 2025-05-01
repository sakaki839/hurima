<?php

namespace App\Http\Controllers;

use Illuminate\Http\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function register()
  {
    return view('/register');
  }

  public function top()
   {
    return view('/');
  //    $register = $request->only(['name', 'email', 'password', 'confirmation password']);
  //   return $view('top', ['register' => $register]);
  }

  //  public function store()
  //  {
  //   $post=new Post();
  //   $post->name=$request->name;
  //   $post->email=$request->email;
  //   $post->password=$request->password;
  //   $post->saive();
  //   return redirect()->route('post create');
  //  }
 }
