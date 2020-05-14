@extends('layout')
@section('titulo','LISTADO DE LOS PAISES')
@section('contenido')




<div class="col-xs-12">
    <div class="center-block">
        <a class="btn btn-secondary" href="{{url('pais/create')}}">Registrar pais</a>
    </div>
</div>

<table class="table table-striped table-hover table-dark">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre del pais</th>
            <th>Total de habitantes</th>
            <th colspan="2">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paises as $pais)
            <tr>
                <td>{{$pais->id}}</td>
                <td>{{$pais->nombre_pais}}</td>
                <td>{{$pais->habitantes_pais}}</td>
                <td><a class="btn btn-warning" href="{{url('pais/'.$pais->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('pais/'.$pais->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            <!--<tr>
                <form action="{{url('pais/'.$pais->id)}}" method="put">
                    @csrf()
                    @method('PUT')
                    <td></td>
                    <td>
                        <input type="text" name="nombre_pais" class="form-control" placeholder="Nombre del pais" required value="{{$pais->nombre_pais}}">
                    </td>
                    <td>
                        <input type="number" name="habitantes_pais" class="form-control" placeholder="Habitantes del pais" required value="{{$pais->habitantes_pais}}">
                    </td>
                    <td>
                        <input class="btn btn-success" type="submit" value="Editar">
                    </td>
                </form>
            </tr>-->
        @endforeach
    </tbody>
</table>

@endsection