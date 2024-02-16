@extends('base')

@section('content')
    <h1 class="title">Publicaciones</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['body'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection