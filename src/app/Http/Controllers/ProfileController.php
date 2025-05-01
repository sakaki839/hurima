<?php

namespace App\Http\Controllers;

use Illuminate\Http\ProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile()
  {
    return view('/mypage/profile');
  }

    public function mypage(Request $request)
  {
    //
    $profile = $request->only(['name', 'post code', 'address','property']);
    return view('mypage', ['profile' => $profile]);
  }

   public function store()
   {
    //
    $profile = $request->only(['name', 'post code', 'address','property']);
    Profile::create($profile);
   }
}
