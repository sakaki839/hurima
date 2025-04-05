<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function top()
  {
    return view('top');
  }

 

   public function  register()
  {
    return view(' register');
  }

  public function mypage()
  {
    return view('mypage');
  }


  public function login()
  {
    return view('login');
  }


public function profile()
  {
    return view('/mypage/profile');
  }

 public function item()
  {
    return view('item');
  }
}