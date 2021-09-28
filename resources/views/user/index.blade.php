@extends('layouts.default')

@section('title', 'Lista de Usuários')

@section('content')
    @each('user.user', $users, 'user')
@endsection
 