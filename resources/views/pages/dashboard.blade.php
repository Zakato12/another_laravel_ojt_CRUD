@extends('layouts.themes.main')
@section('title', 'Dashboard')
@section('content')
<div>
        @if (session('email') === null)
            @include('auth.login')
    @else
        <main class="col-12 col-md-9 col-lg-10 content-area d-flex justify-content-center align-items-center" tabindex="0" aria-label="Main content area" style="min-height: 80vh;">
        <div class="user-container bg-white p-5 rounded shadow" style="margin: 40px auto; max-width: 900px; width: 100%;">
            <h2 class="text-center mb-4" style="color: #0d6efd;">Users</h2>
            <table class="table table-striped table-bordered" style="background: white;">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{route('users.show', $user->id)}}" class="btn btn-info btn-sm">View</a>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">Update</a>
                            <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
            <div class="text-end mt-3">
                <form action="{{route('users.create')}}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Create User</button>
                </form>
            </div>
        </div>
    </main>
    @endif
</div>

@endsection
