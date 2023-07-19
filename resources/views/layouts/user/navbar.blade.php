<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center bg-dark">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1><span>Naiki Eatery</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <!-- <li><a href="#gallery">Gallery</a></li> -->
        {{-- <!-- @if (Auth::user())
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
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
        @endif --> --}}
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>

      </ul>

    </nav><!-- .navbar -->
    @if (Auth::guest())
      <div class="d-flex flex-row justify-content-end align-items-center">
        <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
        <a class="btn-book-a-table2" href="{{ route('register') }}">SignUp</a>
      </div>
    @else
      <div class="d-flex flex-row justify-content-end align-items-center">
        <a href="{{ route('profile.edit') }}" type="button" class="btn btn-primary">
          <i class="fa-solid fa-user"></i>
        </a>
        <li class="nav-item d-none d-sm-inline-block">
          <a type="button" class="btn btn-primary mx-2" href="{{ route('shop') }}">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </div>
    @endif
  </div>
</header><!-- End Header -->
