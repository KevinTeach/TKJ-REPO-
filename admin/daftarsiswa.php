<?php
require "../function/addsiswa.php";
session_start();
if (isset($_POST["post"])) {
    if (postsiswa($_POST) > 0) {
        echo "<script>
                   alert('Upload Data Berhasil');
                   document.location.href = '../admin/daftarsiswa.php';
               </script>";
    }else{
        echo "<script>
                   alert('Upload Data Gagal!');
           </script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran&nbsp;Siswa</title>
    <link rel="stylesheet" href="../css/bg.css">
    <link rel="stylesheet" href="../css/ads.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Taviraj&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="sidenav">
  <a href="../admin/daftaralumni.php" class="btn btn-success">Daftar Alumni</a>
  <a href="../admin/daftarsiswa.php" class="btn btn-success">Daftar Siswa</a>
  <a href="../admin/logout.php" class="btn btn-success">Keluar</a>
</div>

<div class="container">
<div class="gg">
    
</div>
<div class="main">
  <form action="" method="post">
     <div class="card">
        <div class="card-header text-capitalize text-center">
           form&nbsp;inputan&nbsp;siswa
        </div>
        <div class="card-body">
            <div class="form-group">
            <label for="nasis">Nama&nbsp;Siswa</label>
            <input type="text" class="form-control" name="namasiswa">
        </div>
        <div class="form-group">
            <label for="thnmasuk">Tahun&nbsp;Masuk</label>
            <input type="date" class="form-control" name="tahunmasuk">
        </div>
        <div class="form-group">
            <label for="thnkeluar">Tahun&nbsp;Keluar</label>
            <input type="date" class="form-control" name="tahunkeluar">
        </div>
        <div class="form-group">
            <label for="hallaporan">Hasil&nbsp;Laporan&nbsp;PKL</label>
            <input type="text" class="form-control" name="hallaporan">
        </div>
        <div class="form-group">
            <label for="sttsiswa">Status&nbsp;Siswa</label>
            <input type="text" class="form-control" name="statussiswa">
        </div>
        <div class="float-right">
            <button type="submit" name="post"class="btn btn-sm btn-success text-capitalize">daftar&nbsp;siswa</button>
        </div>
        </div>
     </div>
  </form>
</div>
<footer>
<div class="float-right">
<img src="../asset/Logo.png" alt="" srcset="">
</div>
</div>
</footer>
</body>
<script>
        var i;

        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
        });
        }
        </script>
</html>