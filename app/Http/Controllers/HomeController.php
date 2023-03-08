<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Repositories\HomeDatabaseRepositorie;
use App\Http\Repositories\CategorieRepositorie;
use App\Models\Categorie;
use App\Models\Song;

class HomeController extends Controller
{
    
   

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
 

        $weekly = HomeDatabaseRepositorie::weekly();
        $latest  = HomeDatabaseRepositorie::new();
        $artists = HomeDatabaseRepositorie::randomArtists();
        $last = Song::latest()->limit(1)->get();
     

        return view('page.index',compact('weekly','latest','artists','last'));
    }


    
}
