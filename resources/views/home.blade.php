@extends('layouts.layout')
<!-- Welcoming-text -->
@section('content')
<div class="hero">
  <div class="hero-content">
    <h1>Halo, Saya <span>Muhammad Dzakwan</span></h1>
    <p>
      Selamat datang di halaman profil saya.
      Saya adalah pelajar yang tertarik pada pengembangan diri,
      teknologi, dan terus berusaha menjadi pribadi yang disiplin
      serta bertanggung jawab.
    </p>
  </div>
</div>
<!-- Profil-section -->
<div class="profil-title">
  <h2>Profil Saya</h2>
</div>
<div class="profil" id="profil">
  <div class="foto-profil">
    <img src="Foto1.png" alt="" width="200px">
  </div>
  <div class="data-pribadi">
    <ul>
      <li class="data"><strong>Nama:</strong> Muhammad Dzakwan</li>
      <li class="data"><strong>Tempat, Tanggal Lahir:</strong> Samarinda, 1 Februari 2009</li>
      <li class="data"><strong>Alamat:</strong> Jl. Juanda 7 No. 6A Rt.4</li>
      <li class="data"><strong>Nomor HP:</strong> 085822722058</li>
      <li class="data"><strong>Email:</strong> muhammaddzakwan035@gmail.com</li>
    </ul>
  </div>
</div>
<!-- Project-section -->
<div class="project-section" id="project">
  <h2>Project Saya</h2>

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
  <h2>Skill Saya</h2>
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
  <h2>Kontak Saya</h2>
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