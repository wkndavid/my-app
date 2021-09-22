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

    @if(count($users) === 1)
        Eu tenho 1 usuários
    @elseif(count($users) > 1)
        Eu tenho vários usuários
    @else
        Eu não tenho usuários
    @endif

    <br><br>
    @unless(count($users))
        Eu não tenho Usuários
    @endunless

    <br><br>

    @isset($users)
        Variável users existe
    @endisset

    <br><br>
    @empty($users)
        Variável users está vazia
    @endempty

<br>
</body>
</html>