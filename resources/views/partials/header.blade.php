<!-- Header -->
<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-7">
          <span class="email">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 18 18">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
            <a href="mailto:hello@thetukang.com">hello@thetukang.com</a>
          </span>
        </div>
        <div class="col-5 d-md-flex align-items-center justify-content-end">
          <ul class="top-links list-inline m-0">
            @guest
              <li class="list-inline-item"><a href="{{ route('register') }}">Sign Up</a></li>
              <li class="list-inline-item"><a href="{{ route('login') }}">Login</a></li>
            @else
              {{-- @if (Auth::user()->role() == "superadmin" || Auth::user()->role() == "vendor") --}}
                <li class="list-inline-item mr-1" style="margin-right: 1.5rem;"><a href="{{ route('vendor.dashboard') }}">Vendor</a></li>
              {{-- @endif --}}
              <li class="list-inline-item mr-1" style="margin-right: 1.5rem;"><a href="{{ route('user.dashboard') }}">
                Dashboard - {{ Auth::user()->name }}</a></li>
              <li class="list-inline-item"><a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form></li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="holder">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6">

          <!-- Site Logo -->
          <strong class="logo d-block">
            <a href="{{-- route('user.index') --}}">
              <img src="{{ url('theme/images/logo.png')}}" alt="TheTukang">
            </a>
          </strong>
        </div>
        <div class="col-6">

          <!-- Navbar -->
          <nav class="navbar navbar-expand-md bg-transparent p-0 justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="services.html" data-toggle="dropdown">Our Services</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="dropdown">House Cleaning</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="dropdown">Aircond Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="dropdown">Plumbing Repair</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="dropdown">Electrical Wiring</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="dropdown">Local Moving / Budget Lorry</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
