<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- My CSS -->
  <link rel="stylesheet" href="edit.css">
  <!-- My CSS -->
  <title>Hello, world!</title>

  <!-- Konek database tambah buku -->
  <?php
  include('config.php');
  
  if (isset($_POST['submit'])) {
    $judul        = $_POST['judulbuku'];
    $pengarang    = $_POST['penulis'];
    $tahunterbit  = $_POST['tahun'];
    $desk         = $_POST['penjelasan'];
    $indon        = $_POST['indo';'bahasalain'];
    $progr        = $_POST['program' ;'web'; 'java'; 'oop' ;'mvc'; 'kalkulus' ;'lainnya'];
    $gambs        = $_POST['inputgambar'];

    $insert  = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) 
                    VALUES ('$judul','$pengarang','$tahunterbit', '$desk','$gambs','$progr','$indon') ";
    $query = mysqli_connect($conn, $insert);

    header('Location: Home.php');
  }


  ?>
  <!-- Konek database tambah buku -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="Home.php">
        <img src="logo-ead.png" width=150 alt="">
      </a>
      <form form class="d-flex">
        <a class="btn btn-success" href="Tambah Buku.php" role="button">Tambah Buku</a>
      </form>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Form Tambah Buku -->
  <form class="tambahbuku" method="POST">
    <h1 class="text-center bacaantambahbuku"> Tambah Data Buku</h1>
    <div class="row mb-3">
      <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label fw-bold">Judul Buku</label>
        <input type="text" class="form-control" name="judulbuku">
      </div>
    </div>
    <div class="row mb-3">
      <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label fw-bold">Penulis</label>
        <input type="text" class="form-control" name="penulis">
      </div>
    </div>
    <div class="row mb-3">
      <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label fw-bold">Tahun Terbit</label>
        <input type="text" class="form-control" name="tahun">
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label fw-bold">Deskripsi</label>
      <textarea class="form-control" name="penjelasan" rows="3"></textarea>
    </div>
    </div>
    </div>
    <fieldset class="row mb-3 d-flex">
      <legend class="col-form-label col-sm-1 pt-0 fw-bold">Bahasa</legend>
      <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" name="indo" value="option1">
          <label class="form-check-label" for="inlineRadio1">Indonesia</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" name="bahasalain" value="option2">
          <label class="form-check-label" for="inlineRadio2">Lainnya</label>
        </div>
      </div>
    </fieldset>
    <fieldset class="row mb-3 d-flex">
      <legend class="col-form-label col-sm-1 pt-0 fw-bold">Tag</legend>
      <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="program" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="web" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Website</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="java" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Java</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="oop" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">OOP</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="mvc" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">MVC</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="kalkulus" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Kalkulus</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="lainnya" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
        </div>
      </div>
    </fieldset>
    <fieldset class="row mb-3">
      <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label fw-bold">Gambar</label>
        <input type="file" class="form-control" name="inputgambar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      </div>
      </div>
    </fieldset>
    <div class="mb-2">
      <button type="submit" class="btn btn-primary btn-lg" name="submit">+Tambah Buku</button>
    </div>
  </form>
  <!-- Form Tambah Buku -->

  <!-- Bottom Web -->
  <div class="container-fluid bottomweb">
    <img src="logo-ead.png" class="rounded mx-auto d-block" alt="..." width="200">
    <h2 class="fw-bold text-center"> Perpustakaan WAD</h2>
    <p class="text-center">ⓒ Ramiz_1202190065</p>
  </div>
  <!-- Bottom Web -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>