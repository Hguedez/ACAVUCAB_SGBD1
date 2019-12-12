@extends('layouts.listaEventoslayout')
@section('content')
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
    <!-- Page Content -->
    <div class="event">
  <div class="container " >
        <!--<h1>Lista de eventos creadas por el usuario: {{ auth()->user()->name }}</h1>-->
        <h4 class="centro">Entradas</h4>
        <table class="table table-primary table-bordered tope">
            <thead>
              <tr>
                <th scope="col">Numero de Entrada</th>
                <th scope="col">Precio Entrada</th>
                <th scope="col">Del evento</th>
                <th scope="col">Eliminar</th>
                
              </tr>
            </thead>

        @foreach ($entradas as $item)
            <tr> 
              @if ($item->fk_evento)
                <td>{{$item->numero_entrada}}</td>
                <td>{{$item->precio_entrada}}</td>
                <td>{{$item->nombre_evento}}</td>
              @endif
                <td>
                  <form action={{ route('entradas.destroy', ['entrada' => $item->id_entrada]) }} method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark btn-sm" type="submit">Eliminar</button>
                  </form>
                </td>
                
            </tr>
        @endforeach
        </table>
        <a href="/entradas/create" class="btn btn-secondary btn-lg btn-block">Nueva Entrada</a>
  </div>
    </div>
@endsection