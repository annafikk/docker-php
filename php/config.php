<?php

$server = "db";
$user = "php_docker";
$password = "password";
$nama_database = "php_docker";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal Terhubung: " . mysqli_connect_error());
}
?>