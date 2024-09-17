<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
</head>

<body>
<h1>Edit User</h1>
<form action="{{route('user.update',$user->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="name" value="{{$user->name}}"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{$user->email}}"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="{{$user->password}}"/></td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/users"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
