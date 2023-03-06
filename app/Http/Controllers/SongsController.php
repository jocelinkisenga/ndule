<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categorie;
use App\Models\Song;
use App\Http\Repositories\SongRepositorie;

class SongsController extends Controller
{
    protected $categories;

public function create(){
    $categories = Categorie::all();
    $songs = Song::latest()->with('categorie')->get();
    return view('admin.page.songs.songs',compact('categories','songs'));
}
    
    public function store(Request $request ){
        $store = SongRepositorie::upload_song($request);
        if ($store){
            return redirect()->back();
        }
    }

    public function show (int $id){
        
        $song = SongRepositorie::single_song($id);
        if ($song){
            return response()->json($song,200);
       }else{
            return response()->json("song not found", 404);
       }

    }

    public function update(int $id){

    }
}
