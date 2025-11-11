<?php

// Date_Default_timezone_set('Asia/jakarta');
// $server = "localhost";
// $user = "u479820688_sentosa";
// $password = "326167Dian&&";
// $database = "u479820688_sentosa";
// set_time_limit(1800);

// include_once "conn.php";
// ($GLOBALS["___mysqli_ston"] = mysqli_connect($server, $user, $password)) or die("Koneksi gagal");
// mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die("Database tidak ditemukan");
// // $koneksi = new mysqli($server, $user, $password) or die("Koneksi gagal");
// $db = mysqli_connect('localhost', 'u479820688_sentosa', '326167Dian&&', 'u479820688_sentosa');

Date_Default_timezone_set('Asia/jakarta');
$server = "localhost";
$user = "root";
$password = "";
$database = "sarijadi";
set_time_limit(1800);

include_once "conn.php";
($GLOBALS["___mysqli_ston"] = mysqli_connect($server, $user, $password)) or die("Koneksi gagal");
mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die("Database tidak ditemukan");
$db = mysqli_connect('localhost', 'root', '', 'sarijadi');
?>

