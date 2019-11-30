@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/eventos" class="btn btn-primary btn-sm">Volver al menu de los eventos anteriores</a>
    <h2>Agregar Evento</h2>
    <form action="/eventos" method="POST">
        @csrf
       <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
       <input type="date" name="fecha" placeholder="Fecha" class="form-control mb-2" required >
       <input type="text" name="lugar" placeholder="Lugar" class="form-control mb-2" required>
       <button clas="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
</div>
@endsection