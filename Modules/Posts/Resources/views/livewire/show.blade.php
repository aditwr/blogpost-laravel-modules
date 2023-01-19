<div>
    <div class="row row g-5">
        <div class="col-md-8">
            @livewire('posts::small-components.single-post.header', ['post'=>$post])
            @livewire('posts::small-components.single-post.body', ['post'=>$post])
        </div>
        @livewire('posts::small-components.sidebar')
    </div>
</div>
