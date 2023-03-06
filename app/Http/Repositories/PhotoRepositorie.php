<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Repositories\FileRepositorie;

class PhotoRepositorie {

	

	public  function save_photo (UploadedFile $image){

        $image_name = FileRepositorie::rename_file($image);
        $chemin_photo = $image->storeAs('images',$image_name,'public_uploads');
        return $image_name;
		}

	}