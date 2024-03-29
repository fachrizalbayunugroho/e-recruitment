<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website E-recruitment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Recruitment</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Registrasi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/internship">Internship</a></li>
            <li><a class="dropdown-item" href="/freshgrad">Fresh Graduate</a></li>
            <li><a class="dropdown-item" href="/professional">Professional</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Login</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/login">Applicant</a></li>
            <li><a class="dropdown-item" href="/login2">HRD</a></li>
            <li><a class="dropdown-item" href="/login3">Vendor</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengumuman">Pengumuman</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
  @yield('content')
  <footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: #030303; color: white">
    PT. Riung Mitra Lestari (Persero)
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>