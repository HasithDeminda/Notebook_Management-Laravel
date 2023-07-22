<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
   public function dashboard()
   {
      return view('pages.dashboard');
   }

    public function favourites()
    {
        return view('pages.favourites');
    }
    public function addnote()
    {
        return view('pages.addnote');
    }
}
