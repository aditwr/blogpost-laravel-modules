<?php

namespace Modules\Posts\Http\Livewire\Dashboard;

use Livewire\Component;

class MainContentManager extends Component
{
    public $menuActive = 'home';

    protected $listeners = [
        'dashboardActiveMenuChanged'=> 'handleActiveMenuChanged',
        'dashboardActiveMenuEdit'=>'handleActiveMenuEdit'
    ];

    public function handleActiveMenuChanged($menuActive){
        $this->menuActive = $menuActive;
    }
    public function handleActiveMenuEdit($data){
        $this->menuActive = $data[0];
        $post = $data[1];

        // create omit
        $this->emit('givePostDataEdit', $post);
    }

    public function render()
    {
        return view('posts::livewire.dashboard.main-content-manager');
    }
}
