@extends('layout.main')

@section('content')
<div class="container">
  <div class="carousel slide mt-5" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpeg" alt="" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<h5>MARI BERGABUNG DENGAN KAMI, BERSATU MENJADI KONTRIBUTOR UNGGULAN BANGSA UNTUK INDONESIA</h5>
<p class="mb-5">Kami mengundang seluruh insan dari berbagai seluruh penjuru negeri untuk bergabung bersama kami. Langsung kirim surat lamaran dan berkas Anda kepada kami. Segala informasi asli hanya ada di website resmi PT Riung Mitra Lestari dan instagram resmi kami @riungmitralestari. Kami tunggu kehadiran kalian!</p>
</div>
@endsection