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

    @switch(5)
        @case(1)
            Eu tenho 1 usuário
            @break
        @case(5)
            Eu tenho 5 Usuários
            @break
        @case(10)
            Eu tenho 10 usuários
            @break
        @default
            Eu não tenho usuários
    @endswitch
    <br><br>
</body>
</html>