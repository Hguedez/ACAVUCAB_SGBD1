@extends('layouts.listaEventoslayout')
@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active tamano letra">
                <a class="nav-link " href="/home/{{$correo}}/funciona">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item tamano letra">
                <a class="nav-link" href="/catalogo">Catalogo</a>
              </li>
              <li class="nav-item tamano letra">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item tamano letra">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item tamano letra">
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
    
                    <a class="dropnegro dropdown-item" href="/eventos/{{$correo}}/funciona">Mis eventos</a>
                    <a class="dropnegro dropdown-item" href="/ordenes">Mis ordenes</a>
                    <a class="dropnegro dropdown-item" href="/eventos/1/miembros/1/asociados/{{$correo}}/funciona">Miembros</a>
                    <a class="dropnegro dropdown-item" href="/tipoCerveza/{{$correo}}/funciona">Tipo de cerveza</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </div>
              </li>
              @else
                    @guest

                    <li class="nav-item tamano letra">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item tamano letra">
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
                        <a class="dropnegro dropdown-item tamano letra" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesion') }}
                        </a>
                        <a class="dropnegro dropdown-item tamano letra" href="/eventos">Mis eventos</a>
                        <a class="dropnegro dropdown-item tamano letra" href="/ordenes">Mis ordenes</a>
                        <a class="dropnegro dropdown-item tamano letra" href="/eventos/1/horarios/1/funciona">Horarios</a>
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
                        <input class="form-control mr-sm-2 tamano letra" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark my-2 my-sm-0 tamano letra" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </nav>
    <!-- Page Content -->
    <div class="event">
  <div class="container " >
        
        <h4 class="centro">Correos</h4>
        <table class="table table-primary table-bordered tope">
            <thead>
              <tr>
                <th scope="col tamano letra">Correo</th>
                <th scope="col tamano letra">Eliminar</th>
              </tr>
            </thead>
        @foreach ($correos as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>
                  <form action={{ route('correosDestroy',['id_correo' => $item->id_correo]) }} method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-dark btn-sm tamano letra" type="submit">Eliminar</button>
                      </form>
                </td>
            </tr>

        @endforeach
        </table>
        <a href="/eventos/1/miembros/1/asociados/{{$correo}}/funciona" class="btn btn-secondary btn-lg btn-block">Atras</a>

  </div>
    </div>
@endsection
