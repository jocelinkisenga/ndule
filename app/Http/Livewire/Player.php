<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class Player extends Component
{
    public $music;

    protected $listerners = ["songPlayer" => "songPlayer"];

    
    public function render()
    {
     
        $this->music = $this->songPlayer();
        return view('livewire.player');
    }

    public function songPlayer($song = null){
       return Song::whereId($song)->get();
       
    }
}
 