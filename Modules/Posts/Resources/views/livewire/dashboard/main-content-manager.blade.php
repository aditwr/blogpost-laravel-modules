<div>
    @switch($menuActive)
        @case('home')
            @livewire('posts::dashboard.main-content.home')
            @break
        @case('show-all')
            @livewire('posts::dashboard.show-all-posts')
            @break
        @case('create')
            @livewire('posts::dashboard.main-content.create')
            @break
        @case('update')
            @livewire('posts::dashboard.main-content.update')
            @break
        @default

    @endswitch
</div>
