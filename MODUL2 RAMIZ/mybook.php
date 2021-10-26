<?php
$gambargambar = ["gambar1.jpg","gambar2.jpg","gambar3.jpg"];
$tanggal = $_POST['eventdate'] . " " . $_POST['starttime'];
$masuk = date('d/m/Y H:i:s', strtotime($tanggal));     
$keluar = date('d/m/Y H:i:s', strtotime($tanggal) + 60 * 60 * $_POST['duration']);
$gedung = $_POST["nama_gedung"];
$hargagedung = array("nusantara" => 2000, "garuda" => 1000, "gsg" => 500);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "css/bootstrap.css" >
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MODUL2 RAMIZ</title>
  </head>
  <body>
    <!-- NAVBAR -->
  <div class="pb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-dark bg-dark ">
        <div class="container d-flex justify-content-center align-item-center">
          <div class="navbar-nav" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="MODUL2 RAMIZ.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php ">Booking</a>
                </li>
              </ul>
            </div>
        </div>    
    </nav>
  </div>
    <!-- NAVBAR END -->

    <!-- TEKS -->
    <div class="pt-3 pb-3 text-center">
      <h3>Thank you <?= $_POST["name"] ?> for reserving</h3>
      <p>Please Chek your Reservation Details </p>
    </div>
    <!-- END TEKS -->

    <!-- TABLE -->
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Chek-In</th>
          <th scope="col">Chek-Out</th>
          <th scope="col">Building Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Service</th>
          <th scope="col">Total Price</th>
        </tr>
        <tr>
          <td> <?php echo rand() ?> </td>
          <td> <?= $_POST["name"] ?> </td>
          <td> <?= $masuk ?> </td>
          <td> <?= $keluar ?></td>
          <td> <?= $_POST["nama_gedung"] ?></td>
          <td> <?= $_POST["phone_num"] ?></td>
          <td> 
            <ul>
              <?php
                if(!empty($_POST['service'])){
                  foreach ($_POST['service'] as $srv){
                    echo "<li>$srv</li>";                                    
                    }
                } else {
                  echo "-";
                  }
              ?>
          </td>
          <td> 
            <?php
              if ($gedung == "Nusantara Hall") {
                $harga = $hargagedung ["nusantara"] * $_POST["duration"];
                echo "$" . $harga ;
              } elseif ($gedung = "Garuda Hall") {
                $harga = $hargagedung ["garuda"] * $_POST["duration"];
                echo "$" . $harga ;
              } elseif ($gedung = "Gedung Serba Guna") {
                $harga = $hargagedung ["gsg"] * $_POST["duration"];
                echo "$" . $harga ;
              }
              
            ?>
          </td>
        </tr>
      </thead>
    </table>
    <!-- END TABLE -->

    <!-- FOOTER -->
    <footer align="center">Created by: Ramiz_1202190065</footer>
    <!-- END FOOTER -->
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