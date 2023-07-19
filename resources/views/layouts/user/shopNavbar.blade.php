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
        <li><a href="{{ route('shop') }}">Shop</a></li>
        <li><a href="{{ route('riwayat') }}">History</a></li>
        <li><a href="{{ route('checkout') }}">Your Cart</a></li>
        {{-- <li><a href="#menu">Menu</a></li> --}}
        <!-- <li><a href="#gallery">Gallery</a></li> -->
      </ul>

    </nav><!-- .navbar -->
    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }} <span class="caret"></span>
    </a>
  </div>
</header><!-- End Header -->
