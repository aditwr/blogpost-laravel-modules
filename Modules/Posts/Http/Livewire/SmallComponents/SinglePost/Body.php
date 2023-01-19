<?php

namespace Modules\Posts\Http\Livewire\SmallComponents\SinglePost;

use Livewire\Component;

class Body extends Component
{
    public $post;

    public function mount($post){
        $this->post = $post;
    }

    public function render()
    {
        return view('posts::livewire.small-components.single-post.body');
    }
}
