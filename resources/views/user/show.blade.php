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
                <th>Nome</th>
                <th>Email</th>
                <th>Verificação de Email</th>
                <th>Password</th>
                <th>Token</th>
                <th>Criação</th>
                <th>Atualização</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->email_verified_at}}</td>
                <td>{{$users->password}}</td>
                <td>{{$users->remember_token}}</td>
                <td>{{$users->created_at}}</td>
                <td>{{$users->updated_at}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="/">&#9664; Voltar</a>
</body>
</html>
