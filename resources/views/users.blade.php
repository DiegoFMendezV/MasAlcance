<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Publicaciones</th>
            <th>Álbumes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td><a href="/posts/{{$user['id']}}">Ver</a></td>
                <td><a href="/albums/{{$user['id']}}">Ver</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="/logs">Peticiones</a>