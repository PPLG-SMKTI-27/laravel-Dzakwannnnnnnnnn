@extends('layouts.layout')
@section('content')
<!-- Galeri -->
<div class="gallery-section" id="galeri">
  <h2 class="section-title">Galeri</h2>
  <p>Beberapa momen dan dokumentasi kegiatan saya</p>

  <div class="gallery-container">
    <div class="gallery-card" data-image="Foto1.png" data-title="Foto Profil"
      data-description="Foto Gantengnya CEO Dzakwan" onclick="openModal(this)">
      <img src="Foto1.png" alt="Foto Profil">
      <h3>Foto Profil</h3>
      <p>Foto Gantengnya CEO Dzakwan</p>
    </div>

    <div class="gallery-card" data-image="Foto2.jpeg" data-title="Dzakwan's Pet"
      data-description="Kucingnya CEO Dzakwan imut" onclick="openModal(this)">
      <img src="Foto2.jpeg" alt="Kegiatan Sekolah">
      <h3>Dzakwan's pet</h3>
      <p>Kucingnya CEO Dzakwan imut</p>
    </div>

    <div class="gallery-card" data-image="Foto3.jpeg" data-title="Kisah Dzakwan" data-description="Inilah bini Dzakwan"
      onclick="openModal(this)">
      <img src="Foto3.jpeg" alt="Pengembangan Diri">
      <h3>Kisah Dzakwan</h3>
      <p>Inilah bini Dzakwan</p>
    </div>
  </div>

  <!-- Modal Galeri -->
  <div class="gallery-modal" id="galleryModal">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <img id="modalImage" src="">
    <div class="modal-content">
      <h3 id="modalTitle"></h3>
      <p id="modalDescription"></p>
    </div>
  </div>
  <script>
    function openModal(card) {
    const image = card.dataset.image;
    const title = card.dataset.title;
    const description = card.dataset.description;

    document.getElementById('galleryModal').style.display = 'flex';
    document.getElementById('modalImage').src = image;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalDescription').innerText = description;
  }

  function closeModal() {
    document.getElementById('galleryModal').style.display = 'none';
  }
  </script>
  @endsection