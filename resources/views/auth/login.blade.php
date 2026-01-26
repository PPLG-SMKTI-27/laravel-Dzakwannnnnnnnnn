@extends('layouts.layout')

@section('content')
<div class="auth-wrapper">
  <div class="auth-card">

    <div class="auth-header">
      <span class="auth-badge">Welcome Back</span>
      <h2>Login Akun</h2>
      <p>Masuk untuk melanjutkan ke dashboard</p>
    </div>

    @if(session('error'))
    <div class="auth-error">
      {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
      @csrf

      <div class="input-group">
        <input type="email" name="email" required>
        <label>Email</label>
      </div>

      <div class="input-group">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>

      <button type="submit" class="auth-btn">
        Login
      </button>
    </form>

    <p class="auth-switch">
      Belum punya akun?
      <a href="{{ route('register') }}">Register</a>
    </p>

  </div>
</div>
@endsection