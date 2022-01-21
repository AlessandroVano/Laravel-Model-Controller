<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home') }}">MY SITE TITLE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link
                @if( Request::route()->getName() === 'home') active  @endif" aria-current="page" href="{{ route('home')}}" >
             HOME
               </a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                @if( Request::route()->getName() === 'movie') active  @endif" aria-current="page" href="{{ route('movie')}}" >
             MOVIES
               </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>