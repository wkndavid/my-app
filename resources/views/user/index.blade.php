@extends('layouts.default')

@section('content')
    @each('user.user', $users, 'user')
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
