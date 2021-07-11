<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    {{-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> --}}
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo mr-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a> 

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="{{route('pages.home')}}">HOME</a></li>
        <li><a href="{{route('pages.about')}}">ABOUT</a></li>
        <li><a href="{{route('pages.branchs')}}">BRANCHES</a></li>
        <li><a href="{{route('pages.projects')}}">PROJECTS</a></li>
        <li><a href="{{route('pages.ceid')}}">CEID</a></li>
        <li><a href="{{route('pages.membership')}}">MEMBERSHIP</a></li>
        <li><a href="{{route('pages.contact')}}">CONTACT US</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
 

  </div>
</header><!-- End Header -->