<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ACAVUCAB</title>
    <style >
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
.tamano{
    font-size: 16px;
}

    </style>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">

                <div class="container">

                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav mr-auto ">
                      <li class="nav-item active tamano">
                        <a class="nav-link " href="/">Home
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      <li class="nav-item tamano">
                        <a class="nav-link" href="/catalogo">Catalogo</a>
                      </li>
                      <li class="nav-item tamano">
                        <a class="nav-link" href="#">Servicios</a>
                      </li>
                      <li class="nav-item tamano">
                        <a class="nav-link" href="#">Contacto</a>
                      </li>
                      <li class="nav-item tamano">
                        <a class="nav-link" href="#">Ayuda</a>
                      </li>

                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <!-- Authentication Links -->
                    @guest

                    <li class="nav-item tamano">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item tamano">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif

                  @else
                    <li class="nav-item active dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle tamano" id="dropdown04" data-toggle="dropdown" data-target="dropme" aria-haspopup="true" aria-expanded="false">
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
                          <a class="dropnegro dropdown-item" href="/ordenes">Mis ordenes</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                      </div>
                    </li>
                  @endguest

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2 tamano" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-dark my-2 my-sm-0 tamano" type="submit">Search</button>
                    </form>
                  </div>
                </div>

              </nav>
<div class="container">

    <h2>Agregar Comentario</h2>
<form action="/comentarios/{{$id_tipo_cerveza}}/tipos" method="POST">
        @csrf

      <input type="text" name="nombre" placeholder="Nombre de la cerveza" class="form-control mb-2"required>
      <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"required>

       <button clas="btn btn-primary btn-block" type="submit">Agregar</button>
       <a href="/tipoCerveza" class="btn btn-primary btn-sm">Volver al menu anterior</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
