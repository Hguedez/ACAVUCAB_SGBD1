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
        .letra{
          font-family: helvetica;
        }
        .colores{
            background: #141519;
            color: white;
        }
    </style>
  </head>
  <body >
      <div class="app">
          @yield('content')
      </div>
  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
