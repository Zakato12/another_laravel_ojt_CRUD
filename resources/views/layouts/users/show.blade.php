@extends('layouts.themes.main')
@section('title', 'User Details')
    @section('content')
<div class="container">
    <h1 class="text-center">User Details</h1>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text"><small class="text-muted">Created at: {{ $user->created_at->format('d M Y') }}</small></p>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
            <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure?')">Delete</button>
            </form>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
        </div>
    </div>
</div>
    @endsection