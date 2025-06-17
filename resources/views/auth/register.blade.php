@extends('layouts.themes.app')
@section('title', 'Register')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Register</title>
    <main class="justify-content-center align-items-start min-vh-100">
        <section class="register-container">
            <h1>Register</h1>
    <style>
        body {
            background-color: rgb(105, 150, 195); /* light background */
            font-family: 'Poppins', sans-serif;
        }
        .register-container {
            max-width: 400px;
            margin: 100px auto;
            background: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
            padding: 2.5rem;
        }
        h1 {
            text-align: center;
            font-weight: 700;
            font-size: 2.5rem;
            color: #111827;
            margin-bottom: 1rem;
        }
        label {
            font-weight: 600;
            color: #374151;
        }
        .form-control:focus {
            box-shadow: 0 0 4px 2px rgba(59, 130, 246, 0.3);
            border-color: #3b82f6;
        }
        .btn-primary {
            background: #3b82f6;
            border: none;
            font-weight: 600;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background: #2563eb;
        }
        .text-muted {
            color: #6b7280 !important;
        }
        .form-check-label {
            user-select: none;
            color: #4b5563;
        }
        .error-message {
            font-size: 0.875rem;
            color: #dc2626;
            margin-top: 0.25rem;
        }
    </style>
    <form method="POST" action="{{ url('/register') }}">
                @csrf 

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                        placeholder="Your name"
                        autofocus
                    />
                    @error('name')
                        <div class="error-message" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="email"
                    />
                    @error('email')
                        <div class="error-message" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input itemid="password-field"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Your password"
                    />
                    @error('password')
                        <div class="error-message" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation"
                        type="password"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="password_confirmation"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirm your password"
                    />
                    @error('password_confirmation')
                        <div class="error-message" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <div class="mt-3">
                <p class="text-center">Already have an account? <a href="{{ url('/login') }}">Login here</a></p>
            </div>              
</section>
            
@endsection