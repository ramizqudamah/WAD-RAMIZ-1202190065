
<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
    exit;
}
include 'konfig.php';
$id = $_GET['id'];
$hapus = "DELETE FROM booking WHERE id='$id'";
$query = mysqli_query($conn, $hapus);
if ($query) {
    $_SESSION['hapus'] = TRUE;
    header("Refresh:0;url=booking.php");
} else {
    echo "<script>alert('gagal hapus');document.location.href='booking.php';</script>";
}


?>
