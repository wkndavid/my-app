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

    @for($i = 0; $i <= count($users); $i++)
        {{ $i }}
    @endfor   
    <br><br>

    @foreach($users as $user)
        {{$user->name}} ({{$user->email}})<br>   
    @endforeach
    <br><br>

    @forelse($users as $user)
        {{$user->name}} ({{$user->email}}) <br>
    @empty
        Nenhum usuário encontrado
    @endforelse
<br><br>
<?php $j = 1; ?>
@while($j <= 10)
{{$j++}}
@endwhile
<br>
</body>
</html>