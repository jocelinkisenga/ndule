<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Http\Repositories\CategorieRepositorie;

class CategoriesController extends Controller
{
    public function create(){
        $categories = CategorieRepositorie::get_all_categories();
        return view("admin.pages.categorie.categories",compact("categories"));
    }

    public function store(Request $request){
            Categorie::create(['name'=>$request->name]);
            return redirect()->back();
    }

    public function show(string $slug, int $id){
        $all_categories = CategorieRepositorie::get_all_categories();
        $song_categorie = CategorieRepositorie::songs_by_categorie($id);
        $categorie_name = CategorieRepositorie::categorie_by_id($id);
        // return response()->json([
        //                 'categories'=>$all_categories, 
        //                 'name'=>$categorie_name,
        //                 'songs'=>$song_categorie
        //             ], 200);
        // }

        return view("pages.gospel",compact('song_categorie','categorie_name'));

 
}
}
