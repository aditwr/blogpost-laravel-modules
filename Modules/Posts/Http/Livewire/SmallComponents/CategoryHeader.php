<?php

namespace Modules\Posts\Http\Livewire\SmallComponents;

use Livewire\Component;
use Modules\Posts\Entities\Category;

class CategoryHeader extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('posts::livewire.small-components.category-header', [
            'categories'=>$categories,
        ]);
    }
}
