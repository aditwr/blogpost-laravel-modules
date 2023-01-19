<?php

namespace Modules\Posts\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Posts\Entities\Post;


class ShowPost extends Component
{
    use WithPagination;

    // property
    public $searchKeyword;

    // listener
    protected $listeners = [
        'doSearch'=>'handleSearch',
    ];

    protected $paginationTheme = 'bootstrap';

    public function handleSearch($searchKeyword){
        $this->searchKeyword = $searchKeyword;
    }

    public function queryPostsData(){
        $posts = Post::latest();

        // if search keyword has a value
        if($this->searchKeyword != ""){
            $posts->where('title', 'like', '%'.$this->searchKeyword.'%');
        }

        return $posts;
    }

    public function render()
    {
        $posts = $this->queryPostsData();

        return view('posts::livewire.show-post', [
            'posts' => $posts->paginate(3),
            'title' => 'Recently Posts'
        ]);
    }
}
