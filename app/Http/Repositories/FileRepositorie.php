<?php

namespace App\Http\Repositories;



class FileRepositorie  {


	public static function rename_file($file){

		$new_name =time().'.' .$file->getClientOriginalName();
		return $new_name;
	}

	public function get_size($file){
		
	}
	

	}