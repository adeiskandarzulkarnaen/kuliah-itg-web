<?php

include './koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];


$ini_query = "INSERT INTO tamu VALUES(NULL, '$nama', '$email')";

mysqli_query($koneksi, $ini_query);

header("Location: ./index.php");

exit;
