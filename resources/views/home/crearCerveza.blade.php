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

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
body{
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color : #fff;
}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left , #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.centrado{
  /*margin-left: 30px;*/
  margin-left :auto;
  margin-right :auto;
}
.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}


.sizee{
  font-size: 18px;
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
                        <a class="nav-link " href="/home/{{$correo}}/funciona">Home
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
                    <a class="dropnegro dropdown-item" href="/eventos/1/miembros/1/asociados">Miembros</a>
                    <a class="dropnegro dropdown-item" href="/tipoCerveza/{{$correo}}/funciona">Tipo de cerveza</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </div>
              </li>
              @else
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
                  @endif
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2 tamano" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-dark my-2 my-sm-0 tamano" type="submit">Search</button>
                    </form>
                  </div>
                </div>

              </nav>

<div id="contact">
  <div class="section-content">
    <h1 class="section-header">ACAVUCAB <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Agregar Cerveza</span></h1>
    <h3>Lo mejor en cervezas artesanales</h3>
  </div>
  <div class="contact-section">
  <div class="container">
    
      <div class="col-md-6 centrado">
        <form action="/cervezas/{{$id_tipo_cerveza}}/tipos/{{$correo}}/funciona" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre de la cerveza</label>
            <input type="text" class="form-control mb-2 sizee" id="nombre" placeholder="Nombre de la cerveza" name="nombre"  required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control mb-2 sizee" id="precio" placeholder="Descripcion" name="descripcion" required>
          </div>	
          <div class="form-group">
            <label for="costo">Costo</label>
            <input type="number" class="form-control mb-2 sizee" id="costo" placeholder="Costo" name="costo" required>
          </div>
          <div class="form-group">
            <label for="costo">Precio</label>
            <input type="number" class="form-control mb-2 sizee" id="costo" placeholder="Precio" name="precio_venta" required>
          </div>
            <a href="/tipoCerveza/{{$correo}}/funciona" class="btn btn-primary btn-sm sizee">Volver al menu anterior</a>
            <button type="submit" class="btn btn-default submit sizee"><i class="fa fa-paper-plane" aria-hidden="true"></i>Agregar</button>
        </div>
        <br>
        
        </form>
      
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
