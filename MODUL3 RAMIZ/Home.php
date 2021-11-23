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

  <!-- Bagian Tengah Web Jika Kosong-->
  <!-- <div class="container-fluid tengahweb">
      <h1 class="text-center"> Belum Ada Buku</h1>
      <hr class="bg-primary align-item-center"width="100%" heigth="1px" size="8"> </hr>
      <p class="text-center">Silahkan menambah buku</p>
    </div> -->
  <!-- Bagian Tengah Web Jika Kosong-->

  <!-- Bagian Tengah Web Jika Ada Data-->
  <div class="row row-cols-1 row-cols-md-3 g-4 tengahwebdata">
    <div class="col">
      <div class="card h-100">
        <img src="contoh aje.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a class="btn btn-success" href="Detail Buku.php" role="button">Detail Buku</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="contoh aje.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <a class="btn btn-success" href="Detail Buku.php" role="button">Detail Buku</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>
  <!-- Bagian Tengah Web Jika Ada Data-->

  <!-- FOrm Tambah Buku -->

  <!-- FOrm Tambah Buku -->

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