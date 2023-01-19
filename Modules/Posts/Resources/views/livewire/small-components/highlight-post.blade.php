
@if ($this->searchKeyword == "")
<div class="">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        {{-- primary article --}}
        <div class="col-md-6 px-0">
            <strong class="d-inline-block mb-2 text-white">{{ $posts[0]->category->name }}</strong>
            <h1 class="display-4 fst-italic">{{ $posts[0]->title }}</h1>
            <p class="lead my-3">{{ Str::of($posts[0]->content)->limit(120) }}</p>
            <p class="lead mb-0"><a href="/posts/{{ $posts[0]->slug }}" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
        {{-- secondary article --}}
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{ $posts[1]->category->name }}</strong>
                <h3 class="mb-0">{{ $posts[1]->title }}</h3>
                <div class="mb-1 text-muted">{{ $posts[1]->created_at->format('M d') }}</div>
                <p class="card-text mb-auto">{{ Str::of($posts[1]->content)->limit(92) }}</p>
                <a href="/posts/{{ $posts[1]->slug }}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                {{-- secondary article --}}
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">{{ $posts[2]->category->name }}</strong>
                <h3 class="mb-0">{{ $posts[2]->title }}</h3>
                <div class="mb-1 text-muted">{{ $posts[2]->created_at->format('M d') }}</div>
                <p class="mb-auto">{{ Str::of($posts[1]->content)->limit(92) }}</p>
                <a href="/posts/{{ $posts[2]->slug }}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="d-none"></div>
@endif




