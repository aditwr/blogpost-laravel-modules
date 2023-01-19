<?php

namespace Modules\Posts\Http\Livewire;

use Livewire\Component;

class Show extends Component
{
    public $post;

    public function mount($post){
        $this->post = $post;
    }

    public function render()
    {

        return view('posts::livewire.show');
    }
}
