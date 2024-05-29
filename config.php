<?php

$server = "localhost";
$user = "root";
$password = "mysql";
$nama_database = "manajemen_inventaris";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>