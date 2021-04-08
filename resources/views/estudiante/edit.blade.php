@extends('layouts.plantillabase')

@section('contenido')
<h1>Editar registros</h1>
<form action="/estudiantes/{{ $estudiante->id }}" method="post">
@csrf()
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input type="text" id="DNI" name="DNI" class="form-control" value="{{$estudiante->DNI}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">nombres</label>
        <input type="text" id="nombres" name="nombres" class="form-control" value="{{$estudiante->nombres}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">apellidos</label>
        <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{$estudiante->apellidos}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha de nacimiento</label>
        <input type="date" id="fechadenacimiento" name="fechadenacimiento" class="form-control" value="{{$estudiante->fechadenacimiento}}" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">localidad</label>
        <input type="text" id="localidad" name="localidad" class="form-control" value="{{$estudiante->localidad}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">telefono</label>
        <input type="text" id="telefono" name="telefono" class="form-control" value="{{$estudiante->telefono}}" tabindex="2">
    </div>
    <a href="/estudiantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection