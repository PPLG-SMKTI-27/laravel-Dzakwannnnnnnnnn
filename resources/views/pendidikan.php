<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendidikan | Muhammad Dzakwan</title>
  <link rel="stylesheet" href="style.css">
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

  /* ===== EDUCATION PAGE ===== */
  .education {
    min-height: 100vh;
    padding: 80px 20px;
    background-color: #f8fafc;
    text-align: center;
  }

  .education h1 {
    font-size: 36px;
    margin-bottom: 10px;
  }

  .edu-desc {
    font-size: 16px;
    color: #555;
    margin-bottom: 50px;
  }

  /* ===== TIMELINE ===== */
  .timeline {
    max-width: 700px;
    margin: auto;
    position: relative;
  }

  .timeline::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 0;
    width: 3px;
    height: 100%;
    background-color: #004cff;
    transform: translateX(-50%);
  }

  .timeline-item {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    width: 45%;
    margin-bottom: 40px;
    position: relative;
  }

  .timeline-item:nth-child(odd) {
    margin-left: 0;
    text-align: right;
  }

  .timeline-item:nth-child(even) {
    margin-left: 55%;
    text-align: left;
  }

  .timeline-item::before {
    content: "";
    position: absolute;
    top: 30px;
    width: 14px;
    height: 14px;
    background-color: #004cff;
    border-radius: 50%;
  }

  .timeline-item:nth-child(odd)::before {
    right: -34px;
  }

  .timeline-item:nth-child(even)::before {
    left: -34px;
  }

  .timeline-item .year {
    font-size: 14px;
    color: #004cff;
    font-weight: 600;
  }

  .timeline-item h3 {
    margin: 8px 0;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 768px) {
    .timeline::before {
      left: 10px;
    }

    .timeline-item {
      width: 100%;
      margin-left: 30px !important;
      text-align: left;
    }

    .timeline-item::before {
      left: -30px !important;
    }
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
    text-decoration-line: none;
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

  .nav a {
    text-decoration: none;
    /* hilangin garis bawah */
    color: inherit;
    /* ikuti warna li */
  }

  .nav a:visited {
    color: inherit;
    /* hilangin ungu visited */
  }

  .nav a:hover {
    color: #004cff;
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
</style>

<body>
  <div class="header">
    <div class="nav">
      <ul>
        <li class="navelement">
          <a href="/">Beranda</a>
        </li>
        <li class="navelement">
          <a href="/">Profil</a>
        </li>
        <li class="navelement">
          <a href="/">Project</a>
        </li>
        <li class="navelement">
          <a href="/pendidikan">Pendidikan</a>
        </li>
        <li class="navelement">
          <a href="/">Contact</a>
        </li>
      </ul>
    </div>

    <!-- PENDIDIKAN -->
    <section class="education">
      <h1>Riwayat Pendidikan</h1>
      <p class="edu-desc">
        Berikut adalah riwayat pendidikan saya dari Sekolah Dasar hingga Perguruan Tinggi.
      </p>

      <div class="timeline">

        <div class="timeline-item">
          <span class="year">2015 – 2021</span>
          <h3>Sekolah Dasar (SD)</h3>
          <p>SD Daarul Falihin Islamic School</p>
        </div>

        <div class="timeline-item">
          <span class="year">2021 – 2024</span>
          <h3>Sekolah Menengah Pertama (SMP)</h3>
          <p>SMP Fastabiqul Khairat</p>
        </div>

        <div class="timeline-item">
          <span class="year">2024 – 2027</span>
          <h3>Sekolah Menengah Kejuruan (SMK)</h3>
          <p>SMKS TI Airlangga</p>
          <p>Jurusan PPLG</p>
        </div>

        <div class="timeline-item">
          <span class="year">2027 – Sekarang</span>
          <h3>Strata 1 (S1)</h3>
          <p>Universitas Indonesia</p>
          <p>Fakultas Teknik</p>
          <p>Jurusan Teknik Informatika</p>
        </div>

      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="footer-content">
        <h3>Muhammad Dzakwan</h3>
        <p>Halaman pendidikan – website profil pribadi</p>
        <span class="footer-copy">
          © 2026 Muhammad Dzakwan
        </span>
      </div>
    </footer>

</body>

</html>