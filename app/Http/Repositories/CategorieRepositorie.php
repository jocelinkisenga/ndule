<?php 
namespace App\Http\Repositories;


use App\Models\Categorie;
use App\Models\Song;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
class CategorieRepositorie {

	protected int $categorie_id;

	public static function get_all_categories(){
		$categories = Categorie::all();
		return $categories;
	}

	public static function categorie_by_id(int $id){
		
		$categorie = Categorie::find($id);
		if ($categorie != null){
		return $categorie->name;
		}
		else{
			return back();
		}
	}

	public static function songs_by_categorie(int $id){
		
		$songs = Song::where('Categorie_id', '=', $id)->get();
		return $songs;
	}

	public static  function get_katanga_music(int $id){
		$this->$categorie_id = $id;
		$songs = Song::where('Categorie_id', '=', '.$this->categorie_id.');
		return $songs;
	}

	public static  function get_gospel_music(int $id){
		$this->$categorie_id = $id;
		$songs = Song::where('Categorie_id', '=', '.$this->categorie_id.');
		return $songs;
	}

	public static  function get_international_music(int $id){
		$this->$categorie_id = $id;
		$songs = Song::where('Categorie_id', '=', '.$this->categorie_id.');
		return $songs;
	}


}