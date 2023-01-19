<?php

namespace Modules\Posts\Http\Livewire\SmallComponents;

use Livewire\Component;

class Notification extends Component
{

    public $message;

    protected $listeners = [
        'showNotification'=>'handleNotification',
    ];

    public function handleNotification($message){
        $this->message = $message;
    }

    public function close(){
        $this->message = null;
    }

    public function render()
    {
        return view('posts::livewire.small-components.notification');
    }
}
