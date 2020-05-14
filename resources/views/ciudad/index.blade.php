@extends('layout')
@section('titulo','LISTA DE LAS CIUDADES')
@section('contenido')

<a class="btn btn-secondary" href="{{url('ciudad/create')}}">Registrar ciudad</a>
<table class="table table-striped table-hover table-dark">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre de la ciudad</td>
            <td>Habitantes de la ciudad</td>
            <td>Pais</td>
            <td colspan="2">Opciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($ciudades as $ciudad)
            <tr>
                <td>{{ $ciudad->id}}</td>
                <td>{{ $ciudad->nombre_ciudad}}</td>
                <td>{{ $ciudad->habitantes_ciudad}}</td>
                <td>{{ $ciudad->nombre_pais}}</td>
                <td><a class="btn btn-warning" href="{{url('ciudad/'.$ciudad->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('ciudad/'.$ciudad->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection