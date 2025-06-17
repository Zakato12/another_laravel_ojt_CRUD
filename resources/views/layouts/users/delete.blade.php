@extends('layouts.themes.main')
@section('title', 'User Deletion Confirmation')
@section('content')
<div class="container">
    <h1 class="text-center">Delete User</h1>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Are you sure you want to delete the user?</h5>
            <p class="card-text">Name: {{ $user->name }}</p>
            <p class="card-text">Email: {{ $user->email }}</p>
        </div>
        <div class="card-footer text-center">
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteForm = document.querySelector('form');
        deleteForm.addEventListener('submit', function(event) {
            if (!confirm('Are you sure you want to delete this user?')) {
                event.preventDefault();
            }
        });
    });
</script>

 
@endsection