<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ahmad Farhad Mabrury - 5026241034</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>Ahmad Farhad Mabrury - 5026241034</h1>
  <h6>@yield('title')</h6>
</div>
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/pegawai">Pegawai</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="/sepatu">Tugas Pra EAS Sepatu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/siswa">Siswa</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="/kbc">Tugas Latihan EAS 1</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="/nk">Tugas Latihan EAS 2</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">EAS</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    @yield('konten')
</div>

</body>
</html>
