<h1>Publicaciones {{  }}</h1>
<table>
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