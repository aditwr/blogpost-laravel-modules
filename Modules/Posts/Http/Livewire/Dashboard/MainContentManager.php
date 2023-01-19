<?php

namespace Modules\Posts\Http\Livewire\Dashboard;

use Livewire\Component;

class MainContentManager extends Component
{
    public $menuActive = 'home';

    protected $listeners = [
        'dashboardActiveMenuChanged'=> 'handleActiveMenuChanged'
    ];

    public function handleActiveMenuChanged($menuActive){
        $this->menuActive = $menuActive;
    }

    public function render()
    {
        return view('posts::livewire.dashboard.main-content-manager');
    }
}
