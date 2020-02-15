


<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
<header role="banner">
  <div class="top-bar">
    <div class="container">
     
    </div>
  </div>

  <div class="container logo-wrap">
    <div class="row pt-5">
      <div class="col-12 text-center">
        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
        <h1 class="site-logo"><a href="{{ url('/welcome') }}">ESSAOUIRA CITY</a></h1>
      </div>
    </div>
  </div>
  
  <nav class="navbar navbar-expand-md  navbar-light bg-light">
    <div class="container">
      
     
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
          <a class="nav-link active" href="{{ url('/welcome') }}">Acceuil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arganier</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ url('/desc') }}">Descriptifs</a>
              <a class="dropdown-item" href="{{ url('/bloga') }}">Cooperative</a>
              
            </div>

          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bois de thuya</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="{{ url('/desct') }}">Descriptifs</a>
              <a class="dropdown-item" href="{{ url('/blogt') }}">Cooperative</a>
             
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/religion') }}">Relgion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/blog') }}">Culture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          </li>
        </ul>
        
      </div>
    </div
  
  </nav>
  </nav>

</header>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js')}}"></script>

    
    <script src="{{ asset('js/main.js')}}"></script>
 