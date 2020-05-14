@extends('layout')
@section('titulo','EDITAR PAIS')
@section('contenido')

@foreach($pais as $pai)
<div class="container-fluid">
    <form action="{{url('pais',$pai->id)}}" method="post">
        @csrf()
        @method('PUT')
        <div class="form-group">
            <label for="Nombre del pais">Nombre del pais</label>
            <input type="text" name="nombre_pais" class="form-control" placeholder="Nombre del pais" required value="{{$pai->nombre_pais}}">
        </div>
        <div class="form-group">
            <label for="Numero de habitantes en el pais">Número de habitantes en el pais</label>
            <input type="number" name="habitantes_pais" class="form-control" placeholder="Habitantes del pais" required value="{{$pai->habitantes_pais}}">
        </div>
        <input class="btn btn-secondary" type="submit" value="Editar">
    </form>
</div>
@endforeach
@endsection

