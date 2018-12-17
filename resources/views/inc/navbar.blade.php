<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">{{config('app.name')}}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/breeds') }}">Breeds</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        @if (Auth::check())
          @if (Auth::user()->isAdmin())
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/controlPanel') }}">Control Panel</a>
            </li>
          @endif  
        @endif
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
          @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> @endif
        </li>
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            {{-- TODO: authenticate create breed route --}}
            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="dropdown-item" href="{{ route('breeds.create') }}">Create Breed</a>
            <a class="dropdown-item" href="{{ route('profile.profile') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('profile.gallery') }}">Gallery</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>