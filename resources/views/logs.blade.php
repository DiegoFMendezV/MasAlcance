<h1>Peticiones Realizadas</h1>
<table>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Metodo solicitado</th>
            <th>Datos Retornados</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $log)
            <tr>
                <td>{{ $log['Fecha'] }}</td>
                <td>{{ $log['Metodo'] }}</td>
                <td>{{ $log['Retorno'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>