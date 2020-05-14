@extends('layout')
@section('titulo','LISTA DE LOS CASOS')
@section('contenido')

<a class="btn btn-secondary" href="{{url('caso/create')}}">Registrar caso</a>
<table class="table table-striped table-hover table-dark">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre del pais</td>
            <td>Nombre de la ciudad</td>
            <td>Fecha</td>
            <td>Activos</td>
            <td>Recuperados</td>
            <td>Muertos</td>
            <td colspan="2">Opciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($casos as $caso)
            <tr>
                <td>{{ $caso->id}}</td>
                <td>{{ $caso->nombre_pais}}</td>
                <td>{{ $caso->nombre_ciudad}}</td>
                <td>{{ $caso->fecha}}</td>
                <td>{{ $caso->activos}}</td>
                <td>{{ $caso->recuperados}}</td>
                <td>{{ $caso->muertos}}</td>
                <td><a class="btn btn-warning" href="{{url('caso/'.$caso->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('caso/'.$caso->id)}}" method="post">
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