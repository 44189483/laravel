@extends('Home.layout')

@section('content')
    Users!<br/>
    @foreach($users as $user)
        <p>{{ $user->nickname }}</p>
    @endforeach
@stop