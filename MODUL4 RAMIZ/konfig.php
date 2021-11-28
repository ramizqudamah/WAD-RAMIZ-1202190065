<?php
$conn = mysqli_connect('localhost', 'root', '', 'wad_modul4');

if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
