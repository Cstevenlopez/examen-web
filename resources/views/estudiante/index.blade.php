@extends('layouts.plantillabase')

@section('contenido')
<a href="estudiantes/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>nombres</th>
        <th>apellidos</th>
        <th>fecha de nacimiento</th>
        <th>localidad</th>
        <th>telefono</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
@foreach ($estudiantes as $estudiante)
    <tr>
    <td>{{ $estudiante->id }}</td>
    <td>{{ $estudiante->DNI }}</td>
    <td>{{ $estudiante->nombres }}</td>
    <td>{{ $estudiante->apellidos }}</td>
    <td>{{ $estudiante->fechadenacimiento }}</td>
    <td>{{ $estudiante->localidad }}</td>
    <td>{{ $estudiante->telefono }}</td>

    <td>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/estudiantes/{{ $estudiante->DNI }}/create" class="btn btn-info">+</a>
</div>
    </td>
    <td>
    <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="post">
    @csrf
    @method('DELETE')
    <a href="/estudiantes/{{ $estudiante->id }}/edit" class="btn btn-info">Editar</a>|
    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection