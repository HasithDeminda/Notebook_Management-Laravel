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

    public function viewnotes()
    {
        return view('pages.viewnotes');
    }

    public function drafts()
    {
        return view('pages.drafts');
    }

    public function trash()
    {
        return view('pages.trash');
    }

    public function editnote()
    {
        return view('pages.editnote');
    }
}
