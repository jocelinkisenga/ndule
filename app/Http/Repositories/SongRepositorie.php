<?php 

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Repositories\FileRepositorie;
use App\Http\Repositories\PhotoRepositorie;
use App\Models\Song;

class SongRepositorie{

	public static function upload_song($request){
		$photoRepositorie = new PhotoRepositorie();
		$newPhotoName = $photoRepositorie->save_photo($request->cover_at);
		
        $newSongName = SongRepositorie::save_music($request->song);

		$stoared = Song::create([
            'title'=>$request->title,
            'artist_name'=>$request->artist_name,
            'description'=>$request->description,
            'file_path'=>$newSongName,
            'cover_art'=>$newPhotoName,
            ]);
		return $stoared;
	}

	

	public static function save_music (UploadedFile $audio){
		$audio_name = FileRepositorie::rename_file($audio);
        $chemin_audio = $audio->storeAs('audios',$audio_name,'public_uploads');
        return $audio_name;
		}



	public static function single_song(int $id){
		$song = Song::find($id);
		return $song;
	}


}
