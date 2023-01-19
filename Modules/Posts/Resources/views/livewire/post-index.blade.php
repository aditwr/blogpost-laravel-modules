<head>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        /* stylelint-disable selector-list-comma-newline-after */

        .blog-header {
        border-bottom: 1px solid #e5e5e5;
        }

        .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
        font-size: 2.25rem;
        }

        .blog-header-logo:hover {
        text-decoration: none;
        }

        h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
        }

        .display-4 {
        font-size: 2.5rem;
        }
        @media (min-width: 768px) {
        .display-4 {
            font-size: 3rem;
        }
        }

        .flex-auto {
        flex: 0 0 auto;
        }

        .h-250 { height: 250px; }
        @media (min-width: 768px) {
        .h-md-250 { height: 250px; }
        }

        /* Pagination */
        .blog-pagination {
        margin-bottom: 4rem;
        }

        /*
        * Blog posts
        */
        .blog-post {
        margin-bottom: 1.6rem;
        }
        .blog-post-title {
        font-size: 2.5rem;
        }
        .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #727272;
        }

        /*
        * Footer
        */
        .blog-footer {
        padding: 2.5rem 0;
        color: #727272;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
        }
        .blog-footer p:last-child {
        margin-bottom: 0;
        }

      </style>
</head>

<div class="container">
    {{-- blog header --}}
    @livewire('posts::small-components.blog-header')

    {{-- category header --}}
    @livewire('posts::small-components.category-header')
</div>

  <main class="container">
        {{-- highlight posts --}}
        @livewire('posts::small-components.highlight-post', ['posts'=> $posts])

    <div class="row g-5">
        {{-- list of posts --}}
        @livewire('posts::show-post')

        {{-- sidebar --}}
        @livewire('posts::small-components.sidebar')
    </div>

  </main>

  <footer class="blog-footer">
    <p>Created with &#10084; by <a href="https://twitter.com/mdo">@aditya</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
