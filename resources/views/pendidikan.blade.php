@extends('layouts.layout')
@section('content')
<!-- ================= RIWAYAT PENDIDIKAN ================= -->
<section class="education-section" id="pendidikan">
  <h2 class="section-title">Riwayat Pendidikan</h2>

  <div class="timeline">

    <!-- SD -->
    <div class="timeline-item fade-slide">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="edu-year">2015 – 2021</span>
        <h3>Sekolah Dasar (SD)</h3>
        <p class="edu-school">SD Daarul Falihin Islamic School</p>
        <p class="edu-desc">
          Membangun dasar pengetahuan dan karakter sejak usia dini.
        </p>

        <div class="edu-image">
          <img src="{{ asset('SD.png') }}" alt="SD Daarul Falihin Islamic School" width="100px">
        </div>
      </div>
    </div>

    <!-- SMP -->
    <div class="timeline-item fade-slide">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="edu-year">2021 – 2024</span>
        <h3>Sekolah Menengah Pertama (SMP)</h3>
        <p class="edu-school">SMP Fastabiqul Khairat</p>
        <p class="edu-desc">
          Mulai tertarik pada teknologi dan pengembangan diri.
        </p>

        <div class="edu-image">
          <img src="{{ asset('SMP.png') }}" alt="SMP Negeri" width="100px">
        </div>
      </div>
    </div>

    <!-- SMK -->
    <div class="timeline-item fade-slide">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="edu-year">2024 – 2027</span>
        <h3>Sekolah Menengah Kejuruan (SMK)</h3>
        <p class="edu-school">SMK TI Airlangga Jurusan PPLG</p>
        <p class="edu-desc">
          Fokus pada pemrograman, web development, dan logika sistem.
        </p>

        <div class="edu-image">
          <img src="SMK.png" alt="SMK" width="100px">
        </div>
      </div>
    </div>
    <!-- S1 -->
    <div class="timeline-item fade-slide">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="edu-year">2027 – Sekarang</span>
        <h3>Strata 1 (S1)</h3>
        <p class="edu-school">Universitas Indonesia Fakultas Teknik, Jurusan Informatika</p>
        <p class="edu-desc">
          Mendalami teknologi, sistem informasi, dan disiplin akademik.
        </p>

        <div class="edu-image">
          <img src="{{ asset('UNIV.png') }}" alt="Universitas" width="100px">
        </div>
      </div>
    </div>

  </div>
</section>
@endsection