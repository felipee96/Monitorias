@extends('plantilla')
@section('title', 'Administrador')
<link href="{{asset('css/iconos.css')}}" rel='stylesheet'/>

@section('contenido')
<div class="row row-cols-1 row-cols-md-3 mt-5">
  
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/b.png" class="card-img-top" style="height: 10rem; width: 21rem;">
          <div class="col text-center">
            <a href="#" class="btn btn-success">Añadir</a>
            <a href="#" class="btn btn-success">Ver Monitores</a>
          </div>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/reporte.png" class="card-img-top" style="height: 10rem; width: 21rem;">
          <div class="col text-center">
            <a href="#" class="btn btn-success">Ver Reportes</a>
            <a href="#" class="btn btn-success">Crear Reportes</a>
          </div>
      </div>
    </div>
  </div>
  
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/calendar.png" class="card-img-top" style="height: 10rem; width: 21rem;">
          <div class="col text-center">
            <a href="#" class="btn btn-success">Añadir</a>
            <a href="#" class="btn btn-success">Ver Horarios</a>
          </div>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/sede.png" class="card-img-top" style="height: 10rem; width: 21rem;">
          <div class="col text-center">
            <a href="#" class="btn btn-success">Añadir</a>
            <a href="#" class="btn btn-success">Ver Sedes</a>
          </div>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/sala.png" class="card-img-top" style="height: 10rem; width: 21rem;">
          <div class="col text-center">
            <a href="#" class="btn btn-success">Añadir</a>
            <a href="#" class="btn btn-success">Ver Salas</a>
          </div>
      </div>
    </div>
  </div>
  
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <img src="imagenes/salir.png" class="card-img-top" style="height: 10rem; width: 21rem;">
      </div>
    </div>
  </div>

@endsection
