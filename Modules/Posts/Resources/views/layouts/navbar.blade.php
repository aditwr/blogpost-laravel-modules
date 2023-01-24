<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/posts" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="/posts/list" class="nav-link px-2 link-dark">Categories</a></li>
            </ul>



            @auth
                {{-- user login menu --}}
                <div class="d-flex flex-row align-content-center w-auto">
                    <p class="h-100 d-flex mx-3 fw-bolder">{{ auth()->user()->name }}</p>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/signout">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="col-md-3 text-end">
                    {{-- <button type="button" class="btn btn-outline-primary me-2">Login</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Login</button> --}}
                    <a href="/login" class="btn btn-primary">Login</a>
                </div>
            @endauth


        </div>
    </div>
</header>
