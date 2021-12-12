<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MODUL5 RAMIZ</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class=" navbar-nav mx-auto ">
            <li class=" nav-item">
                <a class="nav-item nav-link " href="/home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link " href="/vaccine">VACCINE</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link active font-weight-bold" href="/patient">PATIENT</a>
            </li>
        </ul>
    </nav>
    <!-- Navbar -->

    <!-- Field -->
    <div class="container py-5">
        <h3 class="text-center py-5"> Register {{$vaccine->name}}</h3>
        <form method="post" enctype="multipart/form-data" action="{{ route('patient.store') }}">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="vaccine_id">Vaccine ID</label>
                <input type="text" class="form-control" name="vaccine_id" value="{{$vaccine->id}}" readonly>
            </div>
            <div class="form-group">
                <label for="name">Patient Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="img_ktp">KTP</label>
                <input type="file" class="form-control-file" name="img_ktp">
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="number" class="form-control" name="no_hp">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <!-- Field -->

    <!-- Footer -->
    <footer>
        <div class="p-4 text-center fixed-bottom">
            <a type="button" href="" data-toggle="modal" data-target="#Modal" style="color: black;">
                Made with <i class="fas fa-heart " style="color:purple"></i>
                Ramiz Qudamah - 1202190065 </a>
        </div>
        <!-- Modal Footer-->
        <div class="modal fade" id="Modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Kesan : </p>
                        <p>Pesan : </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>