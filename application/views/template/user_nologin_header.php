<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jadwal.css'); ?>">

    <!-- <link rel="stylesheet" href="home.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
     <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Rock+Salt&family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Marcellus&family=Rock+Salt&family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Marcellus&family=Pathway+Gothic+One&family=Rock+Salt&family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Indie+Flower&family=Marcellus&family=Pathway+Gothic+One&family=Rock+Salt&family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rock+Salt&family=Squada+One&display=swap" rel="stylesheet">

  <title>Halaman Home</title>
  </head>
  <body>

    <!-- Open Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
      <a class="navbar-brand font-weight-bold text-primary" href="<?= base_url('user'); ?>"><img src="<?= base_url('assets/img/vahitra.png'); ?>" alt="" style="width: 50px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-primary" href="home.html">BERANDA <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-primary" href="jadwal.html">JADWAL</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-primary" href="berita.html">BERITA</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              LAYANAN KAMI
            </a>
            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-primary" href="#lintasan">LINTASAN</a>
              <a class="dropdown-item text-primary" href="#pelabuhan">PELABUHAN</a>
              <a class="dropdown-item text-primary" href="#kapal">KAPAL</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-primary" href="#contact">HUBUNGI KAMI</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-primary" href="<?= base_url('Auth'); ?>">MASUK/DAFTAR</a>
          </li>
        </ul>
      </div>
     </div>
    </nav>
    <!-- Tutup Navbar -->