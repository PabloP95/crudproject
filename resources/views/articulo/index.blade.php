@extends('adminlte::page')

@section('title', 'Crud con Laravel 8')

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content')
    <a href="articulos/create" class="btn btn-primary mb-3">Crear</a>
    <table id="articulos" class="table shadow-lg table-striped mt-4 table-bordered" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>{{$articulo->codigo}}</td>
                    <td>{{$articulo->descripcion}}</td>
                    <td>{{$articulo->cantidad}}</td>
                    <td>{{$articulo->precio}}</td>
                    <td>
                        <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                            <a href="articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js
"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js
"></script>

<script>
    $(document).ready(function() {
        $('#articulos').DataTable({
            'lengthMenu': [[5,10,50,-1], [5,10,50,'ALL']]
        });
    });
</script>
@stop