<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
    <style>
        h1 {
            color: red;
        }
        div {
            display: flex;
            align-items: center;
            gap: 8px;
            color: gray;
        }
        h4 {
            color: black;
        }
    </style>
</head>
<body>
@if($user)
<h1>Confirm User Delete?</h1>
<div>
    <h2>Nome:</h2>
    <h4>{{$user->name}}</h4>
</div>
<div>
    <h2>Email:</h2>
    <h4>{{$user->email}}</h4>
</div>
<div>
    <h2>Data de criação:</h2>
    <h4>{{$user->created_at}}</h4>
</div>
<div>
    <h2>Data de atualização:</h2>
    <h4>{{$user->updated_at}}</h4>
</div>

<h2></h2>
<h2></h2>
<h2></h2>

<form action="{{route('user.delete_confirmation',$user->id)}}" method="POST">
    @csrf
    <input type="submit" value="Deletar" name="confirm">
    <input type="submit" value="Cancelar" name="confirm">
@endif
</body>
</html>
