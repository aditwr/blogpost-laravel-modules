<?php

namespace Modules\Posts\Http\Livewire\Dashboard;

use Livewire\Component;
use Modules\Posts\Entities\Post;
use Livewire\WithPagination;

class ShowAllPosts extends Component
{
    use WithPagination;

    protected $posts;
    protected $paginationTheme = 'bootstrap';

    public function getDataPosts(){
        $posts = Post::latest();

        return $posts;
    }

    public function mount(){
        $this->posts = Post::latest()->paginate(3);
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        $this->emit('showNotification', "Post '$post->title' has been successfully deleted!");
    }

    public function render()
    {
        $posts = $this->getDataPosts()->paginate(5);
        return view('posts::livewire.dashboard.show-all-posts', [
            'posts' => $posts,
        ]);
    }
}
