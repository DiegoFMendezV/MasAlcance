@extends('base')

@section('content')
<h1 style="color:#1071d6; margin: 10px 0; text-align:center">Álbumes</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Titulo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $album)
            <tr>
                <td>{{ $album['title'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white" href="/">Atrás</a></button>
@endsection