@extends('layouts.default')

@section('title', 'Lista de Usuários')

@section('content')
    @parent
    @each('user.user', $users, 'user')
@endsection