@extends('layouts.layout')
@section('content')
<!-- Welcoming-text -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
  Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: '{{ session('success') }}',
    timer: 2000,
    showConfirmButton: false
  })
</script>
@endif

@if(session('error'))
<script>
  Swal.fire({
    icon: 'error',
    title: 'Gagal!',
    text: '{{ session('error') }}'
  })
</script>
@endif


<!-- ===== HERO / WELCOMING TEXT ===== -->
<div class="hero">
  <div class="hero-content">
    <span class="hero-badge">Selamat Datang!</span>

    <h1>
      Halo, Saya <br>
      <span>Muhammad Dzakwan</span>
    </h1>

    <p>
      Pelajar yang tertarik pada pengembangan diri, teknologi,
      dan berkomitmen menjadi pribadi yang disiplin serta bertanggung jawab.
    </p>

    <div class="hero-actions">
      @auth
      <!-- USER SUDAH LOGIN -->
      <a href="#profil" class="hero-btn primary">
        Lihat Profil
      </a>
      <a href="#project" class="hero-btn secondary">
        Lihat Project
      </a>

      <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button class="hero-btn danger">Logout</button>
      </form>
      @else
      <!-- USER BELUM LOGIN -->
      <a href="{{ route('login') }}" class="hero-btn primary">
        Login
      </a>
      <a href="{{ route('register') }}" class="hero-btn secondary">
        Register
      </a>
      @endauth
    </div>
  </div>
</div>

<!-- Profil-section -->
<section class="profil-section" id="profil">
  <h2 class="section-title">Profil Saya</h2>

  <div class="profil-card animate">
    <div class="profil-image">
      <img src="Foto1.png" alt="Foto Dzakwan">
    </div>

    <div class="profil-info">
      <h3>Muhammad Dzakwan</h3>
      <p class="profil-desc">
        Pelajar yang tertarik pada pengembangan diri, teknologi,
        dan berkomitmen menjadi pribadi disiplin dan bertanggung jawab.
      </p>

      <ul class="profil-list">
        @foreach($profil as $p)
        <li><span>📍</span> {{ $p['Ttl'] }}</li>
        <li><span>🏠</span> {{ $p['Alamat'] }}</li>
        <li><span>📞</span> {{ $p['Telepon']}}</li>
        <li><span>✉️</span> {{ $p['Email'] }}</li>
        <li><span>🏫</span> {{ $p['Pendidikan'] }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
<!-- Project-section -->
<div class="project-section" id="project">
  <h2 class="section-title">Project Saya</h2>
  <div class="project-container">
    <div class="project-card">
      <h3>Website Perizinan Siswa</h3>
      <p>
        Website profil sederhana menggunakan HTML dan CSS
        sebagai media untuk memperkenalkan diri secara online.
      </p>
      <a href="https://github.com/Dzakwannnnnnnnnn/PERSIS_Project.git" target="_blank" class="github-btn">
        Lihat di GitHub
      </a>
    </div>

    <div class="project-card" id="project">
      <h3>Cinematix</h3>
      <p>
        Deskripsi singkat mengenai project yang pernah dibuat
        atau sedang dikembangkan.
      </p>
      <a href="https://github.com/Dzakwannnnnnnnnn/FInalCinemaTixProject.git" target="_blank" class="github-btn">
        Lihat di GitHub
      </a>
    </div>
  </div>
</div>

<!-- Skill -->
<div class="skill-section" id="skill">
  <h2 class="section-title">Skill Saya</h2>
  <div class="skill-container">
    <div class="skill-card">
      <h3>PHP</h3>
    </div>

    <div class="skill-card" id="skill">
      <h3>Frontend</h3>
    </div>

    <div class="skill-card" id="skill">
      <h3>UI / UX</h3>
    </div>
  </div>
</div>
<!-- Kontak -->
<div class="contact-section" id="kontak">
  <h2 class="section-title">Kontak Saya</h2>
  <p>Silakan hubungi saya melalui platform berikut</p>

  <div class="contact-container">
    <div class="contact-card">
      <h3>Instagram</h3>
      <p>@dzzkwaan</p>
      <a href="https://instagram.com/dzzkwaan" target="_blank">
        Kunjungi
      </a>
    </div>

    <div class="contact-card">
      <h3>WhatsApp</h3>
      <p>0858-2272-2058</p>
      <a href="https://wa.me/6285822722058" target="_blank">
        Chat
      </a>
    </div>

    <div class="contact-card">
      <h3>Twitter (X)</h3>
      <p>@dzzkwann</p>
      <a href="https://twitter.com/dzzkwann" target="_blank">
        Kunjungi
      </a>
    </div>

    <div class="contact-card">
      <h3>GitHub</h3>
      <p>Dzakwannnnnnnnnn</p>
      <a href="https://github.com/Dzakwannnnnnnnnn" target="_blank">
        Lihat Repo
      </a>
    </div>
  </div>
</div>

@endsection