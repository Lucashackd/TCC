<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vídeos</title>
</head>
<body>
    <h1>Vídeos -> collection</h1>

    @if($videos->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Criação</th>
                    <th>Atualização</th>
                    <th>Caminho</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr>
                    <td>
                        <a href='watch/{{$video->id}}'>
                            {{$video->id}}
                        </a>
                    </td>
                    <td>{{$video->created_at}}</td>
                    <td>{{$video->updated_at}}</td>
                    <td>{{$video->path}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum vídeo encontrado</p>
    @endif
</body>
</html>
