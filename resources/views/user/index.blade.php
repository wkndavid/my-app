<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    @php
        $count = count($users);
        
        foreach($users as $user){
            echo $user->name . '<br>';
      }
        
    @endphp

    @include('heading', [
        'title' => 'Usuários'
    ])

    @each('user.user', $users, 'user')
</body>
</html>