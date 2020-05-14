@extends('layout')
@section('titulo','REGISTRAR CIUDAD')
@section('contenido')

<div class="container-fluid">
    <form action="{{url('ciudad')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="Nombre del pais">Nombre de la ciudad</label>
            <input type="text" name="nombre_ciudad" class="form-control" placeholder="Nombre de la ciudad" required>
        </div>
        <div class="form-group">
            <label for="Numero de habitantes en la ciudad">Número de habitantes en la ciudad</label>
            <input type="number" name="habitantes_ciudad" class="form-control" placeholder="Habitantes de la ciudad" required >
        </div>
        <div class="form-group">
            <label for="Pais">Pais</label>
            <select class="custom-select" name="id_pais">
                @foreach ($paises as $pais)
                    <option value="{{$pais->id}}">{{$pais->nombre_pais}}</option>
                @endforeach
            </select>
        </div>
        <input class="btn btn-secondary" type="submit" value="Editar">
    </form>
</div>
@endsection