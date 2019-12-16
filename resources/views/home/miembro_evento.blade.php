@extends('layouts.listaEventoslayout')
@section('content')
     <!-- Navigation -->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">

      <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link tamano" href="/">Home
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
          <li class="nav-item active dropdown tamano">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" data-target="dropme" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            <div class="dropdown"  >
                      <a class="" href="{{ route('logout') }}">
              <div class="dropdown-menu" id="dropme" aria-labelledby="dropdown04">
                  <a class="dropnegro dropdown-item tamano" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __(' Cerrarsesion') }}
                  </a>

                <a class="dropnegro dropdown-item tamano" href="/eventos">Mis eventos</a>
                <a class="dropnegro dropdown-item tamano" href="/ordenes">Mis ordenes</a>

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

<!-- Page Content -->

  <div class="container">
      <!--<h1>Lista de eventos creadas por el usuario: {{ auth()->user()->name }}</h1>-->
      <h4 class="centro">Miembros proveedores de los eventos</h4>
      <table class="table table-light">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Razon social</th>
              <th scope="col">Nombre del evento</th>
              <th scope="col">Fecha</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          @foreach ($miembro_evento as $item)
          <tr>
              <td>{{$item->razon_social}}</td>
              <td>{{$item->nombre_evento}}</td>
              <td>{{$item->fecha}}</td>
              <td>
                  <button class="btn btn-dark btn-sm" type="submit">Eliminar</button>
              </td>
          </tr>

      @endforeach

      </table>

  </div>

 @endsection
