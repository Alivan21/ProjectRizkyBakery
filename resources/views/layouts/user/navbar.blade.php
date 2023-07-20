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
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    @if (Auth::guest())
      <div class="d-flex flex-row justify-content-end align-items-center">
        <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
        <a class="btn-book-a-table2" href="{{ route('register') }}">SignUp</a>
      </div>
    @else
      <div class="d-flex flex-row justify-content-end align-items-center">
        {{-- <a href="{{ route('profile.edit') }}" type="button" class="btn btn-primary">

        </a> --}}
        <li class="nav-item d-none d-sm-inline-block">
          <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </button>
          <ul class="dropdown-menu px-3" aria-labelledby="userDropdown">
            <li><strong>Name:</strong> {{ $user['name'] }}</li>
            <li><strong>Email:</strong> {{ $user['email'] }}</li>
            <li><strong>Role:</strong> {{ $user['level'] }}</li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a></li>
          </ul>
          <a type="button" class="btn btn-primary mx-2" href="{{ route('shop') }}">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <a type="button" class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-sign-out"></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </div>
    @endif
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
    // Wait for the DOM to be ready
    $(document).ready(function() {
      // Get the current URL
      var currentURL = window.location.href;

      // Check if the current URL contains '/profile'
      if (currentURL.indexOf('/profile') !== -1) {
        // If the URL contains '/profile', hide the navigation bar
        $('#navbar').hide();
      }
    });
  </script>
</header><!-- End Header -->
