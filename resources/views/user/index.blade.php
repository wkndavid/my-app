@extends('layouts.default')

@section('title', 'Lista de Usuários')

@section('content')
<x-user></x-user>
    @each('user.user', $users, 'user')
@endsection