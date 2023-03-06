@extends('layout.dashboard')

@section('content')
<div class="container">
<h4>Selamat Datang <b>{{Auth::user()->name}}</b> ({{Auth::user()->status}})</h4>
<hr>
<h3>Data Pelamar</h3>
<table class="table table-bordered">
      <tr>
        <td>Nama</td>
        <td>{{Auth::user()->name}}</td>
      </tr>
      <tr>
        <td>No identitas</td>
        <td>{{Auth::user()->identity}}</td>
      </tr>
      <tr>
        <td>Tempat lahir</td>
        <td>{{Auth::user()->birth_place}}</td>
      </tr>
      <tr>
        <td>Tanggal lahir</td>
        <td>{{Auth::user()->birth_date}}</td>
      </tr>
      <tr>
        <td>Jenis kelamin</td>
        <td>{{Auth::user()->gender}}</td>
      </tr>
      <tr>
        <td>No handphone</td>
        <td>{{Auth::user()->no_handphone}}</td>
      </tr>
      <tr>
        <td>Tahapan</td>
        <td>{{Auth::user()->tahapan}}</td>
      </tr>
  </table>
  <a href="/edit" class="btn btn-primary">Ubah Data</a>
<hr>
<b>Upload CV</b><br>
<a href="/cv-upload" class="btn btn-success">Upload CV</a><br><br>
<p>File CV = {{$fileName}}</p>
<hr>
<b>Upload Foto</b><br>
<a href="/photo-upload" class="btn btn-success">Upload Foto</a><br><br>
<p>Foto {{$imageName}}</p>
<img src="images/{{$imageName}}" style="width:200px;height:200px;">
</div>
@endsection