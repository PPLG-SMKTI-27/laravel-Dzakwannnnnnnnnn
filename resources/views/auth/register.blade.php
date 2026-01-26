@extends('layouts.layout')

@section('content')
<div class="login-section">
  <div class="login-card register-card">

    <span class="auth-badge">Create Account</span>
    <h2>Register</h2>
    <p class="auth-subtitle">
      Buat akun baru untuk mulai eksplor portfolio
    </p>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
    <ul class="error-text">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form action="{{ route('register.process') }}" method="POST">
      @csrf

      <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>

      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

      <input type="password" name="password" placeholder="Password (min 6 karakter)" required>

      <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

      <button type="submit">Register</button>
    </form>

    <p class="auth-switch">
      Sudah punya akun?
      <a href="{{ route('login') }}">Login</a>
    </p>
  </div>
</div>
@endsection