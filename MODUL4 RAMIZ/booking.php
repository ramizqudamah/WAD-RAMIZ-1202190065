<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION['status'])) {
    header("Location: login.php");
    exit;
}

include('konfig.php');
$query = ("SELECT * FROM booking WHERE user_id='" . $_SESSION['id'] . "'");
$test = mysqli_query($conn, $query);
$rows = [];
while ($hasil = mysqli_fetch_assoc($test)) {
    $rows[] = $hasil;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;

        }

        .bg-light {
            <?php
            echo "background-color:#" . $_COOKIE['col'] . "!important;";
            ?>
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <?php if (isset($_SESSION['hapus'])) {
    ?>
        <div class="alert alert-success" role="alert">Berhasil diHapus!</div>
    <?php  }
    unset($_SESSION['hapus']); ?>
    <div class="container">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Lokasi</th>
                <th>Tanggal Perjalanan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php $total = 0; ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama_tempat'] ?></td>
                    <td><?= $row['lokasi'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td>Rp. <?= $row['harga'];
                            $total = $total + $row['harga'] ?></td>
                    <td> <a class="btn btn-danger" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</a>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <th colspan="4">Total</th>

                <th>Rp. <?= $total; ?></th>
            </tr>
        </table>
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