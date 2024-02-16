@extends('base')

@section('content')
<h1 class="title">Peticiones Realizadas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Metodo solicitado</th>
            <th>Datos Retornados</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $log)
            <tr>
                <td>{{ $log['Fecha'] }}</td>
                <td>{{ $log['Metodo'] }}</td>
                <td>{{ $log['Retorno'] }}</td>
                <td><button type="button" class="btn btn-success"><a href="/logs/{{$log['id']}}">Editar</a></button></td>
                <form action="{{ route('logs_destroy', ['id' => $log->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>
<button type="button" class="btn btn-primary"><a href="/">Atrás</a></button>
@endsection