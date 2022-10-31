<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar&nbsp;Alumni|SMKN&nbsp;1&nbsp;Kayan&nbsp;Hilir</title>
    <link rel="stylesheet" href="css/bg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Taviraj&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-orange">
    <div class="float-left">
    <img src="asset/Logo TKJ.png" alt="logo-tkjsmkn1kahil" style="width:50px" srcset="">
    <img src="asset/Logo_Sekolahs.png" alt="logo-tkjsmkn1kahil" style="width:50px" srcset="">
    </div>
    <button class="navbar-toggler bg-danger text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu&nbsp;Siswa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="alumniresearch.php">Daftar&nbsp;Alumni</a>
            <a class="dropdown-item" href="siswaresearch.php">Daftar&nbsp;Siswa</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tkjproduct.php">Product&nbsp;TKJ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tentang&nbsp;Kami</a>
        </li>
        </ul>
    </div>
    </nav>
<div class="container-fluid bg-font">
    <br>
    <div class="float-right">
        <form class="form-inline my-2 my-lg-0 mt-2">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn bg-orange my-2 my-sm-0" type="submit">Search</button>
        </form>
    <br>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
        <thead class="text-center">
            <tr>
            <th scope="col">Daftar&nbsp;Nama&nbsp;Alumni</th>
            <th scope="col">Tahun&nbsp;Masuk</th>
            <th scope="col">Tahun&nbsp;Keluar</th>
            <th scope="col">Hasil&nbsp;Laporan&nbsp;PKL&nbsp;Alumni</th>
            <th scope="col">Status&nbsp;Alumni</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Ignasius Kevin Nainggolan</th>
            <td class="text-center">2010</td>
            <td class="text-center">2013</td>
            <td><button disabled="disabeld"class="btn btn-success btn-block btn-sm">BAIK</button></td>
            <td>Sudah&nbsp;Bekerja</td>
            </tr>
            <tr>
            <th scope="row">B</th>
            <td class="text-center">2010</td>
            <td class="text-center">2013</td>
            <td><button disabled="disabeld"class="btn btn-danger btn-block btn-sm">TIDAK&nbsp;BAIK</button></td>
            <td>Belum&nbsp;Bekerja</td>
            </tr>
            <tr>
            <th scope="row">C</th>
            <td class="text-center">2010</td>
            <td class="text-center">2013</td>
            <td><button disabled="disabeld"class="btn btn-success btn-block btn-sm">BAIK</button></td>
            <td>Sudah&nbsp;Bekerja</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>