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
        <p class="text-light text-center">Reserve your revenue now!</p>
    </div>  

    <div class="container d-flex justify-content-center align-item-center">
        <img src="gambar1.jpg" class="card-img-top col-md-6 " alt="...">
    </div>
    <br>
    <!-- FORM -->
    <section>
        <div class="container">
            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Event Date</label>
                <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Start Time</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Duration (Hours)</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Building Type</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                
                <div class="form-group col-md-6">
                <label for="inputZip">Phone Number</label>
                <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <p> Add Service(s) </p>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Catering / $700
                </label>
                </div>
           

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Decoration / $450
                </label>
                </div>
           
            
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Catering / $250
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Book</button>
            </form>
        </div>
    </section>
    <!-- END FORM -->

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