<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view("pages.albums");
    }

    public function create(){
        $albums = Album::all();
        return view('admin.pages.addAlbum',compact('albums'));
}
}