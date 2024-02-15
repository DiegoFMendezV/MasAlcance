<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td>{{ $user['id'] }}</td>
                <td><a href="/posts/{{$user['id']}}">Ver Publicaciones</a></td>
            </tr>
        @endforeach
    </tbody>
</table>