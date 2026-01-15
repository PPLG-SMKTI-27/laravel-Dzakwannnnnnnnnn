<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Muhammad Dzakwan</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, sans-serif;
  }

  body {
    background-color: #f5f6fa;
    color: #333;
  }

  /* ===== NAVBAR ===== */
  .header {
    width: 100%;
  }

  .nav ul {
    display: flex;
    justify-content: center;
    gap: 30px;
    padding: 18px 0;
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  }

  .navelement {
    list-style: none;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
    padding-bottom: 5px;
  }

  .navelement::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background-color: #004cff;
    left: 0;
    bottom: 0;
    transition: 0.3s;
  }

  .navelement:hover::after {
    width: 100%;
  }

  .navelement:hover {
    color: #004cff;
  }

  /* ===== PROFIL CARD ===== */
  .profil {
    display: flex;
    align-items: center;
    gap: 40px;
    background-color: #ffffff;
    padding: 40px 50px;
    margin: 60px auto;
    width: 70%;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  /* ===== FOTO PROFIL ===== */
  .foto-profil img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #004cff;
  }

  /* ===== DATA PRIBADI ===== */
  .data-pribadi ul {
    list-style: none;
  }

  .data-pribadi .data {
    font-size: 16px;
    margin-bottom: 12px;
    line-height: 1.6;
  }

  .data-pribadi .data strong {
    color: #004cff;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 768px) {
    .profil {
      flex-direction: column;
      width: 90%;
      text-align: center;
    }

    .foto-profil img {
      width: 150px;
      height: 150px;
    }

    .nav ul {
      gap: 20px;
    }
  }

  /* ===== HERO WELCOME ===== */
  .hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(180deg,
        #f5f7ff 0%,
        #ffffff 100%);
    text-align: center;
    padding: 0 20px;
  }

  .hero-content {
    max-width: 700px;
    animation: heroFade 1.2s ease forwards;
  }

  .hero-content h1 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
  }

  .hero-content h1 span {
    color: #004cff;
  }

  .hero-content p {
    font-size: 18px;
    line-height: 1.8;
    color: #555;
  }

  /* ===== ANIMATION ===== */
  @keyframes heroFade {
    from {
      opacity: 0;
      transform: translateY(40px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 768px) {
    .hero-content h1 {
      font-size: 30px;
    }

    .hero-content p {
      font-size: 16px;
    }
  }

  .navelement a {
    text-decoration: none;
    color: inherit;
  }

  html {
    scroll-behavior: smooth;
  }

  /* ===== FOOTER ===== */
  .footer {
    background-color: #0f172a;
    color: #e5e7eb;
    padding: 40px 20px;
    margin-top: 80px;
  }

  .footer-content {
    max-width: 900px;
    margin: auto;
    text-align: center;
  }

  .footer-content h3 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #ffffff;
  }

  .footer-content p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #cbd5f5;
  }

  .footer-links {
    margin-bottom: 20px;
  }

  .footer-links a {
    color: #93c5fd;
    margin: 0 12px;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
  }

  .footer-links a:hover {
    color: #ffffff;
  }

  .footer-copy {
    font-size: 13px;
    color: #94a3b8;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .footer-content h3 {
      font-size: 18px;
    }
  }

  /* ===== PROJECT SECTION ===== */
  .project-section {
    padding: 80px 20px;
    background-color: #f8fafc;
    text-align: center;
  }

  .project-section h2 {
    font-size: 32px;
    margin-bottom: 40px;
    color: #333;
  }

  /* ===== PROJECT CARD ===== */
  .project-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
  }

  .project-card {
    background-color: #ffffff;
    width: 300px;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
  }

  .project-card h3 {
    font-size: 20px;
    margin-bottom: 12px;
  }

  .project-card p {
    font-size: 14px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 20px;
  }

  /* ===== GITHUB BUTTON ===== */
  .github-btn {
    display: inline-block;
    padding: 10px 18px;
    background-color: #111827;
    color: #ffffff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
    transition: 0.3s;
  }

  .github-btn:hover {
    background-color: #004cff;
  }

  /* ===== CONTACT SECTION ===== */
  .contact-section {
    padding: 80px 20px;
    background-color: #ffffff;
    text-align: center;
  }

  .contact-section h2 {
    font-size: 32px;
    margin-bottom: 15px;
  }

  .contact-section p {
    font-size: 16px;
    color: #555;
    margin-bottom: 40px;
  }

  .contact-container {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
  }

  .contact-card {
    width: 220px;
    padding: 25px;
    background-color: #f8fafc;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .contact-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
  }

  .contact-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }

  .contact-card a {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #004cff;
    color: #ffffff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
    transition: 0.3s;
  }

  .contact-card a:hover {
    background-color: #002fa7;
  }

  /* ===== PROFIL TITLE ===== */
  .profil-title {
    text-align: center;
    margin-top: 80px;
    margin-bottom: -30px;
  }

  .profil-title h2 {
    font-size: 32px;
    font-weight: 700;
    color: #333;
  }
</style>

<body>
  <!-- Header-Navbar -->
  <div class="header">
    <div class="nav">
      <ul>
        <li class="navelement">
          <a href="/">Beranda</a>
        </li>
        <li class="navelement">
          <a href="#profil">Profil</a>
        </li>
        <li class="navelement">
          <a href="#project">Project</a>
        </li>
        <li class="navelement">
          <a href="/pendidikan">Pendidikan</a>
        </li>
        <li class="navelement">
          <a href="#kontak">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Welcoming-text -->
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

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <h3>Muhammad Dzakwan</h3>
      <p>
        Website profil pribadi yang dibuat untuk menampilkan
        informasi diri, pendidikan, dan pengembangan diri.
      </p>

      <div class="footer-links">
        <a href="#profil">Profil</a>
        <a href="#project">Project</a>
        <a href="#pendidikan">Pendidikan</a>
      </div>

      <span class="footer-copy">
        © 2026 Muhammad Dzakwan. All rights reserved.
      </span>
    </div>
  </footer>

</body>

</html>