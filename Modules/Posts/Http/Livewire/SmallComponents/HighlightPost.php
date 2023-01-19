<?php

namespace Modules\Posts\Http\Livewire\SmallComponents;

use Livewire\Component;
use Modules\Posts\Entities\Post;

class HighlightPost extends Component
{
    public $posts;
    public $searchKeyword;

    // listener
    protected $listeners = [
        'doSearch'=>"handleSearchEvent",
    ];

    public function mount($posts){
        $this->posts = $posts;
    }

    public function handleSearchEvent($searchKeyword){
        $this->searchKeyword = $searchKeyword;
    }

    public function render()
    {
        return view('posts::livewire.small-components.highlight-post');
    }
}
