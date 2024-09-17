<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
</head>
<body>
    <h1>Usuários -> collection</h1>
    <a href="{{route('user.create')}}">Criar</a>

    @if($users->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <a href='profile/{{$user->id}}'>
                            {{$user->id}}
                        </a>
                    </td>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}">Editar</a>
                        <a href="{{route('user.delete', $user->id)}}">Remover</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum usuário encontrado</p>
    @endif
</body>
</html>
