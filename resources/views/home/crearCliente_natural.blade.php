@extends('layouts.clienteNaturalayout')

@section('content')
    
 <!-- Navigation -->

 <div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
          <!-- Background image for card set in CSS! -->
       </div>
              <div class="card-body col-sm-6">
                  <h5 class="card-title text-center">Registrarse</h5>
                  
                  <form method="POST" action="/clienteNatural">
                      @csrf
                      <ul class="nav nav-tabs linea">
                        <li class="nav-item tamano">
                          <a class="nav-link" href="/register">Admin</a>
                        </li>
                        <li class="nav-item tamano">
                          <a class="nav-link active" href="/clienteNatural/create">Cliente Natural</a>
                        </li>
                        <li class="nav-item tamano">
                          <a class="nav-link" href="#">Cliente juridico</a>
                        </li>
                      </ul>
                      <br>
                            <!--<input type="radio" id="natural" value="natural" name="tipo" class="tamano">
                            <label for="natural" class="tamano">Cliente Natural</label>-->
                          
                          
                      <div class="form-group row " >
                          <label for="name" class="col-md-5 col-form-label text-md-right tamano" >Primer Nombre</label>

                          <div class="col-md-7">
                               
                              <input id="name" type="text" placeholder="Primer Nombre" class="form-control @error('name') is-invalid @enderror tamano" name="primer_nombre"  required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name2" class="col-md-5 col-form-label text-md-right tamano" >Segundo Nombre</label>

                          <div class="col-md-7">
                                
                              <input id="name2" type="text" placeholder="Segundo Nombre" class="form-control tamano" name="segundo_nombre" required autocomplete="name2">

                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="apellido" class="col-md-5 col-form-label text-md-right tamano" >Primer Apellido</label>

                          <div class="col-md-7">
                              <input id="apellido" type="text" placeholder="Primer Apellido" class="form-control tamano" name="primer_apellido" required autocomplete="apellido">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="apellido2" class="col-md-5 col-form-label text-md-right tamano" >Segundo Apellido</label>

                          <div class="col-md-7">
                              <input id="apellido2" type="text" placeholder="Segundo Apellido" class="form-control tamano" name="segundo_apellido" required autocomplete="apellido2">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="cedula" class="col-md-5 col-form-label text-md-right tamano" >Cedula</label>

                          <div class="col-md-7">
                              <input id="cedula" type="number" placeholder="Cedula" class="form-control tamano" name="cedula" required autocomplete="cedula">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="rif" class="col-md-5 col-form-label text-md-right tamano" >Rif</label>

                          <div class="col-md-7">
                              <input id="rif" type="text" placeholder="Rif" class="form-control tamano" name="rif" required autocomplete="rif">

                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="carnet" class="col-md-5 col-form-label text-md-right tamano" >Numero Carnet</label>

                        <div class="col-md-7">
                            <input id="carnet" type="number" placeholder="Numero de Carnet" class="form-control tamano" name="numero_carnet" required autocomplete="cedula">

                        </div>
                    </div>


                      <div class="form-group row">
                          <label for="email" class="col-md-5 col-form-label text-md-right tamano">Email</label>

                          <div class="col-md-7">
                              <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror tamano" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      

                      <div class="form-group row">
                          <label for="password" class="col-md-5 col-form-label text-md-right tamano">{{ __('Password') }}</label>

                          <div class="col-md-7">
                              <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror tamano" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-5 col-form-label text-md-right tamano">{{ __('Confirm Password') }}</label>

                          <div class="col-md-7">
                              <input id="password-confirm" type="password" placeholder="Confirm-Password" class="form-control tamano" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>
                      
                              <button type="submit" class="btn btn-lg btn-dark btn-block text-uppercase btn-tamano">
                                  {{ __('Registrarse') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
          
@endsection
