<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ACAVUCAB</title>
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

  </head>
  <body>

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
          <h3 class="display-4">Cerveza Artesanal</h3>
          <!--<p class="lead">This is a description for the first slide.</p> -->
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(fondo_cerveza1.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <div class="container fondo col-sm-4">
          <h1>ACAVUCAB</h1>
          </div>
          <h3 class="display-4">Promociones Atractivas</h3>
          <p class="lead">Contamos con distintas ofertas cada 2 semanas.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(fondo_cerveza3.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <div class="container fondo col-sm-4">
          <h1>ACAVUCAB</h1>
          </div>
          <h3 class="display-4">Tus Cervezas Favoritas</h3>
          <p class="lead">Una Gran Variedad Para Que Te Deleites Con Tus Preferidas.</p>
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
     <!-- Navigation -->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">

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

                <a class="dropnegro dropdown-item" href="/eventos">Mis eventos</a>
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

                <a class="dropnegro dropdown-item" href="/eventos">Mis eventos</a>
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
<section class="py-5">
  <div class="container">
    <section class="container">
        <p class="mt-5 text-center text-uppercase font-weight-bold font-italic"> La Cerveza Artesanal. </p> <!--m es el marge y t el top 5 es la cantidad-->
        <p class="text-danger"> La cerveza artesanal nace por el gusto y necesidad de probar nuevos y distintos sabores de esta
            bebida, que con el paso de los años va posicionándose y convirtiéndose en una de las bebidas más
            populares dentro de la sociedad, pues su consumo es más por placer que por adicción.
        </p>
        <p class="bg-primary text-white p-3 w-25 float-left mr-4"> En el mundo existe una gran variedad de microempresarios que elaboran cerveza artesanal, con la
            cual presentan una variedad de sabores y colores que abren paso a nuevas experiencias dejando a un
            lado las clásicas y típicas cervezas. Es una cerveza llena de autenticidad y pasión. Se elabora únicamente con ingredientes tradicionales
            en su estado más puro y natural como los son: maltas de cebada, agua, lúpulo y levadura.
        </p>
         <p> El caso de Estados Unidos, el país en el que más rápidamente está creciendo este fenómeno, y en el
            que hoy dominan el 4 % del mercado. Su origen está en elaborar una cerveza adaptada al paladar que
            el fabricante quiere, en definitiva, personalizarla. Un ejemplo de lo que es el auge de las
            microcervecerías es Australia, un país en el que han crecido rápidamente por la gran aceptación que
            han tenido estas cervezas más personalizadas. En Japón, también se produce la cerveza artesanal y se
            ha puesto de moda.
        </p>
         <p> La primera cerveza fabricada en suelo criollo se hizo en la Colonia Tovar, cuyos habitantes provenían
            de la Selva Negra Alemana. En 1843 llegaron los primeros colonos, que traían consigo las semillas de
            cebada y pocos meses después ya tenían los primeros frutos. Sin embargo, Agustín Codazzi (1793 –
            1859) uno de los responsables intelectuales del proyecto, ya había contemplado la producción de la
            bebida, como parte del proyecto en la tierras cedidas por Martín Tovar.
        </p>
         <p> En Venezuela, poco a poco, empezaron a surgir creadores artesanales. Hace más de una década la
            Cervecería Tovar, apenas arrancaba con Kilian De Fries como maestro cervecero. Luego irrumpió
            Destilo y al poco tiempo se fueron filtrando nombres de etiquetas que sonaban casi clandestinas, en
            botellas de un litro, con diseños atrevidos y divertidos, que ofrecen en copa una gama sensorial
            inesperada.
        </p>
         <p> Entonces, en octubre de 2012, hacen oficial su alianza con 54 miembros fundadores, que agrupan
            hasta el momento alrededor de 30 etiquetas, en la Asociación de Cerveceros Artesanales Venezolanos
            de la UCAB. Es una asociación sin fines de lucro creada para la difusión de la cultura cervecera
            artesanal y casera.
        </p>
        <p> El objetivo es innovar e interpretar estilos históricos dándoles un toque particular, y desarrollar nuevos
            estilos. Los cerveceros artesanales y caseros tienen contacto con la comunidad a través la
            participación y creación de eventos. Los cerveceros artesanales y caseros tienen un trato distintivo y
            mucha proximidad con los consumidores, con el fin de conectarse con ellos y satisfacer sus
            demandas. Los cerveceros artesanales y caseros se caracterizan por mantener una postura íntegra en
            lo que a producción e independencia se refiere, libres de los intereses e influencias de los cerveceros
            industriales.
        </p>
      </section>
  </div>
</section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
