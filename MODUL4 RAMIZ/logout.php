<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            background-color: #81f0da;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-2" href="#">WAD HANDSOME</a>
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
    <div class="alert alert-warning" role="alert">Berhasil logout</div>
    <?php
    session_start();
    if (!isset($_SESSION['status'])) {
        header("Location: login.php");
        exit;
    }
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);
    setcookie('col', '', time() - 3600);
    header("Refresh:2;url=login.php");

    exit;
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>