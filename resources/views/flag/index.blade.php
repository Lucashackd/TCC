<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flags</title>
</head>
<body>
    <h1>Flags -> collection</h1>

    @if($flags->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flags as $flag)
                <tr>
                    <td>
                        <a href='flag/{{$flag->id}}'>
                            {{$flag->id}}
                        </a>
                    </td>
                    <td>{{$flag->title}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhuma flag encontrado</p>
    @endif
</body>
</html>
