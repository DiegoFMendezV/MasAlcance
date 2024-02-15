<h1>Álbumes</h1>
<table>
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