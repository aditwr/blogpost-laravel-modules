<div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
    {{-- <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
        <span data-feather="home" class="align-text-bottom"></span>
        Show All Posts
        </a>
    </li> --}}
    <li class="nav-item">
        <button class="border-0 bg-transparent nav-link @if($this->menuActive == 'home') active @endif" wire:click="handleMenuChange('home')"><span class="fw-bolder">Home</span></button>
    </li>
    <li class="nav-item">
        <button class="border-0 bg-transparent nav-link @if($this->menuActive == 'show-all') active @endif" wire:click="handleMenuChange('show-all')"><span class="fw-bolder">Show All Posts</span></button>
    </li>
    <li class="nav-item">
        <button class="border-0 bg-transparent nav-link @if($this->menuActive == 'create') active @endif" wire:click="handleMenuChange('create')"><span class="fw-bolder">Create New Posts</span></button>
    </li>
    <li class="nav-item">
        <button class="border-0 bg-transparent nav-link @if($this->menuActive == 'update') active @endif" wire:click="handleMenuChange('update')"><span class="fw-bolder">Modified Posts</span></button>
    </li>

    </ul>

    {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
    <span>Saved reports</span>
    <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle" class="align-text-bottom"></span>
    </a>
    </h6>
    <ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Current month
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Last quarter
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Social engagement
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Year-end sale
        </a>
    </li>
    </ul> --}}
  </div>
