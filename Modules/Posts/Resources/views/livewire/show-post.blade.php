
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        @if ($this->searchKeyword == null)
            {{ $title }}
        @else
           Search : "{{ $searchKeyword }}"
        @endif
      </h3>
      {{-- @if ($searchKeyword !== null)
            {{ $searchKeyword }}
      @endif --}}

      @foreach ($posts as $post)
          <article class="blog-post">
              <h2 class="blog-post-title">{{ $post->title }}</h2>
              <p class="blog-post-meta">{{ $post->created_at->format('M d, Y') }} by <a href="#">Mark</a> - in <a href="/posts/categories/{{ $post->category->slug }}" class="">{{ $post->category->name }}</a></p>

              <p>{{ Str::of($post->content)->limit(120) }}</p>
              <hr>
          </article>
      @endforeach

        {{ $posts->links() }}
      {{-- pagination --}}
      {{-- <nav class="blog-pagination">

      </nav> --}}
  </div>
