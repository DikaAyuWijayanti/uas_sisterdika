<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index3.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM guru WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/styleform.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Slab:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Slab:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="datatatausaha.css">
    <title>Data Guru</title>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="Project.html"><i>
        <img src="images/logo.png" align="left" style="width: 50px; height: 50px;"/>  
        &nbsp; Smansa</i></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Beranda.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Profil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="sambutan.php">Sambutan Kepala Sekolah &nbsp;<img src="https://img.icons8.com/pastel-glyph/64/000000/-chair.png" width="20" height="20"/></a></li>
                <li><a class="dropdown-item" href="visimisi.php">Visi dan Misi &nbsp;<img src="https://img.icons8.com/ios-filled/50/000000/table.png" width="20" height="20"/></a></li>
                <li><a class="dropdown-item" href="saranaprasarana.php">Sarana dan Prasarana &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Pendidik & Tenaga Pendidik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="Struktur Organisasi Sekolah.html">Struktur Organisasi Sekolah &nbsp;<img src="https://img.icons8.com/ios-filled/50/000000/tree-structure.png" width="20" height="20"/></a></li>
                  <li><a class="dropdown-item" href="Kepala Sekolah.html">Kepala Sekolah &nbsp;<img src="https://img.icons8.com/pastel-glyph/100/000000/school-director--v2.png" width="20" height="20"/></a></li>
                  <li><a class="dropdown-item" href="Komite Sekolah.html">Komite Sekolah &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
                  <li><a class="dropdown-item" href="Data Guru.html">Data Guru &nbsp; <img src="https://img.icons8.com/ios-filled/50/000000/teacher.png" width="20" height="20"/></a></li>
                  <li><a class="dropdown-item" href="Data Tata Usaha.html">Data Usaha &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
                </ul>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="Ekstrakulikuler.php">Extra Kulikuler</a>
            </li>
            <a class="btn tombol-button text-light" href="index2.php" role="button">Login</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->

    <!-- Table -->
  
<!-- container -->
<div class="container">
  <!-- Info Panel -->
  <div class="row justify-content-center">
    <div class="col-10 panel">
     <div class="row">
        <div class="col-lg">
              <div class="content">
                <center><h1>Form Edit Daftar Guru SMAN 1 Cerdas Berkarya</h1></center>
                <br>
<head>
</head>
<body>
 <header>
    </header>

    <form action="proses-edit1.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> L</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> P</label>
        </p>
        <p>
            <label for="status">Status: </label>
            <?php $status = $siswa['status']; ?>
            <select name="status">
                <option <?php echo ($status == 'PNS') ? "selected": "" ?>>PNS</option>
                <option <?php echo ($status == 'Kontrak') ? "selected": "" ?>>Kontrak</option>
            </select>
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name="jabatan" placeholder="jabatan" value="<?php echo $siswa['jabatan'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>