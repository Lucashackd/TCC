<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
</head>
<body>
    <h1>Usuários -> single</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Criação</th>
                <th>Atualização</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$flags->title}}</td>
                <td>{{$flags->description}}</td>
                <td>{{$flags->created_at}}</td>
                <td>{{$flags->updated_at}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="/flags">&#9664; Voltar</a>
</body>
</html>