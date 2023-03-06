<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Like;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['Categorie_id', 
                            'title', 
                            'artist_name', 
                            'description',
                            'file_path',
                            'cover_art'
                            ];

    public function categorie (){
        return $this->belongsTo(Categorie::class,'Categorie_id');
    }

    public function likes (){
        return $this->hasMany(Like::class);
    }
}
