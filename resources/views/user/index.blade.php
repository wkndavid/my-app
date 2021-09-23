<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    
    @include('user.heading')

    {{-- @includeIf('user.heading2') --}}
    
    {{--@includeWhen(true, 'user.heading')--}}

    {{--@includeUnless(false, 'user.heading')--}}
    
    @includeFirst(['user.heading', 'user.heading2'])

    {{ count($users) }} <br>

    @foreach($users as $user) <br>
   
{{ $loop->depth }}
    {{ $user->id }} - {{ $user->name }} ({{ $user->email }})
    @endforeach
    <br><br>
</body>
</html>