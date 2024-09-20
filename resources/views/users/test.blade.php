@extends('layouts.app')
@section('content')
<div class="container">
    <div>ID: {{ $user->id }}</div>
    <div>Name: {{ $user->name }}</div>
    <div>Email: {{ $user->email }}</div>
    <div>Password: {{ $user->password }}</div>
    <div>Role: {{ $user->role }}</div>
    <div>Avatar: {{ $user->avatar }}</div>
</div>
@endsection