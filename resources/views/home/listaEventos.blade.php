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

        	body {
  				padding-top: 56px;
          background-image: url("/fondoevento.jpg");
          background-size: cover;
			}

      .dropnegro{
  color: #141519;
  text-align: center;

}
      nav.navbar {
            background: #141519;
            background: linear-gradient(to right, #424448, #B7BCCD);
        }
        .tamano{
          font-size: 16px;
        }
        .tope{
            margin-top: 10px;
        }
        .centro{
            text-align: center;
        }

    </style>
  </head>
  <body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active">
                <a class="nav-link " href="/home/{{$correo}}/funciona">Home
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
             
              @if ($correo ?? '')
              <li class="nav-item active dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" data-target="dropme" aria-haspopup="true" aria-expanded="false">
                  {{ $correo ?? '' ?? '' }} <span class="caret"></span>
                </a>
                <div class="dropdown"  >
                  <a class="" href="{{ route('logout') }}">
                  <div class="dropdown-menu" id="dropme" aria-labelledby="dropdown04">
                    <a class="dropnegro dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                              {{ __('Cerrar sesion') }}
                    </a>
    
                    <a class="dropnegro dropdown-item" href="/eventos/{{$correo}}">Mis eventos</a>
                    <a class="dropnegro dropdown-item" href="/ordenes">Mis ordenes</a>
                    <a class="dropnegro dropdown-item" href="/eventos/1/miembros/1/asociados">Miembros</a>
                    <a class="dropnegro dropdown-item" href="/tipoCerveza">Tipo de cerveza</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </div>
              </li>
              @else
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
    
                    <a class="dropnegro dropdown-item" href="/eventos/{{Auth::user()->name}}/funciona">Mis eventos</a>
                    <a class="dropnegro dropdown-item" href="/ordenes">Mis ordenes</a>
                    <a class="dropnegro dropdown-item" href="/eventos/1/miembros/1/asociados">Miembros</a>
                    <a class="dropnegro dropdown-item" href="/tipoCerveza">Tipo de cerveza</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </div>
              </li>
            @endguest
              @endif
              </ul>
                <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </nav>
    <!-- Page Content -->
    <div class="event">
  <div class="container " >
        
        <h4 class="centro">Eventos</h4>
        <table class="table table-primary table-bordered tope">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Entradas disponibles</th>
                <th scope="col">Horario</th>
                <th scope="col">Miembros responsables</th>
              </tr>
            </thead>
        @foreach ($eventos as $item)
            <tr>
                <td>{{$item->nombre_evento}}</td>
                <td>{{$item->fecha}}</td>

                <td>
                  <form action={{ route('eventosDestroy',['id_evento' => $item->id_evento]) }} method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark btn-sm" type="submit">Eliminar</button>
                  </form>

                </td>
                <td>
                    <a href="/eventos/{{$item->id_evento}}/entradas/{{$correo}}/funciona" class="btn btn-dark btn-sm">Ver</a>
                    <a href="/eventos/{{$item->id_evento}}/entradas/{{$correo}}/funciona/create" class="btn btn-dark btn-sm">Agregar</a>
                </td>
                <td>
                  <a href="/eventos/{{$item->id_evento}}/horarios/1/funciona" class="btn btn-dark btn-sm">Horarios</a>
                </td>
                <td>
                    <a href="/eventos/{{$item->id_evento}}/miembros/{{$item->id_miembro}}/asociados" class="btn btn-dark btn-sm letra">Miembros </a>
                </td>
            </tr>

        @endforeach
        </table>
        <a href="/eventos/create" class="btn btn-secondary btn-lg btn-block">Nuevo Evento</a>
        <!--<a href="/entradas/create" class="btn btn-secondary btn-lg btn-block">Nueva entrada</a>-->
        <a href="/eventos/1/horarios/1/funciona/create" class="btn btn-secondary btn-lg btn-block">Crear Horario</a>
        <!--<a href="/eventos/1/miembros/1/miembroevento/create" class="btn btn-secondary btn-lg btn-block">Asignar un Evento a un miembro</a>-->
        <!--<a href="/eventos/1/miembros/1/asociados/create" class="btn btn-secondary btn-lg btn-block">Crear miembro</a>-->


  </div>
    </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
