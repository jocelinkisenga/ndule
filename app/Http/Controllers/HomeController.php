<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Repositories\HomeDatabaseRepositorie;
use App\Http\Repositories\CategorieRepositorie;
use App\Models\Categorie;
class HomeController extends Controller
{
    
   

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        // $katanga_music = HomeDatabaseRepositorie::get_katanga_music();    
        // $gospel_music = HomeDatabaseRepositorie::get_gospel_music();
        // $international_music = HomeDatabaseRepositorie::get_international_music();
        // $all_categories = CategorieRepositorie::get_all_categories();

        // return response()->json([
        //                         'katanga'=>$katanga_music,
        //                         'gospel'=>$gospel_music,
        //                         'international'=>$international_music
        //                         ],200);

        $weekly = HomeDatabaseRepositorie::weekly();
        $latest  = HomeDatabaseRepositorie::new();
     

        return view('page.index',compact('weekly','latest'));
    }


    
}
