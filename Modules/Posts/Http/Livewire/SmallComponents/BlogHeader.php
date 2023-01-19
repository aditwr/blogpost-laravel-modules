<?php

namespace Modules\Posts\Http\Livewire\SmallComponents;

use Livewire\Component;

class BlogHeader extends Component
{
    public $searchKeyword;

    public function handleSearch(){
        // make an emit event
        $this->emit('doSearch', $this->searchKeyword);
    }

    public function render()
    {
        // when search keyword has value
        if($this->searchKeyword !== null){
            $this->handleSearch();
        }

        return view('posts::livewire.small-components.blog-header');
    }
}
