<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::latest()->get();
        return view("page.albums",compact('albums'));
    }

    public function create(){
        $albums = Album::all();
        return view('admin.page.addAlbum',compact('albums'));
}
}