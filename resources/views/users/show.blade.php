@extends('layouts.app')
@section('title','Detalhes')
@section('content')
    <h2> Detalhes do Usuário</h2>
    <ul>
        <li> {{$user->name}} </li>
        <li> {{$user->email}} </li>
        <li> {{$user->created_at}} </li>
    </ul>
    <form action="{{route('users.destroy',$user->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar</button>
    </form>
@endsection
