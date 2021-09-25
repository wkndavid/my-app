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
