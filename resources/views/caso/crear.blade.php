@extends('layout')
@section('titulo','Registrar caso')
@section('contenido')
<div class="container-fluid">
    <form action="{{url('caso')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" placeholder="Fecha" required>
        </div>
        <div class="form-group">
            <label for="Activos">Activos</label>
            <input type="number" name="activos" class="form-control" placeholder="Activos" required >
        </div>
        <div class="form-group">
            <label for="Recuperados">Recuperados</label>
            <input type="number" name="recuperados" class="form-control" placeholder="Recuperados" required >
        </div>
        <div class="form-group">
            <label for="Muertos">Muertes</label>
            <input type="number" name="muertos" class="form-control" placeholder="Muertos" required >
        </div>
        <div class="form-group">
            <label for="Ciudad">Ciudad</label>
            <select class="custom-select" name="id_ciudad">
                @foreach ($ciudades as $ciudad)
                    <option value="{{$ciudad->id}}">{{$ciudad->nombre_ciudad}}</option>
                @endforeach
            </select>
        </div>
        <input class="btn btn-secondary" type="submit" value="Crear">
    </form>
</div>
@endsection






