@extends('layouts.app')
@section('title','Listagem')
@section('content')
    <h1> Listagem de usuários 
        (<a href="{{route('users.create')}}"> + </a>)
    </h1>
    <ul>
    @foreach($users as $item)
        <li>
        {{$item->name}}
        <a href="{{ route('users.show', $item->id)}}">- (Detalhes)</a>
        <a href="{{ route('users.edit', $item->id)}}">- (Editar)</a>
        </li>
    @endforeach
    </ul>
@endsection