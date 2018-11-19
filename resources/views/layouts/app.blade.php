<!DOCTYPE html>
<html lang="en">

  <head>

    <title>@yield('title')</title>
    
    <link href="{{URL::to('/new')}}/public/css/scrolling-nav.css" rel="stylesheet">
  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Go up - @yield('home')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#link1">zone1 - @yield('zone1')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#link2">zone2 - @yield('zone2')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#link3">zone3 - @yield('zone3')</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to Scrolling Nav</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
    </header>

    <section id="link1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>@yield('zone1')</h2>
            <p class="lead">@yield('content-up')</p>
            <ul>
              <li>@yield('line1')</li>
              <li>@yield('line2')</li>
              <li>@yield('line3')</li>
              <li>@yield('line4')</li>
              <li>@yield('line5')</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="link2" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>@yield('zone2')</h2>
            <p class="lead">@yield('content-mid')</p>
          </div>
        </div>
      </div>
    </section>

    <section id="link3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>@yield('zone3')</h2>
            <p class="lead">@yield('content-down')</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="{{URL::to('/new')}}/public/js/scrolling-nav.js"></script>

  </body>

</html>
