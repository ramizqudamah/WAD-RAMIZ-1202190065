<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require('konfig.php');
unset($_SESSION['status']);
// if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
//     $id=$_COOKIE['id'];
//     $key=$_COOKIE['key'];

//     $test1="SELECT * FROM user where id='$id'";
//         $login=mysqli_query($conn,$test1);
//         $row=mysqli_fetch_assoc($login);

//     if($key === hash('sha256',$row['password'])){
//         $_SESSION['status'] = TRUE;
//     }
// }

// if(isset($_SESSION['status'])){
//     header("Location: index.php");
//     exit;
// }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $select = "SELECT * FROM user where email ='$email' and password ='$password'";
        $login = mysqli_query($conn, $select);
        $cek = mysqli_num_rows($login);
        if ($cek > 0) {
            $data = mysqli_fetch_assoc($login);
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['nohp'] = $data['no_hp'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['status'] = TRUE;
            if (isset($_POST['remember'])) {
                setcookie('id', $data['id'], time() + 3600);
                setcookie('email', $data['email'], time() + 3600);
                setcookie('status', "true", time() + 3600);
                setcookie('key', $data['password'], time() + 3600);
            }
            echo '<div class="alert alert-warning" role="alert">
        Berhasil login</div>';

            header("Refresh:1;url=index.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Gagal Login
          </div>' . mysqli_error($conn);
        }
    }
    ?>

    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="card border-light mb-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body ">
                        <h4 class="card-title text-center">Login</h4>
                        <hr />
                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php if (isset($_COOKIE["email"])) echo $_COOKIE['email'] ?? '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" value="<?php if (isset($_COOKIE["key"])) echo $_COOKIE['key'] ?? '' ?>">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="d-flex justify-content-center pt-3">
                                <button type="submit" name="login" class="btn btn-primary">Submit</button>
                            </div>
                            <p class="card-text d-flex justify-content-center">Belum punya akun? <a href="register.php">
                                    Registrasi</a></p>
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