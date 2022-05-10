<div class="container">
    
    <a class="navbar-brand" href="{{ url('/') }}"><img class="w-100"
            src="{{ Session::get('site_setting') ? Session::get('site_setting')->logo : '' }}" alt="" width="auto"
            height="100"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-card-item">
                <a class="nav-link  active" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-card-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-card-item">
                <a class="nav-link" href="{{ url('/post') }}">Create Post</a>
            </li>
            <li class="nav-card-item">
<!-- Authentication Links -->
@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>@if (Auth::user()->image)
        <img class="image square-circle" src="{{ asset('/storage/images/' . Auth::user()->image) }}"
            alt="" style="width: 25px;">
    @endif
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{ route('change.profile') }}">
            Update profile
        </a>


        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest
            </li>
        </ul>
    </div>
</div>
