<?php
include "akses.php";
include "koneksi.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="gaya/al.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery1.11.3.js"></script>
  <title>Perpustakaan SMPN 2 Purbolinggo</title>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="administrator.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="Buku.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
              Buku</a></li>
          <li><a href="Data_Buku.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
              Data Buku</a></li>
          <li><a href="Siswa.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
              Siswa</a></li>
          <li><a href="Data_Siswa.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Data Siswa</a></li>
          <li><a href="Pinjam_Buku.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
              Pinjam Buku</a></li>
          <li><a href="Data_Peminjaman.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Data Peminjaman Buku</a></li>
          <li><a href="Pengembalian_Buku.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Pengembalian Buku</a></li>
          <li><a href="Denda.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
              Denda</a></li>
          <li><a href="Ketentuan.php"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Ketentuan</a></li>
          <li><a href="Tentang.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              Tentang</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div align="center">
        <img src="image/header.jpg" width="2000" height="500" class="img-responsive">
      </div>
    </div>
    <div align="center" id="welcome">
      <h1> Selamat Datang di Aplikasi Perpustakaan Berbasis Web </h1>
      <h2> SMP NEGRI 2 PURBOLINGGO </h2>
    </div>

    <script src="biongo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>