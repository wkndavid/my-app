<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Usuários</h1>
    {{ count($users) }} <br>

    @foreach($users as $user)
        @if($user->id === 4)
            @continue
        @endif

        {{$user->id}} - {{$user->name}} ({{$user->email}})<br>   

        @if($user->id === 5)
            @break
        @endif
    @endforeach
    <br><br>
</body>
</html>