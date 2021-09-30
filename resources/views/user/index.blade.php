@extends('layouts.default')

@section('title', 'Lista de usuarios')

@section('content')
    @each('user.user', $users, 'user')
@endsection

@section('yield')
    Conteúdo yield
@endsection