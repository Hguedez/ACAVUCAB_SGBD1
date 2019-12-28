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
     :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #E54A24;
  background: linear-gradient(to right, #C61818, #FA8282);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
  width: 100%;
}
.linea{
margin-left: -5%;
}

.card-signin .card-img-left {
  width: 55%;
  /* Link to your background image using in the property below! */
  background: scroll center url(registerimg.jpg);
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}
.hey{
  border-radius: 5rem;
}
.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
    </style>
  </head>
  <body>
        <div id="app">
            @yield('content')
        </div>
    
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('input:radio[id=admin]').attr('checked',true);
          $('#nombre1').hide();
          $('#nombre2').hide();
          $('#apellido_1').hide();
          $('#apellido_2').hide();
          $('#cedula_1').hide();
          $('#rif_1').hide();
          $('#numero_carnet').hide();
          $('#boton2').hide();
          $('#email_1').hide();
          $('#password_1').hide();
          $('#password_c2').hide();
      $("#admin").on( "click", function() {
          $('#name2').show(); //muestro mediante id
          $('#name').show();
          $('#apellido').show();
          $('#apellido2').show();
          $('#cedula').show();
          $('#rif').show();
          $('#boton').show();
          $('#email').show();
          $('#password').show();
          $('#password_C').show();
          $('#nombre1').hide();
          $('#nombre2').hide();
          $('#apellido_1').hide();
          $('#apellido_2').hide();
          $('#cedula_1').hide();
          $('#rif_1').hide();
          $('#numero_carnet').hide();
          $('#boton2').hide();
          $('#email_1').hide();
          $('#password_1').hide();
          $('#password_c2').hide();
       });
      $("#natural").on( "click", function() {
          $('#name2').hide(); //muestro mediante id
          $('#name').hide();
          $('#apellido').hide();
          $('#apellido2').hide();
          $('#cedula').hide();
          $('#rif').hide();
          $('#boton').hide();
          $('#email').hide();
          $('#password').hide();
          $('#password_C').hide();
          $('#nombre1').show();
          $('#nombre2').show();
          $('#apellido_1').show();
          $('#apellido_2').show();
          $('#cedula_1').show();
          $('#rif_1').show();
          $('#numero_carnet').show();
          $('#boton2').show();
          $('#email_1').show();
          $('#password_1').show();
          $('#password_c2').show();
       });
        $("#juridico").on( "click", function() {
          $('#name2').hide(); //oculto mediante id
          $('#name').hide();
          $('#apellido').hide();
          $('#apellido2').hide();
          $('#cedula').hide();
          $('#rif').hide();
        });
      });
    </script>
    
                          @yield('script')
    
</body>
</html>