<?php
namespace App\Http\Repositories;

use App\Models\Categorie;
use App\Models\Song;


class HomeDatabaseRepositorie {


	public static function get_katanga_music () {
		$songs = Song::where('Categorie_id', '=', 1)->get();
		return $songs;

	}
	public static function get_international_music (){
		$songs = Song::where('Categorie_id', '=', 3)->get();
		return $songs;
		
	}
	public static function get_gospel_music (){
		$songs = Song::where('Categorie_id', '=', 2)->get();
		return $songs;
	}
	
	public static function weekly(){
		return Song::latest()->inRandomOrder()->limit(15)->get();
	}

	public static function new() {
		return Song::latest()->limit(4)->get();
	}
}