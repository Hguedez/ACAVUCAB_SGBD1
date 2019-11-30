<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ACAVUCAB.</title>
    <style >
      .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  .fondo{
    background-color: black;

  }
  .espacio{
    display: inline;
    color: white;
  }
  nav.navbar {
  
    background: #141519;
    background: linear-gradient(to right, #424448, #B7BCCD);

 
}
.dropnegro{
  color: #141519;
  text-align: center;
  
}
    </style>
  }
  </head>
  <body>
     <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <div class="container">
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link " href="/">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/catalogo">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ayuda</a>
        </li>

      </ul>
      <ul class="navbar-nav mr-auto">
      <!-- Authentication Links -->
      @guest
      
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
          </li>
      @endif
      
    @else
      <li class="nav-item active dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" data-target="dropme" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>
        <div class="dropdown"  >
                  <a class="" href="{{ route('logout') }}">
          <div class="dropdown-menu" id="dropme" aria-labelledby="dropdown04">
              <a class="dropnegro dropdown-item " href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesion') }}
              </a>
             
            <a class="dropnegro dropdown-item" href="/eventos">Mis eventos</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </div>
      </li>
    @endguest

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    
</div>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url(fondo_cerveza2.jpg); ">
        <div class="carousel-caption d-none d-md-block">
          <div class="container fondo col-sm-4">
          <h1>ACAVUCAB</h1>
          </div>
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(fondo_cerveza1.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <div class="container fondo col-sm-4">
          <h1>ACAVUCAB</h1>
          </div>
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(fondo_cerveza3.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <div class="container fondo col-sm-4">
          <h1>ACAVUCAB</h1>
          </div>
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    
</section>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>