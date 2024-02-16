@extends('base')

@section('content')
    <h1 class="title">Usuarios</h1>
        <table class="table table-striped">
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
                        <td><button type="button" class="btn btn-success"><a href="/posts/{{$user['id']}}">Ver</a></button></td>
                        <td><button type="button" class="btn btn-warning"><a href="/albums/{{$user['id']}}">Ver</a></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <br>
    <button type="button" class="btn btn-primary"><a href="/logs">Peticiones</a></button>
    
@endsection   
