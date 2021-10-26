<?php
$gambargambar = ["gambar1.jpg","gambar2.jpg","gambar3.jpg"];
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-dark bg-dark ">
        <div class="container d-flex justify-content-center align-item-center">
          <div class="navbar-nav" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php ">Booking</a>
                </li>
              </ul>
            </div>
        </div>    
    </nav>
    <!-- NAVBAR END -->
    <br />
    <br />
    <br />
    <!-- TEXT -->
    <div class="container">
      <h3 class="text-center">WELCOME TO ESD VENUE RESERVATION</h3>
    </div>
    <!-- END TEXT -->

    <!-- TEXT -->

    <div class="container bg-dark">
        <p class="text-light text-center lh-5 pt-2 pb-2">Find your best deal for your event, here!</p>
    </div>   

    <!-- END TEXT -->
    <br />
    <!-- CARD -->   
    <div class="container d-flex justify-content-center align-item-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="gambar1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nusantara Hall</h5>
                        <p class="card-text">$2000 / Hour <br> 5000 capacity </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="text-center fw-bold list-group-item">Free Parking</li>
                    <li class="text-center fw-bold list-group-item">Full AC</li>
                    <li class="text-center fw-bold list-group-item">Cleaning Service</li>
                    <li class="text-center fw-bold list-group-item">Covid-19 Protocol</li>
                </ul>
                <div class="card-body">
                    <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
                    <a href="booking.php?gambargambar=<?= $gambargambar[0] ?> " class="btn btn-primary">Book now</a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="gambar2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garuda Hall</h5>
                        <p class="card-text">$1000 / Hour <br> 2000 capacity </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="text-center fw-bold list-group-item">Free Parking</li>
                    <li class="text-center fw-bold list-group-item">Full AC</li>
                    <li class="text-center fw-bold list-group-item" style="color:red">No Cleaning Service</li>
                    <li class="text-center fw-bold list-group-item">Covid-19 Protocol</li>
                </ul>
                <div class="card-body">
                    <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
                    <a href="booking.php?gambargambar=<?= $gambargambar[1] ?>"class="btn btn-primary">Book now</a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="gambar3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gedung Serba Guna</h5>
                        <p class="card-text">$500 / Hour <br> 500 capacity </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="text-center fw-bold list-group-item" style="color:red">No Free Parking</li>
                    <li class="text-center fw-bold list-group-item" style="color:red">No Full AC</li>
                    <li class="text-center fw-bold list-group-item" style="color:red">No Cleaning Service</li>
                    <li class="text-center fw-bold list-group-item" >Covid-19 Protocol</li>
                </ul>
                <div class="card-body">
                    <a href="booking.php?gambargambar=<?= $gambargambar[2] ?>"class="btn btn-primary">Book now</a>
                </div>
                </div>
            </div>
        </div>
    </div>    
    <!--END CARD -->

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