<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\User;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['User_id', 'Song_id'];

    public function song(){
        return $this->belongsTo(Song::class);
    }

    public function user (){
        return $this->belongsTo(User::class);
    }
}
