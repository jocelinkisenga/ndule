<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view("page.albums");
    }

    public function create(){
        $albums = Album::all();
        return view('admin.page.addAlbum',compact('albums'));
}
}