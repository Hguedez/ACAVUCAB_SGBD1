@extends('layouts.catalogolayout')
@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav mr-auto ">
            <li class="nav-item ">
              <a class="nav-link " href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item active">
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
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            <div class="dropdown">
                      <a class="" href="{{ route('logout') }}">
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropnegro dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Cerrar sesion') }}
                  </a>

                <a class="dropnegro dropdown-item" href="/eventos">Mis eventos</a>
                <a class="dropnegro dropdown-item" href="/ordenes">Mis ordenes</a>
                <a class="dropnegro dropdown-item" href="/horario">Horarios</a>
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
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">ACAVUCAB SHOP</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Lo mas nuevo</a>
          <a href="#" class="list-group-item">Ofertas</a>
          <a href="#" class="list-group-item">Populares</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="fondo_cerveza1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="fondo_cerveza4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="fondo_cerveza3.jpg" alt="Third slide">
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

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/detalle/1">Mikkeller Sake Bomb</a><!--href=/detalle/1-->
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Lager elaborada por Mikkeller en Dinamarca.</p>
              </div>
              <div class="card-footer">
               <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
                <!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Yakka Tipo Lager</a>
                </h4>
                <h5>95000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Lager elaborada por Cervezas Yakka en Murcia - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Destilo</a>
                </h4>
                <h5>35000 Bs.S</h5>
                <p class="card-text">Primera cerveza genuina ultra Premium tipo Ale hecha en Venezuela.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Serrana Valbono</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cerveza Extra Ale, de fermentación alta, semejantes a las cervezas belgas de abadía. Es una cerveza de autor inspirada por la naturaleza exuberante de Finca Valbono, de tres maltas y lúpulos muy aromáticos y profundos.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Erdinger Dunkel</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">La Erdinger Dunkel es una cerveza de trigo oscura con un aroma especiado. Su gran sabor se debe al lúpulo y a las maltas tostadas que se utilizan durante su elaboración. Sabor picante pero en general suave.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Paulaner Naturtrüb</a>
                </h4>
                <h5>40000 Bs.S</h5>
                <p class="card-text">La cerveza blanca de levadura número 1 en Alemania y una de las más apreciadas del mundo. De apariencia turbia, se presenta en el vaso con un brillante color dorado aterciopelado</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Canana Wheat</a>
                </h4>
                <h5>30000 Bs.S</h5>
                <p class="card-text">Canana Wheat. Cerveza del tipo Weizen-Weissbier elaborada por Canana L.A. Brewpub en Murcia - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="8.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Alvar Siraku</a>
                </h4>
                <h5>35000 Bs.S</h5>
                <p class="card-text">Alvar Siraku. Cerveza del tipo Weizen-Weissbier elaborada por Cervezas Alvar en Castilla La Mancha - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="9.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Dolina 1221</a>
                </h4>
                <h5>52000 Bs.S</h5>
                <p class="card-text">Dolina 1221. Cerveza del tipo Witbier elaborada por Cerveza Dolina en Castilla y León - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="10.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">961 Beer Witbier</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">961 Beer Witbier. Cerveza del tipo Witbier elaborada por 961 Beer en Líbano.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="11.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">BRLO Berliner Weisse</a>
                </h4>
                <h5>55000 Bs.S</h5>
                <p class="card-text">BRLO Berliner Weisse. Cerveza del tipo Berliner Weisse elaborada por BRLO en Alemania.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="12.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">El Cantero Berliner Weisse</a>
                </h4>
                <h5>40000 Bs.S</h5>
                <p class="card-text">El Cantero Berliner Weisse. Cerveza del tipo Berliner Weisse elaborada por El Cantero en Murcia - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="13.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cervezas Silvestres Mareira</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cervezas Silvestres Mareira. Cerveza del tipo Gose elaborada por Cervezas Silvestres en Galicia - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="14.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">La Calavera Discharge</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">La Calavera Discharge. Cerveza del tipo Gose elaborada por La Calavera en Catalunya - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="15.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">7 Colores Pale Ale</a>
                </h4>
                <h5>77000 Bs.S</h5>
                <p class="card-text">7 Colores Pale Ale. Cerveza del tipo American Pale Ale elaborada por 7 Colores en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="16.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">1270 Pale Ale</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">La máxima expresión de la tradición y la pasión por la cerveza. Toques herbales, el dulzor de nuestra malta especial y el punto justo de amargor. La mejor forma de entrar al mundo DoceSetenta.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="17.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Canana IPA</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Canana IPA. Cerveza del tipo India Pale Ale elaborada por Canana L.A. Brewpub en Murcia - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="18.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">CerveZahara La Cachonda</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">CerveZahara La Cachonda. Cerveza del tipo India Pale Ale elaborada por CerveZahara en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="19.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Abbey Monks’ Dark Ale</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Dark Ale elaborada por Abbey Brewing Company en Nuevo México - Estados Unidos de América.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="20.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Greene King Strong Suffolk Dark Ale</a>
                </h4>
                <h5>59000 Bs.S</h5>
                <p class="card-text">Greene King Strong Suffolk Dark Ale. Cerveza del tipo Dark Ale elaborada por Greene King en Gran Bretaña.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="21.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/detalle/1">Cascarrabias Stout</a><!--href=/detalle/1-->
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cascarrabias Stout. Cerveza del tipo Stout elaborada por Cascarrabias en México.</p>
              </div>
              <div class="card-footer">
               <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
                <!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="22.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cañadas de Malta 8:30 A. M.</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">Cañadas de Malta 8:30 A. M. Breakfast Stout. Cerveza del tipo Stout elaborada por Cañadas de Malta en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="23.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">1878 Porter</a>
                </h4>
                <h5>100000 Bs.S</h5>
                <p class="card-text">1878 Porter. Cerveza del tipo Porter elaborada por 1878 en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="24.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">5 Lobos Porter</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">5 Lobos Porter. Cerveza del tipo Porter elaborada por 5 Lobos en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="25.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Belga Keusters</a>
                </h4>
                <h5>40000 Bs.S</h5>
                <p class="card-text">Cerveza Belga elaborada en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="26.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">De la Senne Bruxellensis Reserva</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">De la Senne Bruxellensis Reserva. Cerveza elaborada por Brasserie de la Senne en Bélgica.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="27.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">001 Pilsner</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Pilsner elaborada por Hnos. Sanguino en Extremadura - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="28.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">3Monos Pilsner</a>
                </h4>
                <h5>45000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Pilsner elaborada por 3Monos Craft Beer en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="29.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Almirante American Amber Ale</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo American Amber Ale elaborada por Almirante en Perú.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="30.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Carma Roja American Amber Ale</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo American Amber Ale elaborada por Cervezas Carma en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="31.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Abante American IPA</a>
                </h4>
                <h5>55000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo American IPA elaborada por Abante en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="32.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Berner American IPA</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo American IPA elaborada por Berner en Chile.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="33.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Benitz Pale Ale</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Es una cerveza Pale Ale de producción 100% artesanal, cumple con la ley de pureza de Bavaria de 1516, posee un balance entre el sabor dulce de las maltas y el suave amargor de los lúpulos utilizados en su elaboración. I</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="34.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Alfama American Pale Ale</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo American Pale Ale elaborada por Cerveses Alfama en Comunitat Valenciana - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="35.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Carma Belga Belgian Dubbel</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Belgian Dubbel elaborada por Cervezas Carma en España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="36.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">La Quarantamaula Belgian Dubbel</a>
                </h4>
                <h5>45000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Belgian Dubbel elaborada por La Quarantamaula en Comunitat Valenciana - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="37.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Serrana de Ley</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Belgian Golden Strong Ale elaborada por Cervecería Serrana de Aracena en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="38.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Otro Mundo Beastie Ale</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Belgian Golden Strong Ale elaborada por Otro Mundo Brewing Company (CCU Argentina) en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="39.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Barricas Saison Belga</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza de temporada, afrutada con reminiscencias a especies. Está dentro de la categoría Belgian Specialty Ale.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="40.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Castreña 88 Super</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Belgian Specialty Ale elaborada por Castreña en Castilla y León - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="41.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/detalle/1">Aldarra Mantuana</a><!--href=/detalle/1-->
                </h4>
                <h5>77000 Bs.S</h5>
                <p class="card-text">Caracterizada por una mezcla de cereales, maltas y lúpulos americanos. De un interesante color dorado, posee un sabor ligero y cuerpo liviano, además de un aroma que recuerda las frutas tropicales.</p>
              </div>
              <div class="card-footer">
               <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
                <!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="42.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">3Cárites Blonde Ale</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Blonde Ale elaborada por 3Cárites en Colombia.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="43.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Patagonia Bohemian Pilsener</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Pilsner elaborada por Cerveza Patagonia en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="44.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Malapinta Rubia Descarada</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Bohemian Pilsener elaborada por Malapinta en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="45.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Mestiza Irish Dry Stout</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Dry Stout elaborada por Altamira en Chile.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="46.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Coral Querida Dry Stout</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Dry Stout elaborada por Cervecería Coral en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="47.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Hecatombe Noctua Irae</a>
                </h4>
                <h5>69999 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Düsseldorf Altbier elaborada por Hecatombe Brewing en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="48.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Salvaje Grilla</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Düsseldorf Altbier elaborada por Cerveza Salvaje en Castilla La Mancha - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="49.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bracino English Pale Ale</a>
                </h4>
                <h5>53000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo English Pale Ale elaborada por Bracino Cervecería en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="50.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Chela Brandon English Pale Ale</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo English Pale Ale elaborada por Chela Brandon en Uruguay.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="51.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Torrent El Bolló</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Extra-Strong Bitter elaborada por Torrent Malt & Brew Master en Catalunya - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="52.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Edge Brewing / Fuller’s Trad Jazz</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Extra-Strong Bitter elaborada por Edge Brewing en Catalunya - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="53.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Mikkeller Spontantripleraspberry</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Fruit Lambic elaborada por en Dinamarca.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="54.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Brewski Mother Gose</a>
                </h4>
                <h5>45000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Fruit Lambic elaborada por en Suecia.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="55.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Almogàver Imperial IPA</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Imperial IPA elaborada por Cerveses Almogàver en España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="56.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">El César Imperial IPA</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Imperial IPA elaborada por El César en Chile.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="57.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">7 Vidas Coconut Imperial Stout</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Imperial Stout elaborada por Cerveza 7 Vidas en Perú.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="58.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Antares Imperial Stout</a>
                </h4>
                <h5>50000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Imperial Stout elaborada por Cervecería Antares en Argentina.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="59.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">4 Deseos Irish Red Ale</a>
                </h4>
                <h5>76000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Irish Red Ale elaborada por 4 Deseos en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="60.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Arcana Irish Red Ale</a>
                </h4>
                <h5>60000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Irish Red Ale elaborada por Cervezas Arcana en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="61.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/detalle/1">Ebeltoft Gårdbryggeri Helles</a><!--href=/detalle/1-->
                </h4>
                <h5>100000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Munich Helles elaborada por en Dinamarca.</p>
              </div>
              <div class="card-footer">
               <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
                <!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="62.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bonvivant Ciao Amigo</a>
                </h4>
                <h5>85000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Munich Helles elaborada por Bonvivant en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="63.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Goose Island Beer Co. Oktoberfest</a>
                </h4>
                <h5>110000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Oktoberfest-Marzen elaborada por en Illinois - Estados Unidos de América.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="64.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Ayinger Oktober Fest-Märzen</a>
                </h4>
                <h5>85000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Oktoberfest-Marzen elaborada por Brauerei Aying en Alemania.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="65.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Ruben’s Schwarz 2</a>
                </h4>
                <h5>75999 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Schwarzbier (Black Beer) elaborada por Rubens Beer en Andalucía - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="66.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Baja Escorpión Negro</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Schwarzbier (Black Beer) elaborada por Baja Brewing Company en México.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="67.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Beauty Matcha Tea</a>
                </h4>
                <h5>85999 Bs.S</h5>
                <p class="card-text">Con Beauty with Matcha Tea, fusionamos la elegancia y equilibrio orientales, a través del Té Matcha, con la sofisticación y calidad de la cerveza artesanal occidental.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="68.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">CachoBeer</a>
                </h4>
                <h5>77000 Bs.S</h5>
                <p class="card-text">Extrayendo la esencia de la alcachofa de Tudela, hemos creado Cacho Beer, una cerveza artesana estilo Lager, impregnada de tradición y sabor.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="69.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">BÝRA Season 06 Choco Stout</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Una cerveza especialmente concebida para ser servida a temperatura ambiente (10-12 grados) con el objetivo de realzar todas sus características organolépticas. Una cerveza perfecta para los fríos días.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="70.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">La Pirata Pastelon</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">La Pirata Pastelon. Cerveza del tipo Sweet Stout elaborada por Cerveses La Pirata en España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="71.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Browar Amber Koźlak</a>
                </h4>
                <h5>100000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Bock elaborada por en Polonia</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="72.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cinema Brewers Ill Be Bock</a>
                </h4>
                <h5>150000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Bock elaborada por en Holanda.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="73.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Browar Stu Mostów Salamander White IPA</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">La cerveza blanca de levadura número 1 en Alemania y una de las más apreciadas del mundo. De apariencia turbia, se presenta en el vaso con un brillante color dorado aterciopeladoCerveza del tipo White IPA elaborada por en Polonia.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cromarty Brewing Co. Whiteout</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo White IPA elaborada por en Escocia - Reino Unido.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="75.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Roy The Bull Smoked</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Classic Rauchbier elaborada por Roy The Bull en España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="76.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Postiguet Ahumada</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Classic Rauchbier elaborada por Postiguet en Comunitat Valenciana - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="77.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">90 Varas Cayetana</a>
                </h4>
                <h5>65000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Lite American Lager elaborada por Cerveza 90 Varas en Castilla y León - España.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="78.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Panama Light</a>
                </h4>
                <h5>70000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Lite American Lager elaborada por Cervecerías Barú Panamá en Panama.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="79.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Saison Dupont</a>
                </h4>
                <h5>80000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Saison elaborada por Brasserie Dupont en Bélgica.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="80.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Hitachino Nest Saison du Japon</a>
                </h4>
                <h5>90000 Bs.S</h5>
                <p class="card-text">Cerveza del tipo Saison elaborada por Kiuchi Brewery en Japón.</p>
              </div>
              <div class="card-footer">
                  <a href="/comprar" class="btn btn-dark" role="button">Comprar</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection
