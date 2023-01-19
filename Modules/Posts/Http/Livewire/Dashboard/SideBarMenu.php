<?php

namespace Modules\Posts\Http\Livewire\Dashboard;

use Livewire\Component;

class SideBarMenu extends Component
{
    public $menuActive = 'home';

    public function handleMenuChange($menu){
        $this->menuActive = $menu;

        // create emit when menu active is changed
        $this->emit('dashboardActiveMenuChanged', $this->menuActive);
    }

    public function render()
    {
        return view('posts::livewire.dashboard.side-bar-menu');
    }
}
