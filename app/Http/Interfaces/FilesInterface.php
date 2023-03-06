<?php

namespace App\Http\Interfaces;

	use Illuminate\Http\UploadedFile;
	
	interface FilesInterface{

		public function save_photo(UploadedFile $file);

		// public function save_music(UploadedFile $file);

		// public function rename_song(UploadedFile $file);
		public static function rename_photo(UploadedFile $file);

	}