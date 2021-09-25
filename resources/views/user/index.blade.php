<<<<<<< HEAD
@extends('layouts.default')

@section('title', 'Lista de Usuários')

@section('content')
    @parent <br>
    @each('user.user', $users, 'user')
@endsection
@section('sidebar')
@parent 
<br>
<ul>
    <li>Menu 1</li>
    <li>Menu 2</li>
    <li>Menu 3</li>
</ul>
@endsection





{{--    @php --}}
{{--        $count = count($users); --}}
        
{{--        foreach($users as $user){ --}}
{{--            echo $user->name . '<br>'; --}}
{{--      }
{{--    @endphp --}}

{{--    @include('heading', --}}
{{--         'title' => 'Usuários'--}}
{{--     ]) --}}
{{--     @each('user.user', $users, 'user')--}}
=======
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

    @includeWhen(true, 'heading', [
        'title'=>'Usuários When'])

    @foreach($users as $user) <br>
   
{{ $loop->depth }}
    {{ $user->id }} - {{ $user->name }} ({{ $user->email }})
    @endforeach
    <br><br>
</body>
</html>
>>>>>>> 98bad2707c2db5754c096562c1dda13f53a8c28d
