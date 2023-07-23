<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // get categories from database
        $categories = DB::table('category')
            ->where('status', '=', 1)
            ->get()->toArray();

        return view('pages.addnote', compact('categories'));
    }
}