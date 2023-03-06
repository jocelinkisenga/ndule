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
       
        //  $this->emit("songPlayer",$this->song);
        $this->song = Song::whereId($id)->get();
       
        $this->dispatchBrowserEvent('name-updated', ['song' => $this->song]);
    }
}
