<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        .bg-light {
            <?php echo "background-color:#" . $_COOKIE['col'] . "!important;";
            ?>
        }

        .card-img-top {
            display: block;
            height: 10vw;
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
            <?php
            if (isset($_SESSION['status'])) {
            ?>
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
            <?php
            } else {
            ?>
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
            <?php
            }
            ?>

        </div>
    </nav>
    <?php
    if (isset($_POST['add'])) {
        include('konfig.php');
        if (!isset($_SESSION['status'])) {
            header("Location: login.php");
            exit;
        } else {
            $id = $_POST['id'];
            $nama_tempat = $_POST['nama_tempat'];
            $lokasi = $_POST['lokasi'];
            $harga = $_POST['harga'];
            $date = $_POST['date'];
            $add = "INSERT INTO booking VALUES(NULL,'$id','$nama_tempat','$lokasi','$harga','$date')";
            $hasil2 = mysqli_query($conn, $add);
            if ($hasil2) {
                echo '<div class="alert alert-success" role="alert">berhasil Tambah booking</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">gagal tambah cards</div>' . mysqli_error($conn);
                var_dump($add);
            }
        }
    }
    ?>
    <div class="container pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header text-center" style="background: rgb(219,212,112);
                                background: linear-gradient(90deg, rgba(219,212,112,1) 0%, rgba(167,99,5,1) 50%, rgba(1,189,227,1) 100%);">
                        <h1>EAD Travel</h1>
                    </div>
                    <div class="card-group">
                        <!-- Make cards -->
                        <div class="card">
                            <form method="post">
                                <img class="card-img-top" src="img/rajaampat.jpg" alt="<?= $i ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Raja Ampat, Papua</h5>
                                    <p class="card-text">Berlokasi di Papua dengan keindahan alamnya membuat banyak wisatawan dari mancanegara datang untuk berwisata ditempat ini</p>
                                    <hr /> Rp. 1.000.000
                                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?? '' ?>">
                                    <input type="hidden" name="nama_tempat" value="Raja Ampat">
                                    <input type="hidden" name="lokasi" value="Papua">
                                    <input type="hidden" name="harga" value="10000000">
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                        Pesan tiket
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="date">Tanggal Pemesanan</label>
                                                        <input type="date" class="form-control" id="date" name="date" placeholder="name@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="add" class="btn btn-primary">Tambahkan
                                                        ke
                                                        keranjang</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <form method="post">
                                <img class="card-img-top" src="img/komodo.jpeg">
                                <div class="card-body">
                                    <h5 class="card-title">Taman Nasional Komodo, NTT</h5>
                                    <p class="card-text">Berlokasi di Nusa Tenggara TImur dengan keindahan alamnya membuat banyak wisatawan dari mancanegara datang</p>
                                    <hr /> Rp. 3.000.000
                                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?? '' ?>">
                                    <input type="hidden" name="nama_tempat" value="Taman Nasional Komodo">
                                    <input type="hidden" name="lokasi" value="NTT">
                                    <input type="hidden" name="harga" value="3000000">
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                        Pesan tiket
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="date">Tanggal Pemesanan</label>
                                                        <input type="date" class="form-control" id="date" name="date" placeholder="name@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="add" class="btn btn-primary">Tambahkan
                                                        ke
                                                        keranjang</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <form method="post">
                                <img class="card-img-top" src="img/bromo.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Gunung Bromo</h5>
                                    <p class="card-text">Berlokasi di Malang dengan keindahan alamnya membuat banyak wisatawan dari mancanegara datang untuk berwisata ditempat ini</p>
                                    <hr /> Rp. 2.500.000
                                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?? '' ?>">
                                    <input type="hidden" name="nama_tempat" value="Gunung Bromo">
                                    <input type="hidden" name="lokasi" value="malang">
                                    <input type="hidden" name="harga" value="2500000">
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                        Pesan tiket
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="date">Tanggal Pemesanan</label>
                                                        <input type="date" class="form-control" id="date" name="date" placeholder="name@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="add" class="btn btn-primary">Tambahkan
                                                        ke
                                                        keranjang</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End cards -->
                    </div>
                </div>
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