@extends('layouts.app')

@section('content')
<style>
    body {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .register-container {
        background: rgba(0, 0, 0, 0.6); /* Black transparent */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        width: 400px;
        text-align: center;
        backdrop-filter: blur(10px);
        color: white;
    }
    .register-container h3 {
        color: white;
    }
    .form-label {
        color: white;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
    }
    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
    .btn-primary {
        width: 100%;
        background: #007bff;
        border: none;
    }
    .btn-primary:hover {
        background: #0056b3;
    }
    .text-center a {
        color: #f8f9fa;
        text-decoration: none;
    }
    .text-center a:hover {
        text-decoration: underline;
    }
</style>
    <div class="register-container">
        <h3>Register</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <div class="text-center mt-3">
                <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </form>
    </div>
@endsection