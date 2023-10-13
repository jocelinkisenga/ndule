<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PhotoRepositorie;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public $repositorie;
    public function __construct(){
        $this->repositorie = new PhotoRepositorie;
    }
    public function index(){

        $artists = Artist::latest()->get();
        
        return view('page.artists',compact('artists'));
    }

    public function create(){
        $artistes = Artist::all();
        return view('admin.page.addArtiste',compact('artistes'));
    }

    public function store(Request $request){
        $newPhotoName = $this->repositorie->save_photo($request->image);
        Artist::create([
            'name'=>$request->name,
            'image'=>$newPhotoName,
            'bio'=> $request->bio
        ]);

        return redirect()->back();
    }

    public function show (int $id){
        
            $artist = Artist::find($id); 
        return view("page.singleArtist",compact('artist'));
    }
}
