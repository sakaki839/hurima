<?php

namespace App\Http\Controllers;

use Illuminate\Http\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
  {
    return view('/mypage/profile');
  }

    public function mypage(Request $request)
  {
    //
    $profile = $request->only(['name', 'email', 'password','password']);
    return view('mypage', ['profile' => $profile]);
  }

   public function store()
   {
    //
     $profile = $request->only(['name', 'email', 'password','password']);
   }
}
