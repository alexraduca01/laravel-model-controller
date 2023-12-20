<header>
    <nav class="w-100 bg-primary p-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link text-white fs-3 {{ Route::currentRouteName() == 'home' ? 'active' : 'text-white' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-3 {{ Route::currentRouteName() == 'movies.index' ? 'active' : 'text-white' }}" href="{{ route('movies.index') }}">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-3" href="#">Books</a>
            </li>
          </ul>
    </nav>
</header>
