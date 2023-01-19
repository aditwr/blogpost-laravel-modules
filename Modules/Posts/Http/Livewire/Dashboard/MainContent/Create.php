<?php

namespace Modules\Posts\Http\Livewire\Dashboard\MainContent;

use Livewire\Component;
use Illuminate\Support\Str;
use Modules\Posts\Entities\Post;
use Modules\Posts\Entities\Category;

class Create extends Component
{
    public $title;
    public $slug;
    public $content;
    public $categoryId;

    // define rules for property
    protected $rules = [
        'title'=>['required','min:2', 'max:100'],
        'slug' => ['required', 'unique:posts,slug'],
        'content' => ['required', 'min:10'],
        'categoryId' => ['required']
    ];

    public function store(){
        // validate the properties
        $this->validate();

        $post = Post::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category_id' => $this->categoryId,
        ]);

        $this->emit('showNotification', "Post '$post->title' created successfully!");
    }

    public function updated($component, $value){
        if($this->title != ""){
            $this->slug = Str::slug($this->title);
        }
    }

    public function render()
    {
        $categories = Category::all();
        return view('posts::livewire.dashboard.main-content.create', [
            'categories' =>$categories,
        ]);
    }
}
