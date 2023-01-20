<?php

namespace Modules\Posts\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Posts\Entities\Category;
use Modules\Posts\Entities\Post;

class PostIndex extends Component
{
    // use WithPagination;

    public $posts;

    protected $paginationTheme = 'bootstrap';

    public function mount(){
        $this->posts = Post::latest()->get();
    }

    public function getDataPosts(){
        $posts = Post::latest()->limit(5);
        return $posts->with('category')->paginate(3);
    }
    public function render()
    {
        return view('posts::livewire.post-index');
    }
}
