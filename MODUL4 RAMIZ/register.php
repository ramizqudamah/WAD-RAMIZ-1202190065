<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            background-color: #81f0da;
        }

        .bg-light {
            <?php echo "background-color:#" . $_COOKIE['col'] . "!important;";
            ?>
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-2" href="index.php">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li>
                    <a class="nav-link mr-2" href="login.php">Login</a>
                </li>
                <li>
                    <!-- Button trigger modal -->
                    <a type="button" class="nav-link mr-2" href="register.php">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    include('konfig.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['pass'];
        $insert = "INSERT INTO user VALUES(NULL,'$name','$email','$password','$phone')";
        $hasil = mysqli_query($conn, $insert);
        if ($hasil) {
            echo '<div class="alert alert-warning" role="alert">berhasil registrasi</div>';
            header("Refresh:2;url=login.php");
        } else {
            echo '<div class="alert alert-warning" role="alert">berhasil registrasi</div>' . mysqli_error($conn);
        }
    }
    ?>
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="card border-light mb-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body ">
                        <h4 class="card-title text-center">Registrasi</h4>
                        <hr />
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama</label>
                                <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Masukan nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Handphone</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Masukan Nomor Handphone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                            </div>
                            <div class="d-flex justify-content-center ">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <p class="card-text d-flex justify-content-center">Sudah punya akun? <a href="login.php">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center p-3 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a type="button" data-toggle="modal" data-target="#exampleModal4">
                RAMIZ QUDAMAH 1202190065
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Nama: RAMIZ QUDAMAH</p>
                        <p>NIM: 1202190065</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>