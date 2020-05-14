@extends('layout')
@section('titulo','EDITAR CASO')
@section('contenido')

@foreach($caso as $co)
<div class="container-fluid">
    <form action="{{url('caso',$co->id)}}" method="post">
        @csrf()
        @method('PUT')
        <div class="form-group">
            <label for="Ciudad">Ciudad</label>
            <select class="custom-select" name="id_ciudad" required>
                @foreach ($ciudades as $ciudad)
                    <option value="{{$ciudad->id}}">{{$ciudad->nombre_pais}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control"  required value="echo date('d/m/Y', strtotime({{$co->fecha}}))">
        </div>
        <div class="form-group">
            <label for="Activos">Activos</label>
            <input type="number" name="activos" class="form-control" placeholder="Activos" required value="{{$co->activos}}">
        </div>
        <div class="form-group">
            <label for="Recuperados">Recuperados</label>
            <input type="number" name="recuperados" class="form-control" placeholder="Recuperados" value="{{$co->recuperados}}" >
        </div>
        <div class="form-group">
            <label for="Muertos">Muertos</label>
            <input type="number" name="muertos" class="form-control" placeholder="Muertos" required value="{{$co->muertos}}">
        </div>
        <input class="btn btn-secondary" type="submit" value="Editar">
    </form>
</div>
@endforeach
@endsection



