@extends('layouts.default')

@section('title', 'Lista de Usuários')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
@endpush

@push('scripts')
<script> 
    const nameCourse = 'Laravel';
</script>
@endpush

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
