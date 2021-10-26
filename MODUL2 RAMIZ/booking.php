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
                  <a class="nav-link" href="MODUL2 RAMIZ.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php ">Booking</a>
                </li>
              </ul>
            </div>
        </div>    
    </nav>
    <!-- NAVBAR END -->

    <br>
    <br>
    <br>
    
    <div class="container bg-dark">
        <p class="text-light text-center lh-5 pt-2 pb-2">Reserve your revenue now!</p>
    </div>  

    <div class="container-fluid">
      <div class="row justify-content-center align-content-center">
          <div class="col-md-4 mt-5">
            <?php
                if ($_GET != NULL) {
                    ?><img src="<?= $_GET["gambargambar"] ?>" width="500px"><?php
                } else {
                    ?> <img src="<?=$gambargambar[0]?>" alt="gambar" width="500px"> <?php
                } 
            ?>
          </div>
        
          <div class="col-md-5">
          <form action="mybook.php" method="post">
              <div class="form-group">
                  <label for="Name"> Name </label>
                  <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                  <label for="Event Date"> Event Date </label>
                  <input type="date" class="form-control" name="eventdate">
              </div>
              <div class="form-group">
                  <label for="Start Time"> Start Time </label>
                  <input type="time" class="form-control" name="starttime">
              </div>
              <div class="form-group">
                  <label for="Duration(hours)"> Duration(hours) </label>
                  <input type="number" class="form-control" name="duration" aria-describedby="dur_info" value=0>
              </div>
              <div class="form-group">
                  <label for="Building Type"> Building Type </label>
                    
                    <select class="custom-select" name="nama_gedung">
                    <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                    <option value="Nusantara Hall">Nusantara Hall</option>
                    <option value="Garuda Hall">Garuda Hall</option>
                    </select>
              </div>
              <div class="form-group">
                  <label for="Phone Number"> Phone Number </label>
                  <input type="number" class="form-control" name="phone_num">
                  <br>
              <div class="form-group">
                  <label for="Add Service(s)"> Add Service(s) </label>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="service[]" value="Room Services"
                          id="service_check1">
                      Catering / $700
                      <br/>
                      <input class="form-check-input" type="checkbox" name="service[]" value="Breakfast"
                          id="service_check2">
                      Decoration / $450
                      <br/>
                      <input class="form-check-input" type="checkbox" name="service[]" value="Room Services"
                          id="service_check1">
                      Sound System / $250
                      <br/>
                  </div>
              </div>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block" value="Book"></input>
              </div>
            </form>
          </div>
      </div>
      </div>
    </div>    

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