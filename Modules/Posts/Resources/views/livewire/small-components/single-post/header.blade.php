<div class="">
    <article class="blog-post mt-3">
        <h1 class="blog-post-title mb-1">{{ $this->post->title }}</h1>
        <p class="blog-post-meta">{{ $this->post->created_at->format('M d, Y') }} by <a href="#">Jacob</a> in <a href="#">{{ $post->category->name }}</a></p>
      </article>
</div>
