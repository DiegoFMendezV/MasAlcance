<h1>Peticiones Realizadas</h1>
<table>
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
                <td><a href="/logs/{{$log['id']}}">Editar</a></td>
                <form action="{{ route('logs_destroy', ['id' => $log->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <td><button type="submit">Eliminar</button></td>
                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>