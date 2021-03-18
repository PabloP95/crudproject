@extends('adminlte::page')

@section('title', 'Editar articulo')

@section('content_header')
    <h1>Editar articulo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1"/>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2"/>
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}" tabindex="3"/>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="{{$articulo->precio}}" class="form-control" tabindex="4"/>
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
