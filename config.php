<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_ukk_kasir_10";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi){
     echo "koneksi Gagal";
}