<div class="nav-scroller py-1 mb-3">
    <nav class="nav d-flex justify-content-between">
      @foreach ($categories as $category)
          <a class="p-2 link-secondary" href="/posts/categories/{{ $category->slug }}">{{ $category->name }}</a>
      @endforeach
    </nav>
</div>
