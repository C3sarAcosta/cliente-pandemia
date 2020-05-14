@extends('layout')
@section('titulo','REGISTRAR PAIS')
@section('contenido')

<div class="container-fluid">
    <form action="{{url('pais')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="Nombre del pais">Nombre del pais</label>
            <input type="text" name="nombre_pais" class="form-control" placeholder="Nombre del pais" required>
        </div>
        <div class="form-group">
            <label for="Numero de habitantes en el pais">Número de habitantes en el pais</label>
            <input type="number" name="habitantes_pais" class="form-control" placeholder="Habitantes del pais" required >
        </div>
        <input class="btn btn-secondary" type="submit" value="Crear">
    </form>
</div>
@endsection