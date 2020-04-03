@extends('plantilla')
@section('title', 'Principal')
@section('contenido')
<div class="contenedorPrueba">
    <div class="setion">
      <img class="sala" src="imagenes/administrador.png">
      <h2>ADMINISTRADOR</h2>
      <p>Seccion de ingreso para administrador Juan Pablo Yaime</p>
      <a href="/login"><button class="buttonReservar">Ingresar </button></a>
    </div>
    <div class="setion">
      <img class="sala" src="imagenes/monitor.png">
      <h2>USUARIO</h2>
      <p>Seccion de ingreso para monitores felipee</p>
      <a href="/login"><button class="buttonReservar">Ingresar </button></a>
    </div>
  </div>


@endsection
