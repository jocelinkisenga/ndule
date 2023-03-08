<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class ButtonPlayer extends Component
{
    protected $song;
    public $musicid;

    public function render()
    {
        return view('livewire.button-player');
    }

    public function play($id){
        $song = Song::whereId($id)->first();
      
         $this->emit("songPlayer",$song);
     
       
    //  $this->dispatchBrowserEvent('name-updated', ['song' => $song]);
    }
}
