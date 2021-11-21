<?php

$host     = "localhost";
$user     = "root";
$name     = "modul3";
$password = "";

$conn = mysqli_connect($host, $user, $password, $name);

if(!$conn) {
    echo "<script>
            alert('Gagal Terhubung ke DataBase Modul3')'
          </script>";
}

?>