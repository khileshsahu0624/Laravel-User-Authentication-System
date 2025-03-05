@extends('layouts.app')

@section('content')
<style>
    body {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: black;
    }
    .login-container {
        background: rgba(0, 0, 0, 0.6); /* Black transparent */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        width: 350px;
        text-align: center;
        backdrop-filter: blur(10px);
    }
    .login-container h3 {
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
<div class="login-container">
    <h3>Login</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control" name="email" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </form>
</div>
@endsection
