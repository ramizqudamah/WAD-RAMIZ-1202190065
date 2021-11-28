<?php
session_start();
include ('konfig.php');
$nama=$_POST['nama'];
$nohp=$_POST['nohp'];
$password=$_POST['pass'];
$password_konfirmasi=$_POST['password_konfirmasi'];
$value=$_POST['color'];
if ($password == $password_konfirmasi){
setcookie('col',$value,time()+3600);
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['password'] = $_POST['pass'];
$_SESSION['nohp'] = $_POST['nohp'];
$update= "UPDATE user SET
nama = '$nama',
no_hp = '$nohp',
password = '$password'
WHERE id = '".$_SESSION['id']."'";
$data = mysqli_query($conn,$update);
    if ($data) {
    $_SESSION['update']=TRUE;
    header("Refresh:0;url=profile.php");
    } else{
    echo "Error updating record: " . mysqli_error($conn);
    }
}
else{
    $_SESSION['salah']=TRUE;
    header("Refresh:0;url=profile.php");
}
