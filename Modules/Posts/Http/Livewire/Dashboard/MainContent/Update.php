<?php

namespace Modules\Posts\Http\Livewire\Dashboard\MainContent;

use Livewire\Component;
use Illuminate\Support\Str;
use Modules\Posts\Entities\Post;
use Modules\Posts\Entities\Category;

class Update extends Component
{
    public $title;
    public $slug;
    public $content;
    public $categoryId;
    public $oldDataPost;

    // define rules for property
    protected $rules = [
        'title'=>['required','min:2', 'max:100'],
        'content' => ['required', 'min:10'],
        'categoryId' => ['required'],
    ];

    protected $listeners = [
        'givePostDataEdit'=>'handleGivePostDataEdit',
    ];

    public function handleGivePostDataEdit($post){
        $this->title = $post['title'];
        $this->slug = $post['slug'];
        $this->content = $post['content'];
        $this->categoryId = $post['category_id'];
        $this->oldDataPost = $post;
    }

    public function updated($component, $value){
        if($this->title != ""){
            $this->slug = Str::slug($this->title);
        }
    }

    public function update(){
        // if title isn't change, then slug is remain same
        // if new slug is same as the old slug, then pass the validate process for slug
        // if new slug is different form the old one, which is title changed, then validate the slug to maintain uniqueness
        if($this->slug != $this->oldDataPost['slug']){
            $this->rules['slug'] = ['required', 'unique:posts,slug'];
        }

        $this->validate();

        $updated = Post::find($this->oldDataPost['id'])->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category_id'=> $this->categoryId,
        ]);
        $title = $this->oldDataPost['title'];

        $this->emit('dashboardActiveMenuChangedForNav', 'show-all');
    }

    public function render()
    {
        $categories = Category::all();
        return view('posts::livewire.dashboard.main-content.update', [
            'categories'=>$categories,
        ]);
    }
}
