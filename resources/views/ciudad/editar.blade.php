@extends('layout')
@section('titulo','Editar ciudad')
@section('contenido')

@foreach($ciudad as $ci)
<div class="container-fluid">
    <form action="{{url('ciudad',$ci->id)}}" method="post">
        @csrf()
        @method('PUT')
        <div class="form-group">
            <label for="Nombre de la ciudad">Nombre de la ciudad</label>
            <input type="text" name="nombre_ciudad" class="form-control" placeholder="Nombre de la ciudad" required value="{{$ci->nombre_ciudad}}">
        </div>
        <div class="form-group">
            <label for="Numero de habitantes en la ciudad">Número de habitantes en la ciudad</label>
            <input type="number" name="habitantes_ciudad" class="form-control" placeholder="Habitantes de la ciudad" required value="{{$ci->habitantes_ciudad}}">
        </div>
        <div class="form-group">
            <label for="Pais">Pais</label>
            <select class="custom-select" name="id_pais" required>
                @foreach ($paises as $pais)
                    <option value="{{$pais->id}}">{{$pais->nombre_pais}}</option>
                @endforeach
            </select>
        </div>
        <input class="btn btn-secondary" type="submit" value="Editar">
    </form>
</div>
@endforeach
@endsection