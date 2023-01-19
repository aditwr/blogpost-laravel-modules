<?php

namespace Modules\Posts\Http\Livewire\Dashboard;

use Livewire\Component;
use Modules\Posts\Entities\Post;
use Livewire\WithPagination;

class ShowAllPosts extends Component
{
    use WithPagination;

    protected $posts;

    public function getDataPosts(){
        $posts = Post::latest();

        return $posts;
    }

    public function mount(){
        $this->posts = Post::latest()->paginate(3);
    }
    public function render()
    {
        // $posts = $this->getDataPosts();
        // $this->posts = $posts->paginate(3);
        return view('posts::livewire.dashboard.show-all-posts');
    }
}
