@extends('layouts.themes.main')
@section('title','Authentication')
@section('content')
    <div>
    @if (session('email') === null)
            @include('auth.login')
    @else
        <p>Hello, {{session('name')}}!</p>
    @endif
    <form action="{{url('/logout')}}"></form>
</div>
@endsection