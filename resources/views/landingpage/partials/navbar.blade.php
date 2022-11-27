  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/home') }}" class="logo d-flex align-items-center">
        <img src="{{ url('img/main-logo.png') }}" alt="">
        <span>SiCloud</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') || Request::is('/home') ? "active" : "" }}" href="{{ url('/home') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('course') ? "active" : "" }}" href="{{ url('/course') }}">Course</a></li>
          <li><a class="nav-link scrollto {{ Request::is('about') ? "active" : "" }}" href="{{ url('/about') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>

          @guest
            @if (Route::has('login'))
              <li>
                <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @endif
          @else
            <li class="dropdown">
              <a href="#">
                <span>{{ Auth::user()->username }}</span> 
                <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li>
                  <a class="" href="">
                    {{-- <button class="btn btn-primary btn-sm px-4"> --}}
                      <i class="bi bi-person"></i> My Profile
                    {{-- </button> --}}
                  </a>
                </li><hr>
                <li>
                  <a class="" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">

                      {{-- <button class="btn btn-danger btn-md"> --}}
                        {{ __('Logout') }}  
                      {{-- </button> --}}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              </ul>
            </li>
          @endguest
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->