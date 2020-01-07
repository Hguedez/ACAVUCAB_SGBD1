@extends('layouts.clienteNaturalayout')

@section('content')
    
 <!-- Navigation -->
 @inject('lugares','App\Services\Lugares')
 
 <div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
          <!-- Background image for card set in CSS! -->
       </div>
              <div class="card-body col-sm-6">
                  <h5 class="card-title text-center">Registrarse</h5>
                  
                  <div id="muestra_empleado">
                    <form method="POST" action="/empleado">
                      @csrf
                      <ul class="nav nav-tabs linea">
                        <li class="nav-item">
                          <a class="nav-link " href="/register">Admin y clientes</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link active" href="/empleado/create">Empleados</a>
                        </li>
                      </ul>
                      <br>
                     <div class="form-group row ">
                      <label for="name" class="col-md-5 col-form-label text-md-right tamano" >Nombre</label>
        
                      <div class="col-md-7">
                           
                          <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror tamano" name="nombre"  required autocomplete="name" autofocus>
        
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
        
                  <div class="form-group row" >
                      <label for="name2" class="col-md-5 col-form-label text-md-right tamano" >Apellido</label>
        
                      <div class="col-md-7">
                            
                          <input id="name2" type="text" placeholder="Apellido" class="form-control tamano" name="apellido" required autocomplete="name2">
        
                      </div>
                  </div>
                  
        
                  <div class="form-group row" >
                      <label for="apellido" class="col-md-5 col-form-label text-md-right tamano" >Cedula</label>
        
                      <div class="col-md-7">
                          <input id="apellido" type="number" placeholder="Cedula" class="form-control tamano" name="cedula" required autocomplete="apellido">
        
                      </div>
                  </div>
                    <div class="form-group row">
                        <label for="country" class="col-md-5 col-form-label text-md-right tamano">Cargo</label>
                        <div class="select-wrap col-md-7">
                            <select name="fk_cargo" id="" class="form-control tamano">
                                    @foreach ($cargo as $item)
                                        <option value="{{$item->id_cargo}}">{{$item->nombre_cargo}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-md-5 col-form-label text-md-right tamano">Tienda en la que trabaja</label>
                        <div class="select-wrap col-md-7">
                            <select name="fk_tienda_fisica" id="" class="form-control tamano">
                                    @foreach ($tienda as $item)
                                        <option value="{{$item->id_tienda_fisica}}">{{$item->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-md-5 col-form-label text-md-right tamano">Tienda en la que trabaja</label>
                        <div class="select-wrap col-md-7">
                            <select name="fk_rol" id="" class="form-control tamano">
                                        <option value="2">Empleado</option>
                                        <option value="4">Supervisor</option>
                            </select>
                        </div>
                    </div>
                
                <!--Aqui va el correo-->
                
                <div class="form-group row" >
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
              <div id="direccion_1">
              <div class="form-group row">
                  <label for="lugar" class="col-md-8 col-form-label text-md-right">DIRECCION</label>
                </div>
        
                <div class="form-group row">
                  <label for="lugar" class="col-md-5 col-form-label text-md-right">Estado</label>
        
                  <div class="col-md-6">
                      <select id="estado" name="id_lugar" class="form-control{{ $errors->has('id_lugar') ? ' is-invalid' : '' }}">
                          @foreach($lugares->get() as $index => $lugar)
                              <option value="{{ $index }}" {{ old('id_lugar') == $index ? 'selected' : '' }}>
                                  {{ $lugar }}
                              </option>
                          @endforeach
                      </select>
        
                      @if ($errors->has('id_lugar'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('id_lugar') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
        
                <div class="form-group row">
                  <label for="lugar" class="col-md-5 col-form-label text-md-right">Municipio</label>
        
                  <div class="col-md-6">
                      <select id="municipio" data-old="{{ old('id_lugar') }}" name="id_lugar" class="form-control{{ $errors->has('id_lugar') ? ' is-invalid' : '' }}"></select>
        
                      @if ($errors->has('id_lugar'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('id_lugar') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
        
                <div class="form-group row">
                  <label for="lugar" class="col-md-5 col-form-label text-md-right">Parroquia</label>
        
                  <div class="col-md-6">
                      <select id="parroquia" data-old="{{ old('id_lugar') }}" name="id_lugar" class="form-control{{ $errors->has('id_lugar') ? ' is-invalid' : '' }}"></select>
        
                      @if ($errors->has('id_lugar'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('id_lugar') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
            </div>
                <!--Aqui termina el correo-->
                <button  type="submit" class="btn btn-lg btn-dark btn-block text-uppercase btn-tamano">
                  {{ __('Registrarse') }}
              </button>
                  </form>
                    </div>
                          </div>
                      </div>
              </div>
            </div>
          </div>
        </div>
          
@endsection

@section('script')
    <script>
            $('#estado').on('change',function(){
                var id_estado = $(this).val();
                //console.log(id_estado);
                if ($.trim(id_estado) != ''){
                    $.get('municipios',{id_lugar:id_estado},function(municipios){
                        console.log(municipios);
                        $("#municipio").find('option').remove();
                        $('#municipio').append("<option value=''>Selecciona un municipio</option>");
                        $.each(municipios,function(index,valor){
                            $('#municipio').append("<option value='" + index + "'>" + valor + "</option>")
                        });
                    });
                }
            });
    </script>

    <script>
            $('#municipio').on('change',function(){
                var id_municipio = $(this).val();
                if ($.trim(id_municipio) != ''){
                    $.get('parroquias',{id_lugar:id_municipio},function(parroquias){
                        $("#parroquia").find('option').remove();
                        $('#parroquia').append("<option value=''>Selecciona una parroquia</option>");
                        $.each(parroquias,function(index,valor){
                            $('#parroquia').append("<option value'" + index + "'>" + valor + "</option>")
                        });
                    });
                }
            });
    </script>
@endsection