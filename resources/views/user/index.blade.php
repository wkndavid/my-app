<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    
    @include('heading', [
        'title' => 'Usuários'
    ])

    @each('user.user', $users, 'user')    

{{--    @foreach($users as $user)   --}}
{{--    @include('user.user')   --}}
{{--    @endforeach --}}
</body>
</html>