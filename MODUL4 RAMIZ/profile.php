<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (isset($_SESSION['status'])) {
    header("Location: login.php");
    exit;
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        .bg-light {
            <?php
            echo "background-color:#" . $_COOKIE['col'] . "!important;";
            ?>
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand ml-2" href="index.php">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li><span class="navbar-text nowrap-text"><a href="booking.php" class="icon-block"><i class="fas fa-shopping-cart"></i>
                        </a>Selamat datang,
                    </span>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['nama'] ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <?php if (isset($_SESSION['update'])) {
    ?>
        <div class="alert alert-warning" role="alert">Berhasil diupdate!</div>
    <?php  }
    unset($_SESSION['update']); ?>
    <?php if (isset($_SESSION['salah'])) {
    ?>
        <div class="alert alert-warning" role="alert">Password tidak sama</div>
    <?php  }
    unset($_SESSION['salah']); ?>
    <div class="container pt-3">
        <h3 class="text-center">Profile</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">

                <form action="update.php " method="POST">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" readonly class="form-control-plaintext" id="staticEmail" name="email" value="<?= $_SESSION['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $_SESSION['nama'] ?>" id="inputnama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputnama" name="nohp" value="<?= $_SESSION['nohp'] ?>">
                        </div>
                    </div>
                    <hr />
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="pass" class="form-control" id="inputPassword" value="<?= $_SESSION['password'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_konfirmasi" class="form-control" id="inputPassword" value="<?= $_SESSION['password'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Ubah warna</label>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="color" class="form-control">
                                <option value="f8f9fa">Light</option>
                                <option value="FBFF00">Yellow</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary btn-lg btn-block">Submit</button>
                    <button type="cancel" class="btn btn-light btn-lg btn-block">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center p-3 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
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